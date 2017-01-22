<?php
namespace design\State;

interface OrderInterface
{
    public function shipOrder();
    public function completeOrder();
    public function getStatus(): string;
}
