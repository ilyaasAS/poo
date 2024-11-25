<?php

namespace App\Vehicles;

abstract class AbstractVehicule
{
    protected int $nbTest = 100;

    final public function demarrer(): string
    {
        return "Je suis démarré";
    }

    abstract public function carburant(): string;

    public function nbTest(): int
    {
        return $this->nbTest;
    }
}

