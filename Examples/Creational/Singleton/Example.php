<?php

namespace Examples\Creational\Factory;

use App\Creational\Singleton\Singleton;

class Example
{
    /**
     * To have only one instance of this object in the application that will handle all calls.
     *
     * THIS IS CONSIDERED TO BE AN ANTI-PATTERN! FOR BETTER TESTABILITY AND MAINTAINABILITY USE DEPENDENCY INJECTION!
     */
    public function usage()
    {
        Singleton::getInstance();
    }
}
