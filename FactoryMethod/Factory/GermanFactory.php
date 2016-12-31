<?php

namespace design\FactoryMethod\Factory;

use design\FactoryMethod\FactoryMethod;
use design\FactoryMethod\VehicleInterface;
use design\FactoryMethod\Vehicle\Bicycle;
use design\FactoryMethod\Vehicle\CarMercedes;

class GermanFactory extends FactoryMethod
{
    protected function createVehicle(string $type): VehicleInterface
    {
        switch ($type) {
            case parent::CHEAP:
                return new Bicycle();
            case parent::FAST:
                $carMercedes = new CarMercedes();
                $carMercedes->addAMGTuning();
                return $carMercedes;
            default:
                throw new \InvalidArgumentException($type . 'is not a valid vehicle');
        }
    }
}
