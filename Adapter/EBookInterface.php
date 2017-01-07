<?php
namespace design\Adapter;

interface EBookInterface
{
    public function pressNext();
    public function unlock();
    public function getPage(): array;
}
