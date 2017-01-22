<?php

namespace design\Build\builders;

use design\Build\BuilderInterface;
use design\Build\parts\Door;
use design\Build\parts\Engine;
use design\Build\parts\Wheel;
use design\Build\Vehicle;
use design\Build\vehicles\Car;

class CarBuilder implements BuilderInterface
{
    private $car;

    public function createVehicle()
    {
        $this->car = new Car();
    }

    public function addWheel()
    {
        $this->car->setPart("LF", new Wheel());
        $this->car->setPart("RF", new Wheel());
        $this->car->setPart("LR", new Wheel());
        $this->car->setPart("RR", new Wheel());
    }

    public function addEngine()
    {
        $this->car->setPart('engineOne', new Engine());
    }

    public function addDoors()
    {
        $this->car->setPart('LDoor', new Door());
        $this->car->setPart('RDoor', new Door());
        $this->car->setPart('TopDoor', new Door());
    }

    public function getVehicle(): Vehicle
    {
        return $this->car;
    }
}
