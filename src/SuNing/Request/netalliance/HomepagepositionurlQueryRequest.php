<?php
namespace Luohonen\LaravelUnionSdk\SuNing\Request\Netalliance;

use Luohonen\LaravelUnionSdk\SuNing\SuningRequest;
use Luohonen\LaravelUnionSdk\SuNing\RequestCheckUtil;

/**
 * 苏宁开放平台接口 -
 *
 * @author suning
 * @date   2019-9-19
 */
class HomepagepositionurlQueryRequest  extends SuningRequest{

	/**
	 *
	 */
	private $subUser;

	public function getSubUser() {
		return $this->subUser;
	}

	public function setSubUser($subUser) {
		$this->subUser = $subUser;
		$this->apiParams["subUser"] = $subUser;
	}

	public function getApiMethodName(){
		return 'suning.netalliance.homepagepositionurl.query';
	}

	public function getApiParams(){
		return $this->apiParams;
	}

	public function check(){
		//非空校验
	}

	public function getBizName(){
		return "queryHomepagepositionurl";
	}

}

?>
