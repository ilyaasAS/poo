<?php

namespace App\Entity;

class Product 
{
    // Déclaration des propriétés
    private $name;
    private $description;

    // Constructeur pour initialiser les propriétés
    public function __construct(string $name, string $description)
    {
        $this->name = $name;
        $this->description = $description;
    }

    // Getter pour le nom du produit
    public function getName(): string
    {
        return $this->name;
    }

    // Getter pour la description du produit
    public function getDescription(): string
    {
        return $this->description;
    }

    // Setter pour le nom du produit
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    // Setter pour la description du produit
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }
}
