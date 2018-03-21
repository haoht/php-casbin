<?php

namespace Casbin\Rbac;

interface RoleManager
{
    public function clear(): void;

    public function addLink(string $name1, string $name2, string ...$domain): void;

    public function deleteLink(string $name1, string $name2, string ...$domain): void;

    public function hasLink(string $name1, string $name2, string ...$domain): void;

    public function getRoles(string $name, string ...$domain): array;

    public function getUsers(string $name, string ...$domain): array;

    public function printRoles(): void;
}