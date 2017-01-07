<?php
namespace design\Composite;

class TextElement implements RenderableInterface
{
    private $text;
    public function __construct(String $text)
    {
        $this->text = $text;
    }

    public function render(): String
    {
        return $this->text;
    }

}
