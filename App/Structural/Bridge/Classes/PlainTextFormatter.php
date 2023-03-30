<?php

namespace App\Structural\Bridge\Classes;

use App\Structural\Bridge\Interfaces\Formatter;

class PlainTextFormatter implements Formatter
{
    /**
     * @param string $text
     *
     * @return string
     */
    public function format(string $text): string
    {
        return $text;
    }
}
