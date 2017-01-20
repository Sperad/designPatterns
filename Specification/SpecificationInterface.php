<?php
namespace design\Specification;

interface SpecificationInterface
{
    public function isSatisfiedBy(Item $item): bool;
}
