<?php
namespace design\Adapter;

interface BookInterface
{
    public function open();
    public function turnPage();
    public function getPage(): int;
}
