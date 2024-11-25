<?php
// Inclusion de la classe Article
require_once 'Article.php';

// Classe Aliment qui hérite de la classe Article
class Aliment extends Article {
    private $datePeremption;

    // Constructeur pour initialiser le nom, le prix et la date de péremption
    public function __construct($name, $price, $datePeremption) {
        parent::__construct($name, $price); // Appel au constructeur parent
        $this->datePeremption = $datePeremption;
    }

    // Getter pour la date de péremption
    public function getDatePeremption() {
        return $this->datePeremption;
    }

    // Setter pour la date de péremption
    public function setDatePeremption($datePeremption) {
        $this->datePeremption = $datePeremption;
    }

    // Méthode pour afficher les détails du produit avec date de péremption
    public function displayProduct() {
        return "Le produit est un : " . $this->getName() . " et il coûte : " . $this->getPrice() . " euros.\n" .
               "La date de péremption est le : " . $this->datePeremption . ".\n";
    }
}
?>
