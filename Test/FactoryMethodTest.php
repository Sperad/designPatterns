<?php
namespace Test;

use design\FactoryMethod\FactoryMethod;
use design\FactoryMethod\Factory\GermanFactory;
use design\FactoryMethod\Factory\ItalianFactory;

class FactoryMethodTest extends \PHPUnit_Framework_TestCase
{
    public function testCanCreateCheapVehicleInGermany()
    {
        $germanF = new GermanFactory();
        $vehicle = $germanF->create(FactoryMethod::CHEAP);
        $this->assertInstanceOf('design\FactoryMethod\Vehicle\Bicycle', $vehicle);
    }

    public function testCanCreateFastVehicleInGermany()
    {
        $germanF = new GermanFactory();
        $vehicle = $germanF->create(FactoryMethod::FAST);
        $this->assertInstanceOf('design\FactoryMethod\Vehicle\CarMercedes', $vehicle);
    }

    public function testCanCreateCHeapVehicleInItalian()
    {
        $ItalianF = new ItalianFactory();
        $vehicle  = $ItalianF->create(FactoryMethod::CHEAP);
        $this->assertInstanceOf('design\FactoryMethod\Vehicle\Bicycle', $vehicle);
    }

    public function testCanCreateFastVehicleInItalian()
    {
        $ItalianF = new ItalianFactory();
        $vehicle  = $ItalianF->create(FactoryMethod::FAST);
        $this->assertInstanceOf('design\FactoryMethod\Vehicle\CarFerrari', $vehicle);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testUnknownType()
    {
        (new ItalianFactory())->create('spaceship');
    }

}
