<?php
/**
 * Created by PhpStorm.
 * User: Nei Rocha
 * Date: 08/07/2015
 * Time: 20:44
 */
namespace NEI\CONEXAO;

class ConexaoDB
{
    public function conexaoDB()
    {

        try{
            $config = require_once "config.php";
            if(!isset($config['db'])){
                throw new \InvalidArgumentException(" Configuracao nao existe");
            }

            $host = (isset($config['db']['host'])) ? $config['db']['host'] : null;
            $dbname = (isset($config['db']['dbname'])) ? $config['db']['dbname'] : null;
            $user = (isset($config['db']['user'])) ? $config['db']['user'] : null;
            $password = (isset($config['db']['password'])) ? $config['db']['password'] : null;

            return new \PDO("mysql:host={$host};dbname={$dbname}", $user, $password);

        }catch(\PDOException $e){

            echo 'ERROR: ' .$e->getMessage(). "\n";
            echo 'ERROR: ' .$e->getTraceAsString(). "\n";
        }

    }



}


