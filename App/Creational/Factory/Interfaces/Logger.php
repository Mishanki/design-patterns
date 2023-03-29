<?php

namespace App\Creational\Factory\Interfaces;

interface Logger
{
    /**
     * @param string $message
     *
     * @return void
     */
    public function log(string $message): void;
}