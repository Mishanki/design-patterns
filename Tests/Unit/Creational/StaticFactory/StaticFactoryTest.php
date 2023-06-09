<?php

namespace Tests\Creational\StaticFactory;

use App\Creational\StaticFactory\Classes\FormatNumber;
use App\Creational\StaticFactory\Classes\FormatString;
use App\Creational\StaticFactory\StaticFactory;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 *
 * @coversNothing
 */
final class StaticFactoryTest extends TestCase
{
    public function testCanCreateNumberFormatter()
    {
        static::assertInstanceOf(FormatNumber::class, StaticFactory::factory('number'));
    }

    public function testCanCreateStringFormatter()
    {
        static::assertInstanceOf(FormatString::class, StaticFactory::factory('string'));
    }

    public function testException()
    {
        $this->expectException(\InvalidArgumentException::class);

        StaticFactory::factory('object');
    }
}
