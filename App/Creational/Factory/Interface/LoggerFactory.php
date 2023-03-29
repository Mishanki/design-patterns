<?php

namespace App\Creational\Factory\Interface;

interface LoggerFactory
{
    /**
     * @return Logger
     */
    public function createLogger(): Logger;
}