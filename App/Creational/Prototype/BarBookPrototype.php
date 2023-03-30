<?php

namespace App\Creational\Prototype;

class BarBookPrototype extends BookPrototype
{
    /**
     * @var string
     */
    protected string $category = 'Bar';

    public function __clone()
    {
    }
}
