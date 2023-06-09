<?php

namespace Examples\Creational\SimpleFactory;

use App\Creational\SimpleFactory\SimpleFactory;

class Example
{
    /**
     * SimpleFactory is a simple factory pattern.
     * It differs from the static factory because it is not static.
     * Therefore, you can have multiple factories, differently parameterized, you can subclass it and you can mock it.
     * It always should be preferred over a static factory!
     */
    public function usage()
    {
        $factory = new SimpleFactory();
        $bicycle = $factory->createBicycle();
        $bicycle->driveTo('Moscow');
    }
}
