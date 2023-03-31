<?php

namespace App\Structural\AdapterOrWrapper\Classes;

use App\Structural\AdapterOrWrapper\Interfaces\EBook;

class Kindle implements EBook
{
    private int $page = 1;

    private int $totalPages = 100;

    public function pressNext()
    {
        ++$this->page;
    }

    public function unlock()
    {
    }

    /**
     * @return int[]
     */
    public function getPage(): array
    {
        return [$this->page, $this->totalPages];
    }
}
