<?php

class Mathematique {
    
    // Méthode statique pour l'addition
    public static function addition(float $a, float $b): float {
        return $a + $b;
    }

    // Méthode statique pour la soustraction
    public static function soustraction(float $a, float $b): float {
        return $a - $b;
    }

    // Méthode statique pour la multiplication
    public static function multiplication(float $a, float $b): float {
        return $a * $b;
    }

    // Méthode statique pour la division
    public static function division(float $a, float $b): ?float {
        // Appel de la méthode privée isNull pour vérifier si b est égal à 0
        if (self::isNull($b)) {
            echo "Erreur : division par zéro.\n";
            return null;
        }
        return $a / $b;
    }

    // Méthode statique privée pour vérifier si un nombre est nul
    private static function isNull(float $value): bool {
        return $value == 0;
    }
}


?>
