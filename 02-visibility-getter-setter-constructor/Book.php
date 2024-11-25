<?php

// Étape 1 : Léo crée la boîte magique pour les livres

class Book {
    // Déclaration des propriétés privées
    private string $title;
    private string $author;
    private int $pages;
    private int $year;


    // Étape 2 : Emma donne des informations à la boîte

    //methode magique Constructeur pour initialiser les propriétés
    public function __construct($title, $author, $pages, $year) {
        $this->title = $title;
        $this->author = $author;
        $this->pages = $pages;
        $this->year = $year;
    }

    // Étape 3 : Léo demande à la boîte de lui donner des informations
    // pour afficher
    // Méthodes "getter" pour accéder aux propriétés
    public function getTitle(): string {
        return $this->title;
    }

    public function getAuthor(): string  {
        return $this->author;
    }

    public function getPages(): int {
        return $this->pages;
    }

    public function getYear(): int  {
        return $this->year;
    }

    // Méthodes "setter" pour modifier les propriétés
    public function setTitle($title): self 
    {
        $this->title = $title;
    }

    public function setAuthor($author): self 
    {
        $this->author = $author;
    }

    public function setPages($pages): self 
    {
        $this->pages = $pages;
    }

    public function setYear($year): void 
    {
        $this->year = $year;
    }


    // Étape 4 : Emma demande à la boîte de lire un livre

    // Méthode pour afficher un message lorsqu'on lit le livre
    public function read():void {
        echo "Je lis le livre \"" . $this->title . "\" écrit par " . $this->author . ".\n";
    }
}
