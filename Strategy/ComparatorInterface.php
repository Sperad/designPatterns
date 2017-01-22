<?php
namespace design\Strategy;

interface ComparatorInterface
{
    public function compare($a, $b): int;
}
