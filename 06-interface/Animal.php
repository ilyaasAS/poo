<?php
/**
 * Classe abstraite Animal
 */
abstract class Animal {
    protected string $nom;
    protected int $age;
    protected int $nbPattes;
    protected array $listAliment;

    /**
     * Constructeur pour initialiser les propriétés de l'animal
     * 
     * @param string $nom Le nom de l'animal
     * @param int $age L'âge de l'animal
     * @param int $nbPattes Le nombre de pattes de l'animal
     * @param array $listAliment La liste des aliments que l'animal consomme
     */
    public function __construct(string $nom, int $age, int $nbPattes, array $listAliment = []) {
        $this->nom = $nom;
        $this->age = $age;
        $this->nbPattes = $nbPattes;
        $this->listAliment = $listAliment;
    }

    /**
     * Retourne le nom de l'animal
     * 
     * @return string
     */
    public function getNom(): string {
        return $this->nom;
    }

    /**
     * Définit le nom de l'animal
     * 
     * @param string $nom
     */
    public function setNom(string $nom): void {
        $this->nom = $nom;
    }

    /**
     * Retourne l'âge de l'animal
     * 
     * @return int
     */
    public function getAge(): int {
        return $this->age;
    }

    /**
     * Définit l'âge de l'animal
     * 
     * @param int $age
     */
    public function setAge(int $age): void {
        $this->age = $age;
    }

    /**
     * Retourne le nombre de pattes de l'animal
     * 
     * @return int
     */
    public function getNbPattes(): int {
        return $this->nbPattes;
    }

    /**
     * Définit le nombre de pattes de l'animal
     * 
     * @param int $nbPattes
     */
    public function setNbPattes(int $nbPattes): void {
        $this->nbPattes = $nbPattes;
    }

    /**
     * Retourne la liste des aliments que l'animal consomme
     * 
     * @return array
     */
    public function getListAliment(): array {
        return $this->listAliment;
    }

    /**
     * Définit la liste des aliments que l'animal consomme
     * 
     * @param array $listAliment
     */
    public function setListAliment(array $listAliment): void {
        $this->listAliment = $listAliment;
    }

    /**
     * Méthode abstraite pour la description de l'animal
     * 
     * @return string
     */
    abstract public function description(): string;
}
?>
