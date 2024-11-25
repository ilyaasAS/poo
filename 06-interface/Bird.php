<?php
require_once 'Animal.php';

/**
 * Classe Bird qui hérite de Animal
 */
class Bird extends Animal {
    private bool $migrate;

    /**
     * Constructeur pour initialiser les propriétés de Bird
     * 
     * @param string $nom Le nom de l'oiseau
     * @param int $age L'âge de l'oiseau
     * @param int $nbPattes Le nombre de pattes de l'oiseau
     * @param array $listAliment La liste des aliments de l'oiseau
     * @param bool $migrate Indique si l'oiseau est migrateur ou non
     */
    public function __construct(string $nom, int $age, int $nbPattes, array $listAliment, bool $migrate) {
        parent::__construct($nom, $age, $nbPattes, $listAliment);
        $this->migrate = $migrate;
    }

    /**
     * Retourne si l'oiseau est migrateur
     * 
     * @return bool
     */
    public function isMigrate(): bool {
        return $this->migrate;
    }

    /**
     * Définit si l'oiseau est migrateur
     * 
     * @param bool $migrate
     */
    public function setMigrate(bool $migrate): void {
        $this->migrate = $migrate;
    }

    /**
     * Retourne une description de l'oiseau
     * 
     * @return string
     */
    public function description(): string {
        return $this->migrate ? "Je suis un oiseau migrateur" : "Je ne suis pas un oiseau migrateur";
    }
}
?>
