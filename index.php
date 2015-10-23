<?php
/**
 * Created by PhpStorm.
 * User: vadim
 * Date: 23.10.15
 * Time: 15:28
 */

require_once 'vendor/autoload.php';

use Players\Players;
use Teams\Teams;

$players = new Players();
$players->setFirstName('Ciro');
$players->setLastName('Immobile');
$players->setAge(27);
$players->setSkill('80');

echo 'player:';
echo $players->__toString();

$teams = new Teams();
$teams->setFirstName('Karim');
$teams->setLastName('Benzema');
$teams->setAge(29);
$teams->setSkill('85');
$teams->setTeam('Real Madrid');
$teams->setPosition('Striker');
$teams->setCost("35 000 000$");

echo "<br>".'player:';
echo $teams->__toString();

$teams= new Teams();
$teams->setFirstName('Arturo');
$teams->setLastName('Vidal');
$teams->setAge(28);
$teams->setSkill('84');
$teams->setTeam('Bayern Munich');
$teams->setPosition('Central Midfilder');
$teams->setCost("30 000 000$");

echo "<br>".'player:';
echo $teams->__toString();