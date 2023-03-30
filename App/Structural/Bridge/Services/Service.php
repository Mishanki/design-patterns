<?php

namespace App\Structural\Bridge\Services;

use App\Structural\Bridge\Interfaces\Formatter;

abstract class Service
{
    /**
     * @param Formatter $implementation
     */
    public function __construct(protected Formatter $implementation)
    {
    }

    /**
     * @param Formatter $printer
     */
    final public function setImplementation(Formatter $printer): void
    {
        $this->implementation = $printer;
    }

    /**
     * @return string
     */
    abstract public function get(): string;
}
