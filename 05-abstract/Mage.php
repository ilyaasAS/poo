<?php
require_once 'Player.php';

// Classe Mage héritant de Player
class Mage extends Player {

    // Constructeur appelant le parent
    public function __construct($name) {
        parent::__construct($name);
    }

    // Implémentation de la méthode spéciale (move) propre au Mage
    public function specialMove() {
        return $this->name . " lance un puissant sort magique!";
    }
}
?>
