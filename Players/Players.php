<?php
/**
 * Created by PhpStorm.
 * User: vadim
 * Date: 23.10.15
 * Time: 14:57
 */
namespace Players;

class Players extends APlayers
{
    protected $firstname;
    protected $lastname;
    protected $age;
    protected $skill;


    public function getFirstName()
    {
     return $this->firstname;
    }
    public function getLastName()
    {
        return $this->lastname;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function getSkill()
    {
        return $this->skill;
    }
    public function setFirstName($firstname)
    {
        $this->firstname = $firstname;
    }
    public function setLastName($lastname)
    {
        $this->lastname = $lastname;
    }
    public function setAge($age)
    {
        $this->age = $age;
    }
    public function setSkill($skill)
    {
        $this->skill = $skill;
    }


}