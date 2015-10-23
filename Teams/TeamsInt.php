<?php
/**
 * Created by PhpStorm.
 * User: vadim
 * Date: 23.10.15
 * Time: 16:03
 */
namespace Teams;

interface TeamsInt
{
    public function getTeam();
    public function getPosition();
    public function getCost();
    public function setTeam($team);
    public function setPosition($position);
    public function setCost($cost);
}