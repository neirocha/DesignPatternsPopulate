<?php
/**
 * Created by PhpStorm.
 * User: Nei Rocha
 * Date: 08/07/2015
 * Time: 18:42
 */

namespace NEI;


use NEI\INTERFACES\FormularioInterface;
use NEI\TYPES\Fields;

class Formulario extends Fields implements FormularioInterface
{
    public function creatField($type, $options = array())
    {


        $class = "NEI\\TYPES\\".ucfirst(strtolower($type))."Type";


        if(!class_exists($class))
        {
            throw new \InvalidArgumentException('Não existe classe');
            // echo "claase inexistente";
        }

        $field = new $class();
        foreach($options as $kay => $value)
        {
            $setters = "set" . ucfirst($kay);
            if(method_exists($field, $setters))
            {
                $field->$setters($value);
            }
        }
        return $field;
    }


    public function popular()
    {
        $formu = '<form action="retorna.php" method="post">';
        echo $formu;

        foreach($this->fields as $campo)
        {
            $campo->popular();
        }

        echo "</form>";
    }


}