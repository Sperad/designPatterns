<?php
namespace design\Proxy;

class Record
{
    private $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function __get(string $name): string
    {
        if (!isset($this->data[$name])) {
            throw new \OutOfRangeException("Invalid name given");

        }
        return $this->data[$name];
    }

    public function __set(string $name, string $value)
    {
        $this->data[$name] = $value;

    }
}
