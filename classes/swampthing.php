<?php
class Swampthing extends Monster
{
    private static $_smell;

    function __construct($name = 'steve', $smell = 'very nice')
    {
        parent::__construct($name);
        parent::setName($name);

        self::$_smell = $smell;
    }
    function attack()
    {
        echo "Gurgle gurgle blub <br>";
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