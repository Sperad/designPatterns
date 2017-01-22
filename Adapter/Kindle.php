<?php
namespace design\Adapter;

class Kindle implements EBookInterface
{
    private $page      = 1;
    private $totalpage = 100;

    public function pressNext()
    {
        $this->page++;
    }

    public function unlock()
    {

    }

    public function getPage(): array
    {
        return [$this->page, $this->totalpage];
    }

}
