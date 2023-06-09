<?php

namespace App\Creational\Factory;

use App\Creational\Factory\Classes\FileLogger;
use App\Creational\Factory\Interfaces\Logger;
use App\Creational\Factory\Interfaces\LoggerFactory;

class FileLoggerFactory implements LoggerFactory
{
    /**
     * @param string $filePath
     */
    public function __construct(private string $filePath)
    {
    }

    /**
     * @return Logger
     */
    public function createLogger(): Logger
    {
        return new FileLogger($this->filePath);
    }
}