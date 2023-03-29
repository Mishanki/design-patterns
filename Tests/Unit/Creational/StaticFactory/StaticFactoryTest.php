<?php

namespace Tests\Creational\StaticFactory;

use App\Creational\StaticFactory\Classes\FormatNumber;
use App\Creational\StaticFactory\Classes\FormatString;
use App\Creational\StaticFactory\StaticFactory;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class StaticFactoryTest extends TestCase
{
    public function testCanCreateNumberFormatter()
    {
        $this->assertInstanceOf(FormatNumber::class, StaticFactory::factory('number'));
    }

    public function testCanCreateStringFormatter()
    {
        $this->assertInstanceOf(FormatString::class, StaticFactory::factory('string'));
    }

    public function testException()
    {
        $this->expectException(InvalidArgumentException::class);

        StaticFactory::factory('object');
    }
}