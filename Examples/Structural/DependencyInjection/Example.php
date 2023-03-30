<?php

namespace Examples\Structural\DependencyInjection;

use App\Structural\DependencyInjection\DatabaseConfiguration;
use App\Structural\DependencyInjection\DatabaseConnection;

class Example
{
    /**
     * To implement a loosely coupled architecture in order to get better testable, maintainable and extendable code.
     *
     * DatabaseConfiguration gets injected and DatabaseConnection will get all that it needs from $config.
     * Without DI, the configuration would be created directly in DatabaseConnection, which is not very good for testing and extending it.
     */
    public function usage()
    {
        $config = new DatabaseConfiguration('localhost', 3306, 'domnikl', '1234');
        $connection = new DatabaseConnection($config);
        $connection->getDsn();
    }
}
