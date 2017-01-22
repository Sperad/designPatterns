<?php
namespace design\Decorator;

class JsonRender extends RendererDecorator
{
    public function renderData(): String
    {
        return json_encode($this->wapped->renderData());
    }
}
