<?php

namespace App\Creational\Builder;

use App\Creational\Builder\Interfaces\Builder;
use App\Creational\Builder\Parts\Door;
use App\Creational\Builder\Parts\Engine;
use App\Creational\Builder\Parts\Truck;
use App\Creational\Builder\Parts\Vehicle;
use App\Creational\Builder\Parts\Wheel;

class TruckBuilder implements Builder
{
    /**
     * @var Truck
     */
    private Truck $truck;

    /**
     * @return void
     */
    public function createVehicle(): void
    {
        $this->truck = new Truck();
    }

    /**
     * @return void
     */
    public function addWheel(): void
    {
        $this->truck->setPart('wheel1', new Wheel());
        $this->truck->setPart('wheel2', new Wheel());
        $this->truck->setPart('wheel3', new Wheel());
        $this->truck->setPart('wheel4', new Wheel());
        $this->truck->setPart('wheel5', new Wheel());
        $this->truck->setPart('wheel6', new Wheel());
    }

    /**
     * @return void
     */
    public function addEngine(): void
    {
        $this->truck->setPart('truckEngine', new Engine());
    }

    /**
     * @return void
     */
    public function addDoors(): void
    {
        $this->truck->setPart('rightDoor', new Door());
        $this->truck->setPart('leftDoor', new Door());
    }

    /**
     * @return Vehicle
     */
    public function getVehicle(): Vehicle
    {
        return $this->truck;
    }
}
