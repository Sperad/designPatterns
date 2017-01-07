<?php
namespace Test;

use design\Decorator\JsonRender;
use design\Decorator\WebService;
use design\Decorator\XmlRender;

class DecoratorTest extends \PHPUnit_Framework_TestCase
{
    private $service;

    protected function setUp()
    {
        $this->service = new WebService('foobar');
    }

    public function testJsonDecorator()
    {
        $service = new JsonRender($this->service);

        $this->assertEquals('"foobar"', $service->renderData());
    }

    public function testXmlDecorator()
    {
        $service = new XmlRender($this->service);

        $this->assertXmlStringEqualsXmlString('<?xml version="1.0"?><content>foobar</content>', $service->renderData());
    }
}
