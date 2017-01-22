<?php
namespace design\Multiton;

class Multiton
{
    const INSTANCE_1 = '1';
    const INSTANCE_2 = '2';

    private static $instances = [];

    private function __construct()
    {}

    public static function getInstance(string $instanceName): Multiton
    {
        if (!isset(self::$instances[$instanceName])) {
            self::$instances[$instanceName] = new self();
        }
        return self::$instances[$instanceName];
    }

    private function __clone()
    {}

    private function __wakeup()
    {}
}
