<?php
namespace design\Bridge;

class HelloWorldService extends Service
{
    public function get()
    {
        return $this->implementation->format('hello world');
    }
}
