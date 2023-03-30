<?php

namespace App\Structural\Bridge\Services;

class PingService extends Service
{
    /**
     * @return string
     */
    public function get(): string
    {
        return $this->implementation->format('pong');
    }
}
