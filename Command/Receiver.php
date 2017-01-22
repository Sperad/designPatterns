<?php

namespace design\Command;

class Receiver
{
    private $enableDate = false;
    private $output     = [];

    public function write(string $str)
    {
        if ($this->enableDate) {
            $str .= ' [' . date('Y-m-d') . ']';
        }
        $this->output[] = $str;
    }

    public function getOutput()
    {
        return implode("\n", $this->output);
    }

    public function enableDate()
    {
        $this->enableDate = true;
    }

    public function disableData()
    {
        $this->enableDate = false;
    }

}
