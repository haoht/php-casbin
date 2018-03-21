<?php

namespace Tests\Rbac;

use Casbin\Enforcer;
use Casbin\Persist\Adapters\FileAdapter;
use PHPUnit\Framework\TestCase;

class RbacApiTest extends TestCase
{
    private $policyCsv = <<<CSV
p, alice, data1, read
p, bob, data2, write
CSV;

    private $modelConf = <<<CONF
[request_definition]
r = sub, obj, act

[policy_definition]
p = sub, obj, act

[policy_effect]
e = some(where (p.eft == allow))

[matchers]
m = r.sub == r.obj.Owner
CONF;


    public function setUp()
    {
    }


    public function testGetRoles(Enforcer $enforcer, string $name, array $res)
    {
        $roles = $enforcer->getRolesForUser($name);

        $this->assertEquals($res, $roles);
    }

    public function testRolesApi()
    {
        $enforcer = \EnforcerFactory::build('rbac_model.conf', new FileAdapter('rbac_policy.csv'));
        $this->testGetRoles($enforcer, 'alice', ['data2_admin']);

    }
}
