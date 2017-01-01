<?php

namespace Test;

use design\Singleton\Singleton;

class SingletonTest extends \PHPUnit_Framework_TestCase
{
    public function testUniqueness()
    {
        $firstCall  = Singleton::getInstance();
        $secondCall = Singleton::getInstance();

        $this->assertInstanceOf('design\Singleton\Singleton', $firstCall);
        $this->assertSame($firstCall, $secondCall);
    }
}
