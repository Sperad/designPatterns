<?php
namespace Test;

use design\Bridge\HelloWorldService;
use design\Bridge\HtmlFormatter;
use design\Bridge\PlainTextFormatter;

class BridgeTest extends \PHPUnit_Framework_TestCase
{
    public function testCanPrintUsingThePlainTextPrinter()
    {
        $service = new HelloWorldService(new PlainTextFormatter);

        $this->assertEquals('hello world', $service->get());

        $service->setImplementation(new HtmlFormatter());
        $this->assertEquals('<p>hello world</p>', $service->get());
    }
}
