<?php

namespace App\Creational\Factory;

class Example
{
    public function usage()
    {
        $loggerFactory = new StdoutLoggerFactory();
        $loggerFactory->createLogger();

        $loggerFactory = new FileLoggerFactory(sys_get_temp_dir());
        $loggerFactory->createLogger();
    }
}