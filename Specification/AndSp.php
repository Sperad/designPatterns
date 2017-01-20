<?php
namespace design\Specification;

class AndSp implements SpecificationInterface
{
    private $specifications;

    public function __construct(SpecificationInterface...$specifications)
    {
        $this->specifications = $specifications;
    }

    public function isSatisfiedBy(Item $item): bool
    {
        $satisfied = [];
        foreach ($this->specifications as $specification) {
            $satisfied[] = $specification->isSatisfiedBy($item);
        }
        return !in_array(false, $satisfied);
    }
}
