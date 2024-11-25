<?php
/**
 * Interface SavageAnimal
 */
interface SavageAnimal {
    /**
     * Méthode devore pour un animal sauvage
     * 
     * @return string
     */
    public function devore(): string;

    /**
     * Méthode eatBird qui prend un oiseau en paramètre
     * 
     * @param Bird $bird Un objet Bird représentant l'oiseau mangé
     * @return string
     */
    public function eatBird(Bird $bird): string;
}

