<?php

namespace Test;

use design\NullObject\NullLogger;
use design\NullObject\PrintLogger;
use design\NullObject\Service;

class NullObjectTest extends \PHPUnit_Framework_TestCase
{
    public function testNullObject()
    {
        $service = new Service(new NullLogger());
        $this->expectOutputString(null);
        $service->doSomething();
    }
    public function testStandardLogger()
    {
        $service = new Service(new PrintLogger());
        $this->expectOutputString('We are in ' . Service::class);
        $service->doSomething();
    }
}
