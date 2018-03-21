<?php

namespace Casbin;


use Casbin\Effect\Effector;
use Casbin\Persist\Adapter;
use Casbin\Persist\Watcher;
use Casbin\Rbac\RoleManager;

class Enforcer
{
    /*
type Enforcer struct {
	modelPath          string
	model              model.Model
	fm                 model.FunctionMap

	enabled            bool
	autoSave           bool
	autoBuildRoleLinks bool
     */

    /**
     * @var Effector
     */
    private $effector;

    /**
     * @var Adapter
     */
    private $adapter;

    /**
     * @var Watcher
     */
    private $watcher;

    /**
     * @var RoleManager
     */
    private $roleManager;

    public function __construct(Effector $effector, Adapter $adapter, RoleManager $roleManager)
    {
        $this->effector = $effector;
        $this->adapter = $adapter;
        $this->roleManager = $roleManager;
    }

    public function getRolesForUser($name)
    {
    }
}