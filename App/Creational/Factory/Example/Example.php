<?php

namespace App\Creational\Factory\Example;

use App\Creational\Factory\FileLoggerFactory;
use App\Creational\Factory\StdoutLoggerFactory;

class Example
{
    /**
     * @return void
     */
    public function usage()
    {
        $loggerFactory = new StdoutLoggerFactory();
        $loggerFactory->createLogger();

        $loggerFactory = new FileLoggerFactory(sys_get_temp_dir());
        $loggerFactory->createLogger();
    }
}