<?php

namespace App\Structural\Decorator;

use App\Structural\Decorator\Interfaces\Booking;

abstract class BookingDecorator implements Booking
{
    /**
     * @param Booking $booking
     */
    public function __construct(protected Booking $booking)
    {
    }
}
