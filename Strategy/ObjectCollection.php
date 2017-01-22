<?php
namespace design\Strategy;

class ObjectCollection
{
    private $elements;
    private $comparator;

    public function __construct(array $elements = [])
    {
        $this->elements = $elements;
    }

    public function sort(): array
    {
        if (!$this->comparator) {
            throw new \LogicException('Comparator is not set');
        }
        uasort($this->elements, [$this->comparator, 'compare']);
        return $this->elements;
    }

    public function setComparator(ComparatorInterface $comparator)
    {
        $this->comparator = $comparator;
    }
}
