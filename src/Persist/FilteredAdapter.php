<?php

namespace Casbin\Persist;


use Casbin\Model\Model;

interface FilteredAdapter extends Adapter
{
    public function loadFilteredPolicy(Model $model, $filter): void;

    public function isFiltered(): bool;
}