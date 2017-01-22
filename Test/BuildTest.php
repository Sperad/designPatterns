<?php
namespace Test;

use design\Build\builders\CarBuilder;
use design\Build\builders\TruckBuilder;
use design\Build\Director;

class BuildTest extends \PHPUnit_Framework_TestCase
{
    public function testCar()
    {
        $CarBuilder = new CarBuilder();
        $car        = (new Director())->build($CarBuilder);
        $this->assertInstanceOf('design\Build\vehicles\Car', $car);
    }

    public function testTruck()
    {
        $TruckBuilder = new TruckBuilder();
        $truck        = (new Director())->build($TruckBuilder);
        $this->assertInstanceOf('design\Build\vehicles\Truck', $truck);
    }
}
