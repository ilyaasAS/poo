<?php

include './SimulateurCredit.php';
include './Mathematique.php';

echo SimulateurCredit::$taux . '<br>';

echo SimulateurCredit::calculInteret(100000);


// Tests des différentes méthodes statiques

echo "Addition : 5 + 3 = " . Mathematique::addition(5, 3) . "\n";
echo "Soustraction : 10 - 7 = " . Mathematique::soustraction(10, 7) . "\n";
echo "Multiplication : 4 * 2 = " . Mathematique::multiplication(4, 2) . "\n";

// Test de la division avec un nombre non nul
$result = Mathematique::division(10, 2);
if ($result !== null) {
    echo "Division : 10 / 2 = " . $result . "\n";
}

// Test de la division par zéro
$result = Mathematique::division(10, 0);
if ($result !== null) {
    echo "Division : 10 / 0 = " . $result . "\n";
}