<?php
/**
 * Created by PhpStorm.
 * User: vadim
 * Date: 23.10.15
 * Time: 16:02
 */
namespace Teams;

use Players\Players;

class Teams extends Players implements TeamsInt
{
    protected $team;
    protected $position;
    protected $cost;

    public function getTeam()
    {
        return $this->team;
    }

    public function getPosition()
    {
        return $this->position;
    }

    public function getCost()
    {
        return $this->cost;
    }

    public function setTeam($team)
    {
        $this->team = $team;
    }

    public function setPosition($position)
    {
        $this->position = $position;
    }

    public function setCost($cost)
    {
        $this->cost = $cost;
    }

    public function __toString()
    {
        $p = parent::__toString();
        $p .= 'Team: ' . $this->getTeam() . "<br>";
        $p .= 'Position: ' . $this->getPosition() . "<br>";
        $p .= 'Cost: ' . $this->getCost() . "<br>";

        return $p;
    }
}