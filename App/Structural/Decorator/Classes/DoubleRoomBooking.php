<?php

namespace App\Structural\Decorator\Classes;

use App\Structural\Decorator\Interfaces\Booking;

class DoubleRoomBooking implements Booking
{
    /**
     * @return int
     */
    public function calculatePrice(): int
    {
        return 40;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return 'Double room';
    }
}
