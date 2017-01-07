<?php

namespace design\DataMapper;

class StorageAdapter
{
    private $data = [];

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function find(int $id)
    {
        if (isset($this->data[$id])) {
            return $this->data[$id];
        }
        return null;
    }
}
