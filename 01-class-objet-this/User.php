<?php

// Une classe est un modèle qui permet de créer des objets.
// Une classe c'est un plan de construction d'objets.
// Une classe est composée de propriétés et de méthodes.
// Une classe c'est un modèle de données.

class User
{
    // Les propriétés de l'utilisateur
    public string $firstName;
    public string $lastName;

    // Méthode pour dire bonjour en utilisant les propriétés
    public function hello(): void
    {
        echo "Bonjour" . $this->identity();
    }

    // Méthode identity pour retourner le prénom et le nom de l'utilisateur
    public function identity(): string
    {
        return "Nom: $this->lastName, Prénom: $this->firstName";
    }
}
