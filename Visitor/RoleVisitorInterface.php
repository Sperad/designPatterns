<?php
namespace design\Visitor;

interface RoleVisitorInterface
{
    public function visitUser(User $role);
    public function visitGroup(Group $role);
}
