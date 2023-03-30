<?php

namespace Tests\Structural\Decorator;

use App\Structural\Decorator\Classes\DoubleRoomBooking;
use App\Structural\Decorator\Classes\ExtraBed;
use App\Structural\Decorator\Classes\WiFi;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 *
 * @coversNothing
 */
final class DecoratorTest extends TestCase
{
    public function testCanCalculatePriceForBasicDoubleRoomBooking()
    {
        $booking = new DoubleRoomBooking();

        static::assertSame(40, $booking->calculatePrice());
        static::assertSame('Double room', $booking->getDescription());
    }

    public function testCanCalculatePriceForDoubleRoomBookingWithWiFi()
    {
        $booking = new DoubleRoomBooking();
        $booking = new WiFi($booking);

        static::assertSame(42, $booking->calculatePrice());
        static::assertSame('Double room with wifi', $booking->getDescription());
    }

    public function testCanCalculatePriceForDoubleRoomBookingWithWiFiAndExtraBed()
    {
        $booking = new DoubleRoomBooking();
        $booking = new WiFi($booking);
        $booking = new ExtraBed($booking);

        static::assertSame(72, $booking->calculatePrice());
        static::assertSame('Double room with wifi with extra bed', $booking->getDescription());
    }
}
