<?php
namespace design\ChainOfResponsibilities;

use Psr\Http\Message\RequestInterface;

class SlowHandler extends Handler
{
    protected function processing(RequestInterface $request)
    {
        return 'Hello World!';
    }
}
