<?php

namespace App\Structural\DependencyInjection;

readonly class DatabaseConnection
{
    /**
     * @param DatabaseConfiguration $configuration
     */
    public function __construct(private DatabaseConfiguration $configuration)
    {
    }

    /**
     * @return string
     */
    public function getDsn(): string
    {
        return sprintf(
            '%s:%s@%s:%d',
            $this->configuration->getUsername(),
            $this->configuration->getPassword(),
            $this->configuration->getHost(),
            $this->configuration->getPort(),
        );
    }
}
