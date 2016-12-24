<?php
namespace design\Build;

abstract class Vehicle
{
    private $data = [];

    public function setPart($key, $value)
    {
        $this->data[$key] = $value;
    }

}
