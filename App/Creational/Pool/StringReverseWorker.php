<?php

namespace App\Creational\Pool;

class StringReverseWorker
{
    /**
     * @param string $text
     *
     * @return string
     */
    public function run(string $text): string
    {
        return strrev($text);
    }
}