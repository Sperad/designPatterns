<?php
namespace design\Prototype;

class FooBook extends Book
{
    protected $prototype = 'Foo';

    public function __clone()
    {

    }

}
