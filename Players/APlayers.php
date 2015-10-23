<?php
/**
 * Created by PhpStorm.
 * User: vadim
 * Date: 23.10.15
 * Time: 14:48
 */

namespace Players;

abstract class APlayers
{

    public abstract function getFirstName();
    public abstract function getLastName();
    public abstract function getAge();
    public abstract function getSkill();
    public abstract function setFirstName($firstname);
    public abstract function setLastName($lastname);
    public abstract function setAge($age);
    public abstract function setSkill($skill);


    public function __toString()
    {
        $p = "<br>".'First Name: ' . $this->getFirstName() . "<br>";
        $p .= 'Last Name: ' . $this->getLastName() . "<br>";
        $p .= 'Age: ' . $this->getAge() . "<br>";
        $p .= 'Skill: ' . $this->getSkill() . "<br>";

        return $p;
    }

    public function __set($property, $value)
    {
        $this->$property = $value;
    }

    public function __get($property)
    {
        return $this->$property;
    }

}