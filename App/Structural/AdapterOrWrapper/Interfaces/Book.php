<?php

namespace App\Structural\AdapterOrWrapper\Interfaces;

interface Book
{
    public function turnPage();
    public function open();
    public function getPage(): int;
}
