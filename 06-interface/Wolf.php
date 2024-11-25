<?php
require_once 'Animal.php';
require_once 'SavageAnimal.php';

/**
 * Classe Wolf qui hérite de Animal et implémente l'interface SavageAnimal
 */
class Wolf extends Animal implements SavageAnimal {
    private bool $solitaire;

    /**
     * Constructeur pour initialiser les propriétés de Wolf
     * 
     * @param string $nom Le nom du loup
     * @param int $age L'âge du loup
     * @param int $nbPattes Le nombre de pattes du loup
     * @param array $listAliment La liste des aliments du loup
     * @param bool $solitaire Indique si le loup est solitaire ou non
     */
    public function __construct(string $nom, int $age, int $nbPattes, array $listAliment, bool $solitaire) {
        parent::__construct($nom, $age, $nbPattes, $listAliment);
        $this->solitaire = $solitaire;
    }

    /**
     * Retourne si le loup est solitaire
     * 
     * @return bool
     */
    public function isSolitaire(): bool {
        return $this->solitaire;
    }

    /**
     * Définit si le loup est solitaire
     * 
     * @param bool $solitaire
     */
    public function setSolitaire(bool $solitaire): void {
        $this->solitaire = $solitaire;
    }

    /**
     * Méthode devore de l'interface SavageAnimal
     * 
     * @return string
     */
    public function devore(): string {
        return "Je viens de manger.";
    }

    /**
     * Méthode eatBird de l'interface SavageAnimal
     * 
     * @param Bird $bird Un objet Bird représentant l'oiseau mangé
     * @return string
     */
    public function eatBird(Bird $bird): string {
        return "Je viens de manger l'oiseau qui s'appelait " . $bird->getNom();
    }

    /**
     * Retourne une description du loup
     * 
     * @return string
     */
    public function description(): string {
        return "Je suis un loup" . ($this->solitaire ? " solitaire" : " de meute");
    }
}
?>
