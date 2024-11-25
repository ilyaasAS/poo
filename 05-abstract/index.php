<?php
require_once 'Warrior.php';
require_once 'Mage.php';

// Création d'un guerrier
$warrior = new Warrior("Conan");
echo $warrior->getName() . " a " . $warrior->getLife() . " points de vie.\n";
echo $warrior->specialMove() . "\n";

// Le guerrier se fait attaquer et perd 10 points de vie
$warrior->hit();
echo $warrior->getName() . " a " . $warrior->getLife() . " points de vie après avoir été touché.\n\n";

// Création d'un mage
$mage = new Mage("Gandalf");
echo $mage->getName() . " a " . $mage->getLife() . " points de vie.\n";
echo $mage->specialMove() . "\n";

// Le mage se fait attaquer deux fois
$mage->hit();
$mage->hit();
echo $mage->getName() . " a " . $mage->getLife() . " points de vie après avoir été touché deux fois.\n";
