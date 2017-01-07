<?php
namespace Test;

use design\Adapter\Book;
use design\Adapter\EBookAdapter;
use design\Adapter\Kindle;

class AdapterTest extends \PHPUnit_Framework_TestCase
{
    public function testCanTurnPageOnBook()
    {
        $book = new Book();
        $book->open();
        $book->turnPage();
        $this->assertEquals(2, $book->getPage());
    }

    public function testCanTurnPageOnKindleLikeInANormalBook()
    {
        $kindle = new Kindle();
        $book   = new EBookAdapter($kindle);

        $book->open();
        $book->turnPage();

        $this->assertEquals(2, $book->getPage());
    }
}
