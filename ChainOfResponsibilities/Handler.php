<?php
namespace design\ChainOfResponsibilities;

use Psr\Http\Message\RequestInterface;

abstract class Handler
{
    private $successor = null;

    public function __construct(Handler $handler = null)
    {
        $this->successor = $handler;
    }

    final public function handle(RequestInterface $request)
    {
        $processed = $this->processing($request);
        if (null === $processed) {
            if (null !== $this->successor) {
                $processed = $this->successor->handle($request);
            }
        }
        return $processed;
    }

    abstract protected function processing(RequestInterface $request);
}
