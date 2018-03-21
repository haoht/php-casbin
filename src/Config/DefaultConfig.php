<?php

namespace Casbin\Config;


class DefaultConfig
{
    /**
     * @var string[][]
     */
    private $data;

    public function __construct(string $configName)
    {
        $this->data = array();
    }
}