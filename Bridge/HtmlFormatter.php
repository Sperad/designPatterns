<?php

namespace design\Bridge;

class HtmlFormatter implements FormatterInterface
{
    public function format(string $text)
    {
        return sprintf('<p>%s</p>', $text);
    }
}
