<?php

namespace App\Structural\Facade;

use App\Structural\Facade\Interfaces\Bios;
use App\Structural\Facade\Interfaces\OperatingSystem;

class Facade
{
    /**
     * @param Bios $bios
     * @param OperatingSystem $os
     */
    public function __construct(private Bios $bios, private OperatingSystem $os)
    {
    }

    public function turnOn()
    {
        $this->bios->execute();
        $this->bios->waitForKeyPress();
        $this->bios->launch($this->os);
    }

    public function turnOff()
    {
        $this->os->halt();
        $this->bios->powerDown();
    }
}
