<?php

namespace design\FactoryMethod\Vehicle;

use design\FactoryMethod\VehicleInterface;

class CarFerrari implements VehicleInterface
{
    private $color;

    public function setColor(string $rgb)
    {
        $this->color = $rgb;
    }
}
