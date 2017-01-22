<?php
namespace Test;

use design\State\OrderRepository;

class StateTest extends \PHPUnit_Framework_TestCase
{
    public function testCanShipCreatedOrder()
    {
        $order = OrderRepository::findById(1);
        $order->shipOrder();
        $this->assertEquals('shipping', $order->getStatus());
    }

    public function testCanCompleteShippedOrder()
    {
        $order = OrderRepository::findById(2);
        $order->completeOrder();
        $this->assertEquals('completed', $order->getStatus());
    }

    /**
     * @expectedException \Exception
     */
    public function testThrowsExceptionWhenTryingToCompleteCreatedOrder()
    {
        $order = OrderRepository::findById(1);
        $order->completeOrder();
    }
}
