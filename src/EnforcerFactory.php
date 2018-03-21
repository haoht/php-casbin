<?php

use Casbin\Effect\DefaultEffector;
use Casbin\Persist\Adapter;
use Casbin\Persist\Adapters\FileAdapter;
use Casbin\Rbac\RoleManagers\DefaultRoleManager;

class EnforcerFactory
{
    // NewEnforcer creates an enforcer via file or DB.
    // File:
    // e := casbin.NewEnforcer("path/to/basic_model.conf", "path/to/basic_policy.conf")
    // MySQL DB:
    // a := mysqladapter.NewDBAdapter("mysql", "mysql_username:mysql_password@tcp(127.0.0.1:3306)/")
    // e := casbin.NewEnforcer("path/to/basic_model.conf", a)
    public static function build(string $modelPath, Adapter $b): \Casbin\Enforcer
    {
        return new \Casbin\Enforcer(
            new DefaultEffector,
            new FileAdapter,
            new DefaultRoleManager
        );
    }
}