<?php

namespace App\Structural\AdapterOrWrapper\Interfaces;

interface EBook
{
    public function unlock();

    public function pressNext();

    /**
     * Returns current page and total number of pages, like [10, 100] is page 10 of 100.
     *
     * @return int[]
     */
    public function getPage(): array;
}
