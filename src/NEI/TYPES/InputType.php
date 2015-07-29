<?php
/**
 * Created by PhpStorm.
 * User: Nei Rocha
 * Date: 08/07/2015
 * Time: 18:55
 */

namespace NEI\TYPES;

use NEI\INTERFACES\InputTypeInterface;

class InputType extends AbstractFormulario implements InputTypeInterface
{
    protected $type;


    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    public function popular()
    {


        echo "<input type='{$this->getType()}' name='{$this->getName()}' class='{$this->getClass()}' required='{$this->getRequired()}' value='{$this->getValue()}' size='{$this->getSize()}'/>";

    }
}

?>