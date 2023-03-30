<?php

namespace App\Creational\Builder\Interfaces;

use App\Creational\Builder\Parts\Vehicle;

interface Builder
{
    public function createVehicle(): void;

    public function addWheel(): void;

    public function addEngine(): void;

    public function addDoors(): void;

    public function getVehicle(): Vehicle;
}