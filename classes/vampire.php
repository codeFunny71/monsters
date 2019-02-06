<?php
class Vampire extends Monster
{
    private $_victims;

    function Vampire($name)
    {
        //parent::Monster($name);
        parent::setName($name);
        $this->_victims = 0;
    }
    function attack()
    {
        echo "Another has fallen victim to " . $this->getName() . " the vampire";
        $this->_victims++;
    }
    function getVictims()
    {
        return $this->_victims;
    }
}