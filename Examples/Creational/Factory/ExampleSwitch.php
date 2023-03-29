<?php

namespace Examples\Creational\Factory;

use App\Creational\Factory\FileLoggerFactory;
use App\Creational\Factory\Interface\LoggerFactory;
use App\Creational\Factory\StdoutLoggerFactory;
use PHPUnit\Logging\Exception;

class ExampleSwitch
{
    const TYPE_STDOUT = 1;

    const TYPE_FILE = 2;

    /**
     * @param null|int $type
     *
     * @return LoggerFactory
     */
    public function getFactory(?int $type = null): LoggerFactory
    {
        switch ($type) {
            case self::TYPE_STDOUT:
                $loggerFactory = new StdoutLoggerFactory();
                break;
            case self::TYPE_FILE:
                $loggerFactory = new FileLoggerFactory(sys_get_temp_dir());
                break;
            default:
                throw new Exception('Factory is not found');
        }

        return $loggerFactory;
    }
}