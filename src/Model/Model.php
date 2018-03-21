<?php

namespace Casbin\Model;


class Model
{
    private $sectionNameMap;

    public function __construct()
    {
        $this->sectionNameMap = [
            'r' => 'request_definition',
            'p' => 'policy_definition',
            'g' => 'role_definition',
            'e' => 'policy_effect',
            'm' => 'matchers',
        ];
    }
/*
func loadAssertion(model Model, cfg config.ConfigInterface, sec string, key string) bool {
	value := cfg.String(sectionNameMap[sec] + "::" + key)
	return model.AddDef(sec, key, value)
}
 */
    private function loadAssertion(Model $model, Config $config, string $sec, string $key) {

    }
}