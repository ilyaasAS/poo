<?php
class BookRepository
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getBooks(): array
    {
        // Utilisez "books" au lieu de "book"
        $stmt = $this->pdo->prepare('SELECT * FROM books');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getBookById(int $id): ?array
    {
        // Utilisez 'book_id' comme identifiant, pas 'id'
        $stmt = $this->pdo->prepare('SELECT * FROM books WHERE book_id=:id');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
    }
    
}
