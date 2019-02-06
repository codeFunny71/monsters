<?php
class Swampthing extends Monster
{
    private static $_smell;

    function __construct($name, $smell)
    {
        parent::__construct($name);
        parent::setName($name);

        self::$_smell = $smell;
    }
    function attack()
    {
        echo "Gurgle gurgle blub";
    }
    function setSmell($var)
    {
        self::$_smell = $var;
    }
    function getSmell()
    {
        return self::$_smell;
    }
}