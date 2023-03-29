<?php

namespace App\Creational\AbstractFactory;

use App\Creational\AbstractFactory\Classes\UnixCsvWriter;
use App\Creational\AbstractFactory\Classes\UnixJsonWriter;
use App\Creational\AbstractFactory\Interfaces\CsvWriter;
use App\Creational\AbstractFactory\Interfaces\JsonWriter;
use App\Creational\AbstractFactory\Interfaces\WriterFactory;

class UnixWriterFactory implements WriterFactory
{
    /**
     * @return CsvWriter
     */
    public function createCsvWriter(): CsvWriter
    {
        return new UnixCsvWriter();
    }

    /**
     * @return JsonWriter
     */
    public function createJsonWriter(): JsonWriter
    {
        return new UnixJsonWriter();
    }
}