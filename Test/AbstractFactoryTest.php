<?php
namespace Test;

use design\AbstractFactory\HtmlFactory;
use design\AbstractFactory\JsonFactory;

class AbstractFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testHtmlText()
    {
        $factory = new HtmlFactory();
        $content = 'htmlContent';
        $text    = $factory->createText($content);
        $this->assertInstanceOf('design\AbstractFactory\HtmlText', $text);
        $this->assertEquals($content, $text->getText());
    }

    public function testJsonText()
    {
        $factory = new JsonFactory();
        $content = 'jsonContent';
        $text    = $factory->createText($content);
        $this->assertInstanceOf('design\AbstractFactory\JsonText', $text);
        $this->assertEquals($content, $text->getText());
    }
}
