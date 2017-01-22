<?php
namespace design\Facade;

interface OsInterface
{
    public function halt();
    public function getName(): string;
}
