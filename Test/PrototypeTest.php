<?php
namespace Test;

use design\Prototype\BarBook;
use design\Prototype\FooBook;

class PrototypeTest extends \PHPUnit_Framework_TestCase
{
    public function testCanGetFooBook()
    {
        $fooBook = new FooBook();
        $barBook = new BarBook();

        for ($i = 0; $i < 10; $i++) {
            $book = clone $fooBook;
            $book->setTitle('fooBook title_no_' . $i);
            $this->assertInstanceOf('design\Prototype\FooBook', $book);
        }

        for ($i = 0; $i < 5; $i++) {
            $book = clone $barBook;
            $book->setTitle('barBook title_no_' . $i);
            $this->assertInstanceOf('design\Prototype\BarBook', $book);
        }

    }
}
