<?php

namespace Examples\Structural\AdapterOrWrapper;

use App\Structural\AdapterOrWrapper\Classes\PaperBook;

class ExampleDefault
{
    public function usage()
    {
        $book = new PaperBook();
        $book->open();
        $book->turnPage();
        $page = $book->getPage(); // 2
    }
}
