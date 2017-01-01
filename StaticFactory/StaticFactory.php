<?php
namespace design\StaticFactory;

use design\StaticFactory\Formatters\FormatNumber;
use design\StaticFactory\Formatters\FormatString;

class StaticFactory
{
    public static function factory(string $type): FormatterInterface
    {
        if ('number' === $type) {
            return new FormatNumber();
        }
        if ('string' === $type) {
            return new FormatString();
        }
        throw new \InvalidArgumentException("unknown format given with " . $type);
    }
}
