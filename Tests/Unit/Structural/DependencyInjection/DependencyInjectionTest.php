<?php

namespace Tests\Structural\DependencyInjection;

use App\Structural\DependencyInjection\DatabaseConfiguration;
use App\Structural\DependencyInjection\DatabaseConnection;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 *
 * @coversNothing
 */
final class DependencyInjectionTest extends TestCase
{
    public function testDependencyInjection()
    {
        $config = new DatabaseConfiguration('localhost', 3306, 'domnikl', '1234');
        $connection = new DatabaseConnection($config);

        static::assertSame('domnikl:1234@localhost:3306', $connection->getDsn());
    }
}
