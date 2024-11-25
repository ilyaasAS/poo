<?php
// Classe Player abstraite, ne peut pas être instanciée
abstract class Player {
    protected $name;
    protected $life = 100;
    protected $score = 0;

    // Constructeur pour initialiser le nom
    public function __construct($name) {
        $this->name = $name;
    }

    // Getters
    public function getName() {
        return $this->name;
    }

    public function getLife() {
        return $this->life;
    }

    public function getScore() {
        return $this->score;
    }

    // Setters
    public function setName($name) {
        $this->name = $name;
    }

    public function setLife($life) {
        $this->life = $life;
    }

    public function setScore($score) {
        $this->score = $score;
    }

    // Méthode pour simuler un coup (perd 10 points de vie)
    public function hit() {
        $this->life -= 10;
        if ($this->life < 0) {
            $this->life = 0; // La vie ne peut pas descendre en dessous de 0
        }
    }

    // Méthode abstraite, chaque sous-classe doit l'implémenter
    abstract public function specialMove();
}
?>
