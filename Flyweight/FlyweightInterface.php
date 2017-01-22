<?php
namespace design\Flyweight;

interface FlyweightInterface
{
    public function render(string $extrinsicState): string;
}
