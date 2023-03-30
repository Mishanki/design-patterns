<?php

namespace App\Structural\Facade\Interfaces;

interface OperatingSystem
{
    public function halt();

    public function getName(): string;
}