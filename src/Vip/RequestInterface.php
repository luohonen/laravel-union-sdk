<?php
/**
 * Created by PhpStorm.
 * User: luohonen
 * Date: 2019/1/8
 * Time: 15:54
 */

namespace Luohonen\LaravelUnionSdk\Vip;


interface RequestInterface
{
    public function getMethod();

    public function getParamJson();
}
