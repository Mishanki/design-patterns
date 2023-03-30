<?php

namespace Tests\Structural\Facade;

use App\Structural\Facade\Classes\BiosClass;
use App\Structural\Facade\Classes\OSystemClass;
use App\Structural\Facade\Facade;
use App\Structural\Facade\Interfaces\Bios;
use App\Structural\Facade\Interfaces\OperatingSystem;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 *
 * @coversNothing
 */
final class FacadeTest extends TestCase
{
    public function testComputerOn()
    {
        $os = $this->createMock(OperatingSystem::class);
        $os->method('getName')->willReturn('Linux');

        $bios = $this->createMock(Bios::class);
        $bios->method('launch')->with($os);

        $facade = new Facade($bios, $os);
        $facade->turnOn();

        static::assertSame('Linux', $os->getName());
    }

    public function testComputerOnWithClasses()
    {
        $os = new OSystemClass();
        $bios = new BiosClass();

        $facade = new Facade($bios, $os);
        $facade->turnOn();

        static::assertSame('Linux', $os->getName());
    }
}
