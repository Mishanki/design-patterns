<?php

namespace Examples\Structural\Decorator;
use App\Structural\Decorator\Classes\DoubleRoomBooking;
use App\Structural\Decorator\Classes\ExtraBed;
use App\Structural\Decorator\Classes\WiFi;

class Example
{
    /**
     * To dynamically add new functionality to class instances.
     */
    public function usage()
    {
        $booking = new DoubleRoomBooking();
        $calcPrice = $booking->calculatePrice();
        $description = $booking->getDescription();

        $booking = new WiFi($booking);
        $calcPrice = $booking->calculatePrice();
        $description = $booking->getDescription();

        $booking = new ExtraBed($booking);
        $calcPrice = $booking->calculatePrice();
        $description = $booking->getDescription();
    }
}
