<?php

namespace Casbin\Persist;


use Casbin\Model\Model;

interface Adapter
{
    public function loadPolicy(Model $model): void;

    public function savePolicy(Model $model): void;

    public function addPolicy(string $sec, string $ptype, array $rule): void;

    public function removePolicy(string $sec, string $ptype,array $rule): void;

    public function removeFilteredPolicy(string $sec, string $ptype, int $fieldIndex, string ...$fieldValues): void;
}