<?php

namespace Tests\Creational\SimpleFactory;

use App\Creational\SimpleFactory\Classes\Bicycle;
use App\Creational\SimpleFactory\SimpleFactory;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 *
 * @coversNothing
 */
final class SimpleFactoryTest extends TestCase
{
    public function testCanCreateBicycle()
    {
        $bicycle = (new SimpleFactory())->createBicycle();

        static::assertInstanceOf(Bicycle::class, $bicycle);
    }
}
