<?php
namespace design\Prototype;

class BarBook extends Book
{

    protected $prototype = 'Bar';

    public function __clone()
    {

    }

}
