<?php

namespace design\FactoryMethod\Vehicle;

use design\FactoryMethod\VehicleInterface;

class CarMercedes implements VehicleInterface
{
    private $color;

    public function setColor(string $rgb)
    {
        $this->color = $rgb;
    }

    public function addAMGTuning()
    {

    }
}
