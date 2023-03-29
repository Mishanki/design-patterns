<?php

namespace App\Creational\StaticFactory\Interfaces;

interface Formatter
{
    /**
     * @param string $input
     *
     * @return string
     */
    public function format(string $input): string;
}