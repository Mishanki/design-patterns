<?php

namespace Examples\Creational\Builder;

use App\Creational\Builder\CarBuilder;
use App\Creational\Builder\Classes\Director;
use App\Creational\Builder\TruckBuilder;

class Example
{
    /**
     * Builder is an interface that build parts of a complex object.
     * Sometimes, if the builder has a better knowledge of what it builds, this interface could be an abstract class with default methods (aka adapter).
     * If you have a complex inheritance tree for objects, it is logical to have a complex inheritance tree for builders too.
     *
     * Note: Builders have often a fluent interface, see the mock builder of PHPUnit for example.
     *
     * @return void
     */
    public function usage()
    {
        $truckBuilder = new TruckBuilder();
        $newVehicle = (new Director())->build($truckBuilder);

        $carBuilder = new CarBuilder();
        $newVehicle = (new Director())->build($carBuilder);
    }
}
