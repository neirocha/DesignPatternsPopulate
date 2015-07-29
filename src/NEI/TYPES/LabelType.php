<?php
/**
 * Created by PhpStorm.
 * User: Nei Rocha
 * Date: 08/07/2015
 * Time: 19:54
 */

namespace NEI\TYPES;


use NEI\INTERFACES\LabelTypeInterface;

class LabelType extends AbstractFormulario implements LabelTypeInterface
{
    protected $text;

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    public function popular()
    {
        echo "<label class='{$this->getClass()}'>{$this->getText()}</label>";


    }



}