<?php

namespace App\Structural\Bridge\Classes;

use App\Structural\Bridge\Interfaces\Formatter;

class HtmlFormatter implements Formatter
{
    /**
     * @param string $text
     *
     * @return string
     */
    public function format(string $text): string
    {
        return sprintf('<p>%s</p>', $text);
    }
}