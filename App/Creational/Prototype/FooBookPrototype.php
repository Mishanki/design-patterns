<?php

namespace App\Creational\Prototype;

class FooBookPrototype extends BookPrototype
{
    /**
     * @var string
     */
    protected string $category = 'Foo';

    public function __clone()
    {
    }
}
