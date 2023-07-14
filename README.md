# 介绍

CPS联盟六合一SDK，支持淘宝联盟、京东联盟、多多进宝、唯品会、苏宁、蘑菇街。该项目长期维护，如发现问题，请提交PR。

仅支持laravel5-laravel8



# 安装
1、安装扩展包，该扩展包只支持laravel

```bash
composer require luohonen/laravel-union-sdk
```


2、执行下面的命令，然后修改config/unionsdk.php

```bash
php artisan vendor:publish --provider "Luohonen\LaravelUnionSdk\ServiceProvider"
```

# 初始化SDK
每个平台SDK的具体调用方法参考各平台的文档

1、淘宝SDK初始化

```php
<?php
use Luohonen\LaravelUnionSdk\Factory;
use Luohonen\LaravelUnionSdk\taobao\request\TbkItemInfoGetRequest;

$client = Factory::taobao ();
$req = new TbkItemInfoGetRequest();
$req->setNumIids ($numIids);
return $client->execute ($req);
```

2、京东SDK初始化

```php
<?php
use Luohonen\LaravelUnionSdk\Factory;
use Luohonen\LaravelUnionSdk\jingdong\request\JdUnionGoodsPromotiongoodsinfoQueryRequest;

$jd = Factory::jingdong();
$req = new JdUnionGoodsPromotiongoodsinfoQueryRequest();
$req->setSkuIds("$itemid");
return $jd->execute($req);
```

3、拼多多SDK初始化

```php
<?php
use Luohonen\LaravelUnionSdk\Factory;
use Luohonen\LaravelUnionSdk\pinduoduo\request\DdkGoodsDetailRequest;

$pdd = Factory::pinduoduo();
$req = new DdkGoodsDetailRequest();
$req->setGoodsIdList("[$itemid]");
return  $pdd->execute($req);
```

4、唯品会SDK初始化
```php
<?php
use Luohonen\LaravelUnionSdk\Factory;
use Luohonen\LaravelUnionSdk\Vip\Request\PidGenRequest;
use Luohonen\LaravelUnionSdk\Vip\Request\UnionPidServiceClient;

// 唯品会官方的sdk写的比较垃圾，用法和其他平台稍微不一样
$service= UnionPidServiceClient::getService();
Factory::vip();
$pidGenRequest1 = new PidGenRequest();
$pidNameList2 = array();
$pidNameList2[0] = "value";
$pidGenRequest1->pidNameList = $pidNameList2;
$pidGenRequest1->requestId = "requestId";
dd($service->genPidWithOauth($pidGenRequest1));
```

5、苏宁连联盟SDK初始化

```php
<?php
use Luohonen\LaravelUnionSdk\Factory;
use Luohonen\LaravelUnionSdk\suning\Request\netalliance\CouponproductQueryRequest;

$c = Factory::suning();
$req = new CouponproductQueryRequest();
$req->setPageNo("1");
$req->setPageSize("10");
$req->setPositionId("12");
$resp = $c->execute($req);
dd($resp);
```
