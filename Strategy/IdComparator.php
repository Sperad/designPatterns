<?php
namespace design\Strategy;

class IdComparator implements ComparatorInterface
{
    public function compare($a, $b): int
    {
        // 比较两个数的大小【-1：前者小于后者，0：前者等于后者，1：前者大于后者】
        return $a['id'] <=> $b['id'];
    }
}
