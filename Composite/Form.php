<?php
namespace design\Composite;

class Form implements RenderableInterface
{
    private $elements = [];

    public function render(): String
    {
        $formCode = '<form>';
        foreach ($this->elements as $i => $element) {
            $formCode .= $element->render();
        }
        $formCode .= "</form>";
        return $formCode;
    }

    public function addElement(RenderableInterface $element)
    {
        $this->elements[] = $element;
    }
}
