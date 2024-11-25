<?php

// Classe Conserve qui hérite d'Article

class Conserve extends Article
{
    // Propriété pour stocker les excipients
    private $listExcipient = [];

    // Constructeur pour initialiser le nom, le prix et la liste des excipients
    public function __construct($name, $price, $listExcipient)
    {
        // Appel du constructeur de la classe parent (Article)
        parent::__construct($name, $price);
        $this->listExcipient = $listExcipient;
    }

    // Getter pour la liste des excipients
    public function getListExcipient()
    {
        return $this->listExcipient;
    }

    // Setter pour la liste des excipients
    public function setListExcipient($listExcipient)
    {
        $this->listExcipient = $listExcipient;
    }

    // Méthode pour afficher les détails du produit
    public function displayProduct()
    {
        // Transformation du tableau des excipients en chaîne de caractères
        $excipients = implode(", ", $this->listExcipient);
        return "Le produit est : " . $this->getName() . " et il coûte : " . $this->getPrice() . " euros.\n" .
            "La liste des excipients est : " . $excipients . ".\n";
    }
}


