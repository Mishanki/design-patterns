<?php

namespace App\Structural\Decorator\Interfaces;

interface Booking
{
    public function calculatePrice(): int;

    public function getDescription(): string;
}