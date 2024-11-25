<?php

namespace App\Interfaces;

use App\Users\User;

interface EngineInterface
{
    public function start(User $user): string;
}