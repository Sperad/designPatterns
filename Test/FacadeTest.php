<?php
namespace Test;

use design\Facade\BiosInterface;
use design\Facade\Facade;
use design\Facade\OsInterface;

class FacadeTest extends \PHPUnit_Framework_TestCase
{
    public function testComputerOn()
    {
        /** @var OsInterface|\PHPUnit_Framework_MockObject_MockObject $os */
        $os = $this->createMock(OsInterface::class);
        // $os->method('getName')->willReturn('Linux');
        $os->method('getName')->will($this->returnValue('Linux'));

        $bios = $this->getMockBuilder(BiosInterface::class)
            ->setMethods(['launch', 'execute', 'waitForKeyPress'])
            ->disableAutoload()
            ->getMock();

        $bios->expects($this->once())
            ->method('launch')
            ->with($os);

        $facade = new Facade($bios, $os);

        $facade->turnOn();
        $this->assertEquals('Linux', $os->getName());
    }
}
