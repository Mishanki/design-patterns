<?php

namespace Examples\Creational\AbstractFactory;

use App\Creational\AbstractFactory\UnixWriterFactory;
use App\Creational\AbstractFactory\WinWriterFactory;

class Example
{
    /**
     * To create series of related or dependent objects without specifying their concrete classes.
     * Usually the created classes all implement the same interface.
     * The client of the abstract factory does not care about how these objects are created, it just knows how they go together.
     *
     * @return void
     */
    public function usage()
    {
        $writerFactory =  new UnixWriterFactory();
        $writerFactory->createJsonWriter()->write(['data' => 'some value']);

        $writerFactory =  new WinWriterFactory();
        $writerFactory->createCsvWriter()->write(['some value 1', 'some value 2']);
    }
}
