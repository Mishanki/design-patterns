<?php

namespace App\Creational\SimpleFactory;

use App\Creational\SimpleFactory\Classes\Bicycle;

class SimpleFactory
{
    /**
     * @return Bicycle
     */
    public function createBicycle(): Bicycle
    {
        return new Bicycle();
    }
}