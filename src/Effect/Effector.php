<?php

namespace Casbin\Effect;


interface Effector
{
    /**
     * @param string $expr
     * @param Effect[] $effects
     * @param float[] $result
     * @return bool
     */
    public function mergeEffects(string $expr, array $effects, array $result): bool;
}