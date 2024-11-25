<?php

/**
 * Classe représentant une personne.
 */

class Person 
{
    private string $firstname;
    private string $lastname;
    private int $age;

    /**
     * Constructeur de la classe Person.
     *
     * @param string $firstname Le prénom de la personne
     * @param string $lastname Le nom de famille de la personne
     * @param int $age L'âge de la personne
     */
    public function __construct(string $firstname, string $lastname, int $age) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->age = $age;
    }

    /**
     * Obtient le prénom de la personne.
     *
     * @return string
     */
    public function getFirstname(): string {
        return $this->firstname;
    }

    /**
     * Obtient le nom de famille de la personne.
     *
     * @return string
     */
    public function getLastname(): string {
        return $this->lastname;
    }

    /**
     * Obtient l'âge de la personne.
     *
     * @return int
     */
    public function getAge(): int {
        return $this->age;
    }

    /**
     * Définit le prénom de la personne.
     *
     * @param string $firstname Le nouveau prénom
     * @return void
     */
    public function setFirstname(string $firstname): void {
        $this->firstname = $firstname;
    }



    /**
     * Définit le nom de famille de la personne.
     *
     * @param string $lastname Le nouveau nom de famille
     * @return void
     */
    public function setLastname(string $lastname): void {
        $this->lastname = $lastname;
    }

    /**
     * Définit l'âge de la personne.
     *
     * @param int $age Le nouvel âge
     * @return void
     */
    public function setAge(int $age): void {
        $this->age = $age;
    }
}