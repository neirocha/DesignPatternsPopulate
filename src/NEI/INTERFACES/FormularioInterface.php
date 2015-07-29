<?php
/**
 * Created by PhpStorm.
 * User: Nei Rocha
 * Date: 08/07/2015
 * Time: 20:58
 */

namespace NEI\INTERFACES;


interface FormularioInterface
{

    public function creatField($type, $options = array());
    public function popular();

}