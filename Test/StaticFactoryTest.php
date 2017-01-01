<?php

namespace Test;

use design\StaticFactory\StaticFactory;

class StaticFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testCanCreateNumberFormatter()
    {
        $this->assertInstanceOf('design\StaticFactory\Formatters\FormatNumber',
            StaticFactory::factory('number'));
    }

    public function testCanCreateStringFormatter()
    {
        $this->assertInstanceOf('design\StaticFactory\Formatters\FormatString',
            StaticFactory::factory('string'));
    }

    public function testException()
    {
        StaticFactory::factory('formatName');
    }
}
