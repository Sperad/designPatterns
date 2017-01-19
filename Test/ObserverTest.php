<?php
namespace Test;

use design\Observer\User;
use design\Observer\UserObserver;

class ObserverTest extends \PHPUnit_Framework_TestCase
{
    public function testChangeInUserLeadsToUserObserverBeingNotified()
    {
        $observer = new UserObserver();
        $user     = new User();
        $user->attach($observer);
        $user->changeEmail('foo@bar.com');
        $this->assertCount(1, $observer->getChangedUsers());
    }
}
