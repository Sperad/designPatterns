<?php
namespace Test;

use design\Registry\Registry;

class RegistryTest extends \PHPUnit_Framework_TestCase
{
    public function testSetAndGetLogger()
    {
        $logger = new \stdClass();
        Registry::set(Registry::LOGGER, $logger);
        $storedLogger = Registry::get(Registry::LOGGER);

        $this->assertSame($logger, $storedLogger);
        $this->assertInstanceOf('stdClass', $logger);
    }
}
