<?php

namespace Examples\Creational\Prototype;

use App\Creational\Prototype\BarBookPrototype;
use App\Creational\Prototype\FooBookPrototype;

class Example
{
    /**
     * To avoid the cost of creating objects the standard way (new Foo()) and instead create a prototype and clone it.
     */
    public function usage()
    {
        $fooPrototype = new FooBookPrototype();
        $barPrototype = new BarBookPrototype();

        for ($i = 0; $i < 10; ++$i) {
            $book = clone $fooPrototype;
            $book->setTitle('Foo Book No '.$i);
            echo $book->getTitle().PHP_EOL;
        }
        for ($i = 0; $i < 5; ++$i) {
            $book = clone $barPrototype;
            $book->setTitle('Bar Book No '.$i);
            echo $book->getTitle().PHP_EOL;
        }
    }
}
