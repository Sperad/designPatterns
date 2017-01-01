<?php
namespace design\SimpleFactory;

class Factory
{
    public function createBicycle()
    {
        return new Bicycle();
    }
}
