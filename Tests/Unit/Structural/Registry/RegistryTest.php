<?php

namespace Tests\Structural\Registry;

use App\Structural\Registry\Registry;
use App\Structural\Registry\Service;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 *
 * @coversNothing
 */
final class RegistryTest extends TestCase
{
    private Service $service;

    protected function setUp(): void
    {
        $this->service = $this->getMockBuilder(Service::class)->getMock();
    }

    public function testSetAndGetLogger()
    {
        Registry::set(Registry::LOGGER, $this->service);

        static::assertSame($this->service, Registry::get(Registry::LOGGER));
    }

    public function testThrowsExceptionWhenTryingToSetInvalidKey()
    {
        $this->expectException(\InvalidArgumentException::class);

        Registry::set('foobar', $this->service);
    }

    /**
     * @runInSeparateProcess
     */
    public function testThrowsExceptionWhenTryingToGetNotSetKey()
    {
        $this->expectException(\InvalidArgumentException::class);

        Registry::get(Registry::LOGGER);
    }
}
