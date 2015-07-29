<?php
/**
 * Created by PhpStorm.
 * User: Nei Rocha
 * Date: 09/07/2015
 * Time: 15:53
 */

namespace NEI\TYPES;


use NEI\INTERFACES\FieldsetTypeInterface;

class FieldsetType extends AbstractFormulario implements FieldsetTypeInterface
{
    protected $legend;
    protected $fields = array();
    protected $field;


    public function getField()
    {
        return $this->field;
    }

    public function setField($field)
    {
        $this->field = $field;
        return $this;
    }
    public function setLegend($legend)
    {
        $this->legend = $legend;
        return $this;
    }

    public function getLegend()
    {
        return $this->legend;
    }
    public function getFields()
    {
        return $this->fields;
    }

    public function setFields($field)
    {
        $this->fields[] = $field;

    }


    public function popular()
    {
        echo "<fieldset><legend>{$this->legend}</legend>";
        foreach($this->fields as $field)
        {
            $field->popular();
        }

        echo "</fieldset>";
    }




}