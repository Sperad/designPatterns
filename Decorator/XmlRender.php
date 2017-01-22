<?php
namespace design\Decorator;

class XmlRender extends RendererDecorator
{
    public function renderData(): String
    {
        $doc  = new \DOMDocument();
        $data = $this->wapped->renderData();
        $doc->appendChild($doc->createElement('content', $data));

        return $doc->saveXml();
    }
}
