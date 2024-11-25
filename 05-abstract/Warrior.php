<?php
require_once 'Player.php';

// Classe Warrior héritant de Player
class Warrior extends Player {

    // Constructeur appelant le parent
    public function __construct($name) {
        parent::__construct($name);
    }

    // Implémentation de la méthode spéciale (move) propre au Warrior
    public function specialMove() {
        return $this->name . " fait une attaque puissante avec son épée!";
    }
}
?>
