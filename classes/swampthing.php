<?php
class Swampthing extends Monster
{
    private static $_smell;

    function __construct($name)
    {
        parent::__construct($name);
        parent::setName($name);

    }
    function attack()
    {
        echo "Gurgle gurgle blub";

    }
    function getSmell()
    {
        return self::$_smell;
    }
}