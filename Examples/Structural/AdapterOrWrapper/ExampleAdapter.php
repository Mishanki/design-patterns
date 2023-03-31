<?php

namespace Examples\Structural\AdapterOrWrapper;

use App\Structural\AdapterOrWrapper\Classes\EBookAdapter;
use App\Structural\AdapterOrWrapper\Classes\Kindle;

class ExampleAdapter
{
    /**
     * To translate one interface for a class into a compatible interface.
     * An adapter allows classes to work together that normally could not because of incompatible interfaces by providing its interface to clients while using the original interface.
     */
    public function usage()
    {
        $kindle = new Kindle();
        $book = new EBookAdapter($kindle);

        $book->open();
        $book->turnPage();
        $page = $book->getPage(); // 2
    }
}
