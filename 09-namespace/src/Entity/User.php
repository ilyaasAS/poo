<?php

namespace App\Users;

final class User
{
    private string $pseudo;
    private bool $estBlesse = false;

    public function __construct(string $pseudo)
    {
        $this->pseudo = $pseudo;
    }

    public function getPseudo(): string
    {
        return $this->pseudo;
    }

    public function estBlesse(): bool
    {
        return $this->estBlesse;
    }

    public function blesser(): void
    {
        $this->estBlesse = true;
    }
}