<?php

namespace App\Structural\Registry;

abstract class Registry
{
    public const LOGGER = 'logger';

    /**
     * This introduces global state in your application which can not be mocked up for testing
     * and is therefor considered an anti-pattern! Use dependency injection instead!
     *
     * @var array<Service>
     */
    private static array $services = [];

    /**
     * @var array|string[]
     */
    private static array $allowedKeys = [
        self::LOGGER,
    ];

    /**
     * @param string $key
     * @param Service $value
     *
     * @return void
     */
    final public static function set(string $key, Service $value)
    {
        if (!\in_array($key, self::$allowedKeys, true)) {
            throw new \InvalidArgumentException('Invalid key given');
        }

        self::$services[$key] = $value;
    }

    /**
     * @param string $key
     *
     * @return Service
     */
    final public static function get(string $key): Service
    {
        if (!\in_array($key, self::$allowedKeys, true) || !isset(self::$services[$key])) {
            throw new \InvalidArgumentException('Invalid key given');
        }

        return self::$services[$key];
    }
}
