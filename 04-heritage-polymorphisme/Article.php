<?php

// Classe Article pour représenter un produit
class Article
{
    // Propriétés privées
    private $name;
    private $price;

    // Constructeur pour initialiser le nom et le prix
    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    // Getter pour le nom
    public function getName()
    {
        return $this->name;
    }

    // Setter pour le nom
    public function setName($name)
    {
        $this->name = $name;
    }

    // Getter pour le prix
    public function getPrice()
    {
        return $this->price;
    }

    // Setter pour le prix
    public function setPrice($price)
    {
        $this->price = $price;
    }

    // Méthode pour afficher les détails du produit
    public function displayProduct()
    {
        return "Le produit est : " . $this->name . " et il coûte : " . $this->price . " euros.\n";
    }
}

