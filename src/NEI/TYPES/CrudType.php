<?php
/**
 * Created by PhpStorm.
 * User: Nei Rocha
 * Date: 08/07/2015
 * Time: 20:31
 */

namespace NEI\TYPES;

use NEI\CONEXAO\ConexaoDB;



class CrudType extends ConexaoDB
{
    public function selecionar()
    {

        $conn = new ConexaoDB();


        $sql = $conn->conexaoDB()->prepare("SELECT * FROM produto");
        $sql->execute();
        $res = $sql->fetchAll(\PDO::FETCH_ASSOC);
        foreach($res as $linha){

            echo "<option value='{$linha['id']}'>".$linha['nome']."</option>";

        }

    }

}
