<?php
namespace Test;

use design\DataMapper\StorageAdapter;
use design\DataMapper\UserMapper;

class DataMapperTest extends \PHPUnit_Framework_TestCase
{
    public function testCanMapUserFromStorage()
    {
        $storage = new StorageAdapter([
            1 => ['username' => 'sperad', 'email' => 'test@design.com'],
        ]);
        $mapper = new UserMapper($storage);

        $user = $mapper->findById(1);
        $this->assertInstanceOf('design\DataMapper\User', $user);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testWillNotMapInvalidData()
    {
        $storage = new StorageAdapter([]);
        $mapper  = new UserMapper($storage);

        $user = $mapper->findById(1);
    }
}
