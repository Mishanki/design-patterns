<?php

namespace App\Creational\Prototype;

abstract class BookPrototype
{
    /**
     * @var string
     */
    protected string $title;

    /**
     * @var string
     */
    protected string $category;

    /**
     * @return mixed
     */
    abstract public function __clone();

    /**
     * @return string
     */
    final public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    final public function setTitle(string $title): void
    {
        $this->title = $title;
    }
}
