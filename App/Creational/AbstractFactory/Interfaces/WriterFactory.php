<?php

namespace App\Creational\AbstractFactory\Interfaces;

interface WriterFactory
{
    /**
     * @return CsvWriter
     */
    public function createCsvWriter(): CsvWriter;

    /**
     * @return JsonWriter
     */
    public function createJsonWriter(): JsonWriter;
}