<?php
namespace design\Build;

class Director
{
    public function build(BuilderInterface $builder): Vehicle
    {
        $builder->createVehicle();
        $builder->addWheel();
        $builder->addEngine();
        $builder->addDoors();
        return $builder->getVehicle();
    }
}
