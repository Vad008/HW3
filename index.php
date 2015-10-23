<?php
/**
 * Created by PhpStorm.
 * User: vadim
 * Date: 23.10.15
 * Time: 15:28
 */

require_once 'vendor/autoload.php';

use Players\Players;

$players = new Players();
$players->setFirstName('Ciro');
$players->setLastName('Immobile');
$players->setAge(27);
$players->setSkill('80');

echo 'player:';
echo $players->__toString();

$players = new Players();
$players->setFirstName('Karim');
$players->setLastName('Benzema');
$players->setAge(29);
$players->setSkill('85');

echo "<br>".'player:';
echo $players->__toString();

$players = new Players();
$players->setFirstName('Arturo');
$players->setLastName('Vidal');
$players->setAge(28);
$players->setSkill('84');

echo "<br>".'player:';
echo $players->__toString();