<?php


// EXO

class Animal
{
    // Propriétés
    public string $name;
    public string $type;
    public int $age = 0; // Initialisation à 0

    // // Constructeur pour initialiser l'objet Animal
    // public function __construct($name, $type)
    // {
    //     $this->name = $name;
    //     $this->type = $type;
    // }

    // Méthode eat pour retourner une chaîne indiquant que l'animal mange
    public function eat(): string
    {
        return "$this->type est en train de manger";
    }

    // Méthode sleep pour retourner une chaîne indiquant que l'animal dort
    public function sleep()
    {
        return "$this->name est en train de dormir";
    }
}