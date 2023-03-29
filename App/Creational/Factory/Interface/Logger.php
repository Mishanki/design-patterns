<?php

namespace App\Creational\Factory\Interface;

interface Logger
{
    /**
     * @param string $message
     *
     * @return void
     */
    public function log(string $message): void;
}