<?php
namespace Test;

use design\Specification\AndSp;
use design\Specification\Item;
use design\Specification\NotSp;
use design\Specification\OrSp;
use design\Specification\PriceSp;

class SpecificationTest extends \PHPUnit_Framework_TestCase
{
    public function testCanOr()
    {
        $spec1  = new PriceSp(50, 99);
        $spec2  = new PriceSp(101, 200);
        $orSpec = new OrSp($spec1, $spec2);
        $this->assertFalse($orSpec->isSatisfiedBy(new Item(100)));
        $this->assertTrue($orSpec->isSatisfiedBy(new Item(51)));
        $this->assertTrue($orSpec->isSatisfiedBy(new Item(150)));
    }

    public function testCanAnd()
    {
        $spec1   = new PriceSp(50, 100);
        $spec2   = new PriceSp(80, 200);
        $andSpec = new AndSp($spec1, $spec2);
        $this->assertFalse($andSpec->isSatisfiedBy(new Item(150)));
        $this->assertFalse($andSpec->isSatisfiedBy(new Item(1)));
        $this->assertFalse($andSpec->isSatisfiedBy(new Item(51)));
        $this->assertTrue($andSpec->isSatisfiedBy(new Item(100)));
    }

    public function testCanNot()
    {
        $spec1   = new PriceSp(50, 100);
        $notSpec = new NotSp($spec1);
        $this->assertTrue($notSpec->isSatisfiedBy(new Item(150)));
        $this->assertFalse($notSpec->isSatisfiedBy(new Item(50)));
    }
}
