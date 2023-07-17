<?php

namespace Luohonen\LaravelUnionSdk\JingDong\Request;

use Luohonen\LaravelUnionSdk\JingDong\RequestInterface;

/**
 * Class JdUnionOrderQueryRequest
 * @package Luohonen\LaravelUnionSdk\JingDong\Request
 */
class JdUnionOrderRowQueryRequest implements RequestInterface
{
    /**
     * 订单查询接口
     * @url https://union.jd.com/openplatform/api/v2?apiName=jd.union.open.order.row.query
     * @var string
     */
    private $method = 'jd.union.open.order.row.query';


    /**
     * 开始时间 格式yyyy-MM-dd HH:mm:ss，与endTime间隔不超过1小时
     * @var
     */
    private $startTime;

    /**
     * 结束时间 格式yyyy-MM-dd HH:mm:ss，与startTime间隔不超过1小时
     * @var
     */
    private $endTime;


    /**
     * 页码，返回第几页结果
     * @var
     */
    private $pageIndex ;

    /**
     * 页码
     * @var
     */
    private $pageSize;


    /**
     * 订单时间查询类型(1：下单时间，2：完成时间，3：更新时间)
     * @var
     */
    private $type;


    /**
     * @return mixed
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @param $startTime
     */
    public function setStartTime($startTime): void
    {
        $this->startTime = $startTime;
    }

    /**
     * @return mixed
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @param $endTime
     */
    public function setEndTime($endTime): void
    {
        $this->endTime = $endTime;
    }


    /**
     * @return mixed
     */
    public function getPageIndex()
    {
        return $this->pageIndex;
    }

    /**
     * @param mixed $pageIndex
     */
    public function setPageIndex($pageIndex): void
    {
        $this->pageIndex = $pageIndex;
    }

    /**
     * @return mixed
     */
    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * @param mixed $pageSize
     */
    public function setPageSize($pageSize): void
    {
        $this->pageSize = $pageSize;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }


    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @return mixed
     */
    public function getParamJson()
    {
        $params = [
            'pageIndex' => $this->pageIndex,
            'pageSize' => $this->pageSize,
            'type' => $this->type,
            'startTime'=>$this->startTime,
            'endTime'=>$this->endTime,
        ];

        return json_encode([
            'orderReq' => array_filter ($params, function ($val) {
                return $val != null;
            })
        ]);
    }


}