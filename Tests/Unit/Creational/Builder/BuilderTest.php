<?php

namespace Tests\Creational\AbstractFactory;

use App\Creational\Builder\CarBuilder;
use App\Creational\Builder\Classes\Director;
use App\Creational\Builder\Parts\Car;
use App\Creational\Builder\Parts\Truck;
use App\Creational\Builder\TruckBuilder;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 *
 * @coversNothing
 */
final class BuilderTest extends TestCase
{
    public function testCanBuildTruck()
    {
        $truckBuilder = new TruckBuilder();
        $newVehicle = (new Director())->build($truckBuilder);

        $this->assertInstanceOf(Truck::class, $newVehicle);
    }

    public function testCanBuildCar()
    {
        $carBuilder = new CarBuilder();
        $newVehicle = (new Director())->build($carBuilder);

        $this->assertInstanceOf(Car::class, $newVehicle);
    }
}
