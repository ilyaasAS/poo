<?php

namespace App\Vehicles;

use App\Interfaces\EngineInterface;
use App\Users\User;

class Renault extends AbstractVehicule implements EngineInterface
{
    private string $carburant = "diesel";

    public function carburant(): string
    {
        return $this->carburant;
    }

    public function nbTest(): int
    {
        return parent::nbTest() + 30;
    }

    public function start(User $user): string
    {
        return $user->getPseudo() . " a démarré la Renault";
    }
}