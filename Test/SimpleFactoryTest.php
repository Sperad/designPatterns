<?php

namespace Test;

use design\SimpleFactory\Factory;

class SimpleFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testCanCreateBicycle()
    {
        $bicycle = (new Factory())->createBicycle();
        $this->assertInstanceOf('design\SimpleFactory\Bicycle', $bicycle);
    }
}
