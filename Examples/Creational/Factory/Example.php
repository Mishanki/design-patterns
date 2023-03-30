<?php

namespace Examples\Creational\Factory;

use App\Creational\Factory\FileLoggerFactory;
use App\Creational\Factory\StdoutLoggerFactory;

class Example
{
    /**
     * The good point over the SimpleFactory is you can subclass it to implement different ways to create objects.
     * For simple cases, this abstract class could be just an interface.
     * This pattern is a “real” Design Pattern because it achieves the Dependency Inversion principle a.k.a the “D” in SOLID principles.
     * It means the FactoryMethod class depends on abstractions, not concrete classes. This is the real trick compared to SimpleFactory or StaticFactory.
     */
    public function usage()
    {
        $loggerFactory = new StdoutLoggerFactory();
        $loggerFactory->createLogger();

        $loggerFactory = new FileLoggerFactory(sys_get_temp_dir());
        $loggerFactory->createLogger();
    }
}
