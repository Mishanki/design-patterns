<?php

namespace Tests\Creational\AbstractFactory;

use App\Creational\AbstractFactory\Interfaces\CsvWriter;
use App\Creational\AbstractFactory\Interfaces\JsonWriter;
use App\Creational\AbstractFactory\Interfaces\WriterFactory;
use App\Creational\AbstractFactory\UnixWriterFactory;
use App\Creational\AbstractFactory\WinWriterFactory;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 *
 * @coversNothing
 */
final class AbstractFactoryTest extends TestCase
{
    /**
     * @param WriterFactory $writerFactory
     *
     * @dataProvider dataProvider
     */
    public function testCreateWriter(WriterFactory $writerFactory)
    {
        $this->assertInstanceOf(JsonWriter::class, $writerFactory->createJsonWriter());
        $this->assertInstanceOf(CsvWriter::class, $writerFactory->createCsvWriter());
    }

    /**
     * @return array
     */
    public static function dataProvider(): array
    {
        return [
            [new UnixWriterFactory()],
            [new WinWriterFactory()],
        ];
    }
}
