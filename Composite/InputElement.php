<?php
namespace design\Composite;

class InputElement implements RenderableInterface
{

    public function render(): String
    {
        return '<input type="text" />';
    }

}
