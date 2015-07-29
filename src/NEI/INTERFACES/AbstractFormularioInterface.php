<?php
/**
 * Created by PhpStorm.
 * User: Nei Rocha
 * Date: 08/07/2015
 * Time: 19:44
 */

namespace NEI\INTERFACES;


interface AbstractFormularioInterface
{
    public function setId($id);
    public function setName($name);
    public function setClass($class);
    public function setValue($value);
    public function setRequired($required);
    public function setSize($size);
    public function setFieldset($fieldset);
    public function setLabel($label);

}