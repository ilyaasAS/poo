<?php

include_once './Car.php';
include_once './Book.php';



// - new est mot clé permettant d'effectuer une instanciation.
// - Une class peut produire plusieurs objets. Nous pouvons donc effectuer plusieurs instanciations 'new'

$car = new Car('Audi', 'bleue');

var_dump($car);



$car->setYearRelease(2004);
echo $car->displayInformation();
echo $car->getModel();


// Étape 5 : Léo et Emma créent deux boîtes pour deux livres différents

// Données d'exemple
// Livre 1 : "Alice au pays des merveilles" de "Lewis Carroll"
// instance de class qui déclence le construceur
$book1 = new Book("Alice au pays des merveilles", "Lewis Carroll", 124, 1865);
echo "Livre 1 :\n";
$book1->read();
echo "Pages: " . $book1->getPages() . "\n";
echo "Année: " . $book1->getYear() . "\n\n";

// Livre 2 : "Harry Potter à l'école des sorciers" de "J. K. Rowling"
$book2 = new Book("Harry Potter à l'école des sorciers", "J. K. Rowling", 320, 1997);
echo "Livre 2 :\n";
$book2->read();
echo "Pages: " . $book2->getPages() . "\n";
echo "Année: " . $book2->getYear() . "\n";
