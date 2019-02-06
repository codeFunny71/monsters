<?php
class Monster
{
    private $_name;

    function __construct($name = "Vlad")
    {
        $this->_name = $name;
    }
    function setName($var)
    {
        $this->_name = $var;
    }
    function getName()
    {
        return $this->_name;
    }
    function attack()
    {
        echo $this->_name . " is attacking.";
    }
}