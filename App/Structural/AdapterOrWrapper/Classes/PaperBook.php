<?php

namespace App\Structural\AdapterOrWrapper\Classes;

use App\Structural\AdapterOrWrapper\Interfaces\Book;

class PaperBook implements Book
{
    private int $page;

    public function open(): void
    {
        $this->page = 1;
    }

    public function turnPage()
    {
        ++$this->page;
    }

    /**
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }
}
