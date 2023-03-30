<?php

namespace App\Structural\DependencyInjection;

readonly class DatabaseConfiguration
{
    /**
     * @param string $host
     * @param int $port
     * @param string $username
     * @param string $password
     */
    public function __construct(
        private string $host,
        private int $port,
        private string $username,
        private string $password,
    ) {
    }

    /**
     * @return string
     */
    public function getHost(): string
    {
        return $this->host;
    }

    /**
     * @return int
     */
    public function getPort(): int
    {
        return $this->port;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }
}
