<?php
namespace design\Mediator;

use design\Mediator\subSystem\Client;
use design\Mediator\subSystem\Database;
use design\Mediator\subSystem\Server;

class Mediator implements MediatorInterface
{
    private $server;
    private $database;
    private $client;

    public function __construct(Database $database, Client $client, Server $server)
    {
        $this->server   = $server;
        $this->database = $database;
        $this->client   = $client;

        $this->database->setMediator($this);
        $this->server->setMediator($this);
        $this->client->setMediator($this);
    }

    public function sendResponse($content)
    {
        $this->client->output($content);
    }

    public function makeRequest()
    {
        $this->server->process();
    }

    public function queryDb(): string
    {
        return $this->database->getData();
    }

}
