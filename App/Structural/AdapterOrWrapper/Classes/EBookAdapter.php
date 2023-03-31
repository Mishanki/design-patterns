<?php

namespace App\Structural\AdapterOrWrapper\Classes;

use App\Structural\AdapterOrWrapper\Interfaces\Book;
use App\Structural\AdapterOrWrapper\Interfaces\EBook;

/**
 * This is the adapter here. Notice it implements Book,
 * therefore you don't have to change the code of the client which is using a Book.
 */
class EBookAdapter implements Book
{
    /**
     * @param EBook $eBook
     */
    public function __construct(protected EBook $eBook)
    {
    }

    public function turnPage()
    {
        $this->eBook->pressNext();
    }

    /**
     * This class makes the proper translation from one interface to another.
     */
    public function open()
    {
        $this->eBook->unlock();
    }

    /**
     * @return int
     */
    public function getPage(): int
    {
        return $this->eBook->getPage()[0];
    }
}
