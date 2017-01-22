<?php

namespace Test;

use design\Command\AddMessageDateCommand;
use design\Command\HelloCommand;
use design\Command\Invoker;
use design\Command\Receiver;

class CommandTest extends \PHPUnit_Framework_TestCase
{
    public function testInvocation()
    {
        $invoker  = new Invoker();
        $receiver = new Receiver();
        $invoker->setCommand(new HelloCommand($receiver));
        $invoker->run();
        $this->assertEquals($receiver->getOutput(), 'Hello World');
    }

    public function testInvocation2()
    {
        $invoker  = new Invoker();
        $receiver = new Receiver();
        $invoker->setCommand(new HelloCommand($receiver));
        $invoker->run();
        $this->assertEquals($receiver->getOutput(), 'Hello World');
        $messageDateCommand = new AddMessageDateCommand($receiver);
        $messageDateCommand->execute();
        $invoker->run();
        $this->assertEquals($receiver->getOutput(), "Hello World\nHello World [" . date('Y-m-d') . ']');
        $messageDateCommand->undo();
        $invoker->run();
        $this->assertEquals($receiver->getOutput(), "Hello World\nHello World [" . date('Y-m-d') . "]\nHello World");
    }
}
