<?php
namespace Test;

use design\Proxy\Record;
use design\Proxy\RecordProxy;

class ProxyTest extends \PHPUnit_Framework_TestCase
{
    public function testWillSetDirtyFlagInProxy()
    {
        $recordProxy           = new RecordProxy([]);
        $recordProxy->username = 'baz';

        $this->assertTrue($recordProxy->isDirty());
    }

    public function testProxyIsInstanceOfRecord()
    {
        $recordProxy           = new RecordProxy([]);
        $recordProxy->username = 'baz';

        $this->assertInstanceOf(Record::class, $recordProxy);
    }
}
