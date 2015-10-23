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
use Country\Country;


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

$country= new Country();
$country->setFirstName('Arturo');
$country->setLastName('Vidal');
$country->setAge(28);
$country->setSkill('84');
$country->setCountry('Chile');
$country->setPosition('Central Midfilder');


echo "<br>".'player:';
echo $country->__toString();