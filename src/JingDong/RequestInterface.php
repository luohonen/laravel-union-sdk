<?php

namespace Luohonen\LaravelUnionSdk\JingDong;

interface RequestInterface
{
    public function getMethod();

    public function getParamJson();
}