<?php

namespace App\Vehicles;

use App\Interfaces\EngineInterface;
use App\Users\User;

class Peugeot extends AbstractVehicule implements EngineInterface
{
    private string $carburant = "essence";

    public function carburant(): string
    {
        return $this->carburant;
    }

    public function nbTest(): int
    {
        return parent::nbTest() + 70;
    }

    public function start(User $user): string
    {
        return $user->getPseudo() . " a démarré la Peugeot";
    }
}