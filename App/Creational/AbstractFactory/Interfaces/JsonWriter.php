<?php

namespace App\Creational\AbstractFactory\Interfaces;

interface JsonWriter
{
    /**
     * @param array $data
     * @param bool $formatted
     *
     * @return string
     */
    public function write(array $data, bool $formatted = false): string;
}