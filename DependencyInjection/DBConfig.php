<?php
namespace design\DependencyInjection;

class DBConfig
{
    private $password;
    private $port;
    private $host;
    private $username;

    public function __construct(string $host, int $port, string $username, string $password)
    {
        $this->host     = $host;
        $this->port     = $port;
        $this->username = $username;
        $this->password = $password;
    }

    /**
     * Gets the value of password.
     *
     * @return mixed
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * Gets the value of port.
     *
     * @return mixed
     */
    public function getPort(): int
    {
        return $this->port;
    }

    /**
     * Gets the value of host.
     *
     * @return mixed
     */
    public function getHost(): string
    {
        return $this->host;
    }

    /**
     * Gets the value of username.
     *
     * @return mixed
     */
    public function getUsername(): string
    {
        return $this->username;
    }

}
