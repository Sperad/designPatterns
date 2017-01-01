<?php
namespace design\Prototype;

abstract class Book
{
    protected $title;

    protected $prototype;

    abstract public function __clone();

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title)
    {
        $this->title = $title;
    }

}
