<?php
// Inclusion de la classe Product
include_once './src/Entity/Product.php';

use App\Entity\Product;

// Création d'un nouveau produit
$product = new Product("Laptop", "Un ordinateur portable puissant avec 16 Go de RAM et 512 Go de SSD.");

// Affichage du nom et de la description du produit
echo "Nom du produit : " . $product->getName() . "<br>";
echo "Description du produit : " . $product->getDescription() . "<br>";

// Création des instances
$renault = new Renault();
$peugeot = new Peugeot();
$user = new User("John");

// Affichage des résultats
echo "Renault :\n";
echo "Démarrage : " . $renault->demarrer() . "\n";
echo "Carburant : " . $renault->carburant() . "\n";
echo "Nombre de tests : " . $renault->nbTest() . "\n";

echo "\nPeugeot :\n";
echo "Démarrage : " . $peugeot->demarrer() . "\n";
echo "Carburant : " . $peugeot->carburant() . "\n";
echo "Nombre de tests : " . $peugeot->nbTest() . "\n";

echo "\nDémarrage avec l'interface :\n";
echo $renault->start($user) . "\n";
echo $peugeot->start($user) . "\n";

// Simulation d'un accident
function accident($vehicule, $user) {
    echo "\nAccident avec " . get_class($vehicule) . " !\n";
    $user->blesser();
    echo $user->getPseudo() . " est " . ($user->estBlesse() ? "blessé" : "indemne") . ".\n";
}

accident($renault, $user);
