<?php

namespace App\Structural\Decorator\Classes;

use App\Structural\Decorator\BookingDecorator;

class WiFi extends BookingDecorator
{
    private const PRICE = 2;

    /**
     * @return int
     */
    public function calculatePrice(): int
    {
        return $this->booking->calculatePrice() + self::PRICE;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->booking->getDescription().' with wifi';
    }
}
