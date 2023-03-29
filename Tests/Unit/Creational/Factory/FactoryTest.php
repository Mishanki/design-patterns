<?php

namespace Tests\Creational\Factory;

use App\Creational\Factory\Classes\FileLogger;
use App\Creational\Factory\Classes\StdoutLogger;
use App\Creational\Factory\FileLoggerFactory;
use App\Creational\Factory\StdoutLoggerFactory;
use PHPUnit\Framework\TestCase;

class FactoryTest extends TestCase
{
    public function testCanCreateStdoutLogging()
    {
        $loggerFactory = new StdoutLoggerFactory();
        $logger = $loggerFactory->createLogger();

        $this->assertInstanceOf(StdoutLogger::class, $logger);
    }

    public function testCanCreateFileLogging()
    {
        $loggerFactory = new FileLoggerFactory(sys_get_temp_dir());
        $logger = $loggerFactory->createLogger();

        $this->assertInstanceOf(FileLogger::class, $logger);
    }
}