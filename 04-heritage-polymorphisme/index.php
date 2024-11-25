<?php

include_once './Animal.php';
include_once './Dog.php';

$droopy = new Dog('Droopy', 12, 'race');

var_dump($droopy);
echo $droopy->description();


// Création d'un article
$article = new Article("Table", 99.99);

// Affichage des détails de l'article
echo $article->displayProduct();

// Modification du prix
$article->setPrice(89.99);

// Affichage des détails après modification
echo $article->displayProduct();

// Création d'une conserve avec des excipients
$conserve = new Conserve("Conserve de tomates", 5.99, ["Eau", "Sel", "Acide citrique"]);

// Affichage des détails de la conserve
echo $conserve->displayProduct();