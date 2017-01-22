<?php
namespace design\Memento;

class Memento
{
    private $state;
    public function __construct(State $stateToSave)
    {
        $this->state = $stateToSave;
    }

    public function getState()
    {
        return $this->state;
    }
}
