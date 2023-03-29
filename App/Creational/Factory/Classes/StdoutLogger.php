<?php

namespace App\Creational\Factory\Classes;

use App\Creational\Factory\Interfaces\Logger;

class StdoutLogger implements Logger
{
    /**
     * @param string $message
     *
     * @return void
     */
    public function log(string $message): void
    {
        echo $message;
    }
}