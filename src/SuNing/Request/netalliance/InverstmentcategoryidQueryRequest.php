<?php
namespace Luohonen\LaravelUnionSdk\SuNing\Request\Netalliance;

use Luohonen\LaravelUnionSdk\SuNing\SuningRequest;
use Luohonen\LaravelUnionSdk\SuNing\RequestCheckUtil;

/**
 * 苏宁开放平台接口 -
 *
 * @author suning
 * @date   2019-11-6
 */
class InverstmentcategoryidQueryRequest  extends SuningRequest{

	public function getApiMethodName(){
		return 'suning.netalliance.inverstmentcategoryid.query';
	}

	public function getApiParams(){
		return $this->apiParams;
	}

	public function check(){
		//非空校验
	}

	public function getBizName(){
		return "queryInverstmentcategoryid";
	}

}

?>
