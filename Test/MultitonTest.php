<?php

namespace Test;

use design\Multiton\Multiton;

class MultitonTest extends \PHPUnit_Framework_TestCase
{
    public function testUniqueness()
    {
        $firstCall  = Multiton::getInstance(Multiton::INSTANCE_1);
        $secondCall = Multiton::getInstance(Multiton::INSTANCE_1);

        $this->assertInstanceOf('design\Multiton\Multiton', $firstCall);
        $this->assertSame($firstCall, $secondCall);
    }

    public function testUniquenessForEveryInstance()
    {
        $firstCall  = Multiton::getInstance(Multiton::INSTANCE_1);
        $secondCall = Multiton::getInstance(Multiton::INSTANCE_2);

        $this->assertInstanceOf('design\Multiton\Multiton', $firstCall);
        $this->assertInstanceOf('design\Multiton\Multiton', $secondCall);
        $this->assertNotSame($firstCall, $secondCall);
    }

}
