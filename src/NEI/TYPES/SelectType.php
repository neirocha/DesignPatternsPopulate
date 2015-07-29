<?php
/**
 * Created by PhpStorm.
 * User: Nei Rocha
 * Date: 08/07/2015
 * Time: 20:05
 */

namespace NEI\TYPES;


use NEI\INTERFACES\SelectTypeInterface;
use NEI\CONEXAO\ConexaoDB;

class SelectType extends AbstractFormulario implements SelectTypeInterface
{

    protected $size;
    protected $name;


    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param mixed $value
     */
    public function setSize($size)
    {
        $this->size = $size;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    public function popular()
    {

        echo "<select name='{$this->getName()}' style='width: 370px; height: 30px;'><option></option>";

        $crud = new CrudType();
        $crud->selecionar();

        echo" </select>";


    }

}