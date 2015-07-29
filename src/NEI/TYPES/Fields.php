<?php
/**
 * Created by PhpStorm.
 * User: Nei Rocha
 * Date: 08/07/2015
 * Time: 20:03
 */

namespace NEI\TYPES;


use NEI\INTERFACES\AbstractFormularioInterface;


abstract class Fields
{
    protected $fields = array();

    public function adiciona(AbstractFormularioInterface $field)
    {
        $this->fields[] = $field;
        return $this;
    }

    public function getFields()
    {
        return $this->fields;
    }

    public function setFields($fields)
    {
        $this->fields = $fields;
        return $this;
    }

}