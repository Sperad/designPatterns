<?php
namespace design\DependencyInjection;

class DBConnection
{
    private $config;

    public function __construct(DBConfig $config)
    {
        $this->config = $config;
    }

    public function getDsn(): string
    {
        return sprintf(
            '%s:%s@%s:%d',
            $this->config->getUsername(),
            $this->config->getPassword(),
            $this->config->getHost(),
            $this->config->getPort()
        );
    }

}
