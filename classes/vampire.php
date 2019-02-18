<?php
class Vampire extends Monster
{
    private static $_victims;

    function __construct($name = "bill")
    {
        parent::__construct($name);
        parent::setName($name);

        self::$_victims = 0;
    }
    function attack()
    {
        echo "Another has fallen victim to " . $this->getName() . " the vampire <br>";
        self::$_victims++;
    }
    function getVictims()
    {
        return self::$_victims;
    }
}