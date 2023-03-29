<?php

namespace App\Creational\StaticFactory;

use App\Creational\StaticFactory\Classes\FormatNumber;
use App\Creational\StaticFactory\Classes\FormatString;
use App\Creational\StaticFactory\Interfaces\Formatter;
use InvalidArgumentException;
use UnhandledMatchError;

final class StaticFactory
{
    /**
     * @param string $type
     *
     * @return Formatter
     */
    public static function factory(string $type): Formatter
    {
        try {
            return match ($type) {
                'number' => new FormatNumber(),
                'string' => new FormatString(),
            };
        } catch (UnhandledMatchError) {
            throw new InvalidArgumentException('Invalid factory type');
        }
    }
}