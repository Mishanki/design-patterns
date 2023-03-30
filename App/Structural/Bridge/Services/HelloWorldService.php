<?php

namespace App\Structural\Bridge\Services;

class HelloWorldService extends Service
{
    /**
     * @return string
     */
    public function get(): string
    {
        return $this->implementation->format('Hello World');
    }
}
