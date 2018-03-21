<?php

namespace Casbin\Effect;


class DefaultEffector implements Effector
{
    public function __construct()
    {
    }

    /**
     * @param string $expr
     * @param Effect[] $effects
     * @param float[] $result
     * @return bool
     */
    public function mergeEffects(string $expr, array $effects, array $result): bool
    {
        // TODO: Implement mergeEffects() method.
        return false;
    }
}