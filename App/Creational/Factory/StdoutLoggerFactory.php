<?php

namespace App\Creational\Factory;

use App\Creational\Factory\Classes\StdoutLogger;
use App\Creational\Factory\Interface\Logger;
use App\Creational\Factory\Interface\LoggerFactory;

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