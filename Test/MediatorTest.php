<?php

namespace Test;

use design\Mediator\Mediator;
use design\Mediator\subSystem\Client;
use design\Mediator\subSystem\Database;
use design\Mediator\subSystem\Server;

class MediatorTest extends \PHPUnit_Framework_TestCase
{
    public function testOutputHelloWorld()
    {
        $client = new Client();
        new Mediator(new Database(), $client, new Server());
        $this->expectOutputString('Hello World');
        $client->request();
    }
}
