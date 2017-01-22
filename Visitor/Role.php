<?php
namespace design\Visitor;

interface Role
{
    public function accept(RoleVisitorInterface $visitor);
}
