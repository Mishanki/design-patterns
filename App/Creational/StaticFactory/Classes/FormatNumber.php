<?php

namespace App\Creational\StaticFactory\Classes;

use App\Creational\StaticFactory\Interfaces\Formatter;

class FormatNumber implements Formatter
{
    /**
     * @param string $input
     *
     * @return string
     */
    public function format(string $input): string
    {
        return number_format((int) $input);
    }
}