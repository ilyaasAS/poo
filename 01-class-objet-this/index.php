<?php

include_once './User.php';
include_once './Animal.php';

// Création d'un objet User
$ilyaas = new User();

// Affichage du type de l'objet
echo gettype($ilyaas);
echo '<pre>';
var_dump($ilyaas);
echo '</pre>';

// Affectation des propriétés
$ilyaas->firstName = 'Ilyaas ABDOUL AZIS';
$ilyaas->lastName = 'dsfg';

// Appel de la méthode hello
$ilyaas->hello();

echo '<br>';

// Affichage de l'identité complète avec la méthode identity
echo $ilyaas->identity();

// Créer un objet élève et lui affecter votre prénom puis l'afficher
$eleve = new User();
$eleve->firstName = 'Ilyaas';
$eleve->lastName = 'ABDOUL AZIS';  
echo '<br>';
echo $eleve->firstName;


// EXO

// Création d'un objet chat de type Animal
$chat = new Animal("Mimi", "Chat");

// Affichage de la méthode eat
echo $chat->eat();
echo '<br>';

// Affichage de la méthode sleep
echo $chat->sleep();
