<?php

namespace App\Creational\AbstractFactory\Classes;

use App\Creational\AbstractFactory\Interfaces\JsonWriter;

class UnixJsonWriter implements JsonWriter
{
    /**
     * @param array $data
     * @param bool $formatted
     *
     * @return string
     */
    public function write(array $data, bool $formatted = false): string
    {
        $options = 0;
        if ($formatted) {
            $options = JSON_PRETTY_PRINT;
        }

        return json_encode($data, $options);
    }
}