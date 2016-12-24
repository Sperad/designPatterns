<?php
namespace design\Build;

interface BuilderInterface
{
    public function createVehicle();
    public function addWheel();
    public function addEngine();
    public function addDoors();
    public function getVehicle(): Vehicle;
}
