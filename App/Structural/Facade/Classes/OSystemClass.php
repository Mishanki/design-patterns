<?php

namespace App\Structural\Facade\Classes;

use App\Structural\Facade\Interfaces\OperatingSystem;

class OSystemClass implements OperatingSystem
{
    public function halt()
    {
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return 'Linux';
    }
}