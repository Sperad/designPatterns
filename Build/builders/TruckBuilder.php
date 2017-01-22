<?php

namespace design\Build\builders;

use design\Build\BuilderInterface;
use design\Build\parts\Door;
use design\Build\parts\Engine;
use design\Build\parts\Wheel;
use design\Build\Vehicle;
use design\Build\vehicles\Truck;

class TruckBuilder implements BuilderInterface
{
    private $truck;

    public function createVehicle()
    {
        $this->truck = new Truck();
    }

    public function addWheel()
    {
        $this->truck->setPart("wheel11", new Wheel());
        $this->truck->setPart("wheel12", new Wheel());
        $this->truck->setPart("wheel13", new Wheel());
        $this->truck->setPart("wheel14", new Wheel());
        $this->truck->setPart("wheel15", new Wheel());
        $this->truck->setPart("wheel16", new Wheel());
    }

    public function addEngine()
    {
        $this->truck->setPart('truckEngine', new Engine());
    }

    public function addDoors()
    {
        $this->truck->setPart('LDoor', new Door());
        $this->truck->setPart('RDoor', new Door());
    }

    public function getVehicle(): Vehicle
    {
        return $this->truck;
    }
}
