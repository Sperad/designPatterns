<?php
namespace Test;

use design\Visitor\Group;
use design\Visitor\Role;
use design\Visitor\RoleVisitor;
use design\Visitor\User;

class VisitorTest extends \PHPUnit_Framework_TestCase
{
    private $visitor;

    protected function setUp()
    {
        $this->visitor = new RoleVisitor();
    }

    public function provideRoles()
    {
        return [
            [new User('Dominik')],
            [new Group('Administrators')],
        ];
    }

    /**
     * @dataProvider provideRoles
     */
    public function testVisitSomeRole(Role $role)
    {
        $role->accept($this->visitor);
        $this->assertSame($role, $this->visitor->getVisited()[0]);
    }
}
