<?php

namespace Test;

use design\Flyweight\FlyweightFactory;

class FlyweightTest extends \PHPUnit_Framework_TestCase
{
    private $characters = 'abcdefghijklmnopqrstuvwxyz';
    private $fonts      = ['Arial', 'Times New Roman', 'Verdana', 'Helvetica'];

    public function testFlyweight()
    {
        $factory = new FlyweightFactory();

        $charLen = strlen($this->characters);
        for ($i = 0; $i < $charLen; $i++) {
            $char = $this->characters[$i];
            foreach ($this->fonts as $j => $font) {
                $flyweight = $factory->get($char);
                $rendered  = $flyweight->render($font);
                $this->assertEquals(sprintf('Character %s with font %s', $char, $font), $rendered);
            }
        }

        $this->assertCount($charLen, $factory);
    }
}
