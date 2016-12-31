<?php

namespace design\FactoryMethod\Vehicle;

use design\FactoryMethod\VehicleInterface;

class Bicycle implements VehicleInterface
{
    private $color;

    public function setColor(string $rgb)
    {
        $this->color = $rgb;
    }
}
