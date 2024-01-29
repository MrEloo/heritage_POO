<?php

require 'Character.class.php';
require 'Warrior.class.php';
require 'Mage.class.php';

$character = new Character();
$warrior = new Warrior(10, 'Antoine', '5');
$mage = new Mage(15, 'Oliver', 9);

echo $warrior->introduce() . "\n <br>";
echo $mage->introduce() . "\n <br>";

echo $warrior->introduce() . " j'ai  ";
echo $warrior->getLife() .  " points de vie ";
echo $warrior->getEnergy() . " points d'energie <br>";

echo $mage->introduce() . ".  J'ai ";
echo $mage->getMana() . " de mana";
