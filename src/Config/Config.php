<?php

namespace Casbin\Config;


interface Config
{
    public function string(string $key): string;

    /**
     * @param string $key
     * @return string[]
     */
    public function strings(string $key): array;

    public function bool(string $key): bool;

    public function int(): int;

    public function int64(): int;

    public function float64(): float;

    public function set(string $key, string $value): void;
}