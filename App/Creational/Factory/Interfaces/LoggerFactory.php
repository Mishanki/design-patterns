<?php

namespace App\Creational\Factory\Interfaces;

interface LoggerFactory
{
    /**
     * @return Logger
     */
    public function createLogger(): Logger;
}