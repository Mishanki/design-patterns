<?php

namespace App\Creational\Builder;

use App\Creational\Builder\Interfaces\Builder;
use App\Creational\Builder\Parts\Car;
use App\Creational\Builder\Parts\Door;
use App\Creational\Builder\Parts\Engine;
use App\Creational\Builder\Parts\Vehicle;
use App\Creational\Builder\Parts\Wheel;

class CarBuilder implements Builder
{
    /**
     * @var Car
     */
    private Car $car;

    /**
     * @return void
     */
    public function createVehicle(): void
    {
        $this->car = new Car();
    }

    /**
     * @return void
     */
    public function addWheel(): void
    {
        $this->car->setPart('wheelLF', new Wheel());
        $this->car->setPart('wheelRF', new Wheel());
        $this->car->setPart('wheelLR', new Wheel());
        $this->car->setPart('wheelRR', new Wheel());
    }

    /**
     * @return void
     */
    public function addEngine(): void
    {
        $this->car->setPart('truckEngine', new Engine());
    }

    /**
     * @return void
     */
    public function addDoors(): void
    {
        $this->car->setPart('rightDoor', new Door());
        $this->car->setPart('leftDoor', new Door());
        $this->car->setPart('trunkLid', new Door());
    }

    /**
     * @return Vehicle
     */
    public function getVehicle(): Vehicle
    {
        return $this->car;
    }
}
