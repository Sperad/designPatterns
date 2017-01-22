<?php
namespace design\Decorator;

abstract class RendererDecorator
{
    protected $wapped;

    public function __construct(RenderableInterface $render)
    {
        $this->wapped = $render;
    }
}
