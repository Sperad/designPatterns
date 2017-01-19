<?php
namespace design\Mediator\subSystem;

use design\Mediator\Colleague;

class Database extends Colleague
{
    public function getData(): string
    {
        return 'World';
    }
}
