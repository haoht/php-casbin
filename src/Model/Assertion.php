<?php

namespace Casbin\Model;


use Casbin\Rbac\RoleManager;
use Psr\Log\LoggerTrait;
use RuntimeException;

class Assertion
{
    use LoggerTrait;

    /**
     * @var string
     */
    private $key;

    /**
     * @var string
     */
    private $value;

    /**
     * @var string[]
     */
    private $tokens;

    /**
     * @var string[][]
     */
    private $policy;

    /**
     * @var RoleManager
     */
    private $roleManager;

    public function __construct()
    {
    }

    /**
     * @param RoleManager $roleManager
     * @throws \RuntimeException
     */
    private function buildRoleLinks(RoleManager $roleManager)
    {
        $this->roleManager = $roleManager;
        $count = substr_count($this->value, '_');

        if ($count < 2) {
            throw new RuntimeException('the number of "_" in role definition should be at least 2');
        }

        foreach ($this->policy as $rule) {
            if (\strlen($rule) < $count) {
                throw new RuntimeException('grouping policy elements do not meet role definition');
            }

            if ($count === 2) {
                $this->roleManager->addLink($rule[0], $rule[1]);
            } else if ($count === 3) {
                $this->roleManager->addLink($rule[0], $rule[1], $rule[2]);
            } else if ($count === 4) {
                $this->roleManager->addLink($rule[0], $rule[1], $rule[2], $rule[3]);
            }
        }

        //@TODO: Add Logging
        //util.LogPrint("Role links for: " + ast.Key)
        $this->roleManager->printRoles();
    }
}