<?php

namespace App\Creational\AbstractFactory\Classes;

use App\Creational\AbstractFactory\Interfaces\CsvWriter;

class UnixCsvWriter implements CsvWriter
{
    /**
     * @param array $line
     *
     * @return string
     */
    public function write(array $line): string
    {
        return join(',', $line) . "\n";
    }
}