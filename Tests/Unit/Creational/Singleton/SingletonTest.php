<?php

namespace Tests\Creational\Singleton;

use App\Creational\Singleton\Singleton;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 *
 * @coversNothing
 */
final class SingletonTest extends TestCase
{
    public function testUniqueness()
    {
        $firstCall = Singleton::getInstance();
        $secondCall = Singleton::getInstance();

        static::assertInstanceOf(Singleton::class, $firstCall);
        static::assertSame($firstCall, $secondCall);
    }
}
