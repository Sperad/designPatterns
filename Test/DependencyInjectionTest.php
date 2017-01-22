<?php
namespace Test;

use design\DependencyInjection\DBConfig;
use design\DependencyInjection\DBConnection;

class DependencyInjectionTest extends \PHPUnit_Framework_TestCase
{
    public function testDependencyInjection()
    {
        $config = new DBConfig('localhost', 3306, 'domnikl', '1234');
        $conn   = new DBConnection($config);

        $this->assertEquals('domnikl:1234@localhost:3306', $conn->getDsn());
    }
}
