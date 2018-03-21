<?php

namespace Casbin\Rbac\RoleManagers;

use Casbin\Rbac\RoleManager;

class DefaultRoleManager implements RoleManager
{

    public function clear(): void
    {
        // TODO: Implement clear() method.
    }

    public function addLink(string $name1, string $name2, string ...$domain): void
    {
        // TODO: Implement addLink() method.
    }

    public function deleteLink(string $name1, string $name2, string ...$domain): void
    {
        // TODO: Implement deleteLink() method.
    }

    public function hasLink(string $name1, string $name2, string ...$domain): void
    {
        // TODO: Implement hasLink() method.
    }

    public function getRoles(string $name, string ...$domain): array
    {
        // TODO: Implement getRoles() method.
    }

    public function getUsers(string $name, string ...$domain): array
    {
        // TODO: Implement getUsers() method.
    }

    public function printRoles(): void
    {
        // TODO: Implement printRoles() method.
    }
}