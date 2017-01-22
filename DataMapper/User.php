<?php
namespace design\DataMapper;

class User
{
    private $email;
    private $username;

    public static function fromState(array $state): User
    {
        return new self($state['username'], $state['email']);
    }

    public function __construct(string $username, string $email)
    {
        $this->username = $username;
        $this->email    = $email;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getEmail()
    {
        return $this->email;
    }

}
