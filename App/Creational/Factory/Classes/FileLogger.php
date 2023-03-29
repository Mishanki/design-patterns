<?php

namespace App\Creational\Factory\Classes;

use App\Creational\Factory\Interfaces\Logger;

class FileLogger implements Logger
{
    /**
     * @param string $filePath
     */
    public function __construct(private string $filePath)
    {
    }

    /**
     * @param string $message
     *
     * @return void
     */
    public function log(string $message): void
    {
        file_put_contents($this->filePath, $message . PHP_EOL, FILE_APPEND);
    }
}