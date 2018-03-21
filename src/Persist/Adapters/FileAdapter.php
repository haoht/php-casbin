<?php

namespace Casbin\Persist\Adapters;


use Casbin\Model\Model;
use Casbin\Persist\Adapter;

class FileAdapter implements Adapter
{
    /**
     * @var string
     */
    private $filePath;

    public function __construct(string $filePath)
    {
        if (!is_readable($filePath)) {
            throw new \InvalidArgumentException("'$filePath' is either missing or cannot be read");
        }

        $this->filePath = $filePath;
    }

    public function loadPolicy(Model $model): void
    {
        // TODO: Implement loadPolicy() method.
    }

    public function savePolicy(Model $model): void
    {
        // TODO: Implement savePolicy() method.
    }

    public function addPolicy(string $sec, string $ptype, array $rule): void
    {
        // TODO: Implement addPolicy() method.
    }

    public function removePolicy(string $sec, string $ptype, array $rule): void
    {
        // TODO: Implement removePolicy() method.
    }

    public function removeFilteredPolicy(string $sec, string $ptype, int $fieldIndex, string ...$fieldValues): void
    {
        // TODO: Implement removeFilteredPolicy() method.
    }
}