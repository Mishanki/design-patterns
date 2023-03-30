<?php

namespace App\Structural\Bridge\Interfaces;

interface Formatter
{
    /**
     * @param string $text
     *
     * @return string
     */
    public function format(string $text): string;
}
