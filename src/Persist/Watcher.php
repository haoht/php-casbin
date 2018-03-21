<?php

namespace Casbin\Persist;


interface Watcher
{
    public function setUpdateCallback(callable $callback):void;

    public function update(): void;
}