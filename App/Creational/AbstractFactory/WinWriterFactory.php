<?php

namespace App\Creational\AbstractFactory;

use App\Creational\AbstractFactory\Classes\WinCsvWriter;
use App\Creational\AbstractFactory\Classes\WinJsonWriter;
use App\Creational\AbstractFactory\Interfaces\CsvWriter;
use App\Creational\AbstractFactory\Interfaces\JsonWriter;
use App\Creational\AbstractFactory\Interfaces\WriterFactory;

class WinWriterFactory implements WriterFactory
{
    /**
     * @return CsvWriter
     */
    public function createCsvWriter(): CsvWriter
    {
        return new WinCsvWriter();
    }

    /**
     * @return JsonWriter
     */
    public function createJsonWriter(): JsonWriter
    {
        return new WinJsonWriter();
    }
}