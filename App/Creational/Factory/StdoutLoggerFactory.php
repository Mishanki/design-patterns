<?php

namespace App\Creational\Factory;

use App\Creational\Factory\Classes\StdoutLogger;
use App\Creational\Factory\Interfaces\Logger;
use App\Creational\Factory\Interfaces\LoggerFactory;

class StdoutLoggerFactory implements LoggerFactory
{
    /**
     * @return Logger
     */
    public function createLogger(): Logger
    {
        return new StdoutLogger();
    }
}