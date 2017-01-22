<?php

namespace design\State;

class ShippingOrder implements OrderInterface
{
    private $details;

    public function __construct(array $details)
    {
        $this->details = $details;
    }

    public function shipOrder()
    {
        throw new \Exception('Can not ship the order which status is shipping!');
    }

    public function completeOrder()
    {
        $this->details['status']     = 'completed';
        $this->details['updateTime'] = time();
    }

    public function getStatus(): string
    {
        return $this->details['status'];
    }
}
