<?php
/**
 * TOP API: taobao.hanoi.template.delete request
 *
 * @author auto create
 * @since 1.0, 2013-09-13 16:51:03
 */
class Taobao_Request_HanoiTemplateDeleteRequest {
	/**
	 * 认证信息
	 **/
	private $appName;

	/**
	 * 要删除的模板id
	 **/
	private $id;

	private $apiParas = array();

	public function setAppName($appName) {
		$this->appName = $appName;
		$this->apiParas["app_name"] = $appName;
	}

	public function getAppName() {
		return $this->appName;
	}

	public function setId($id) {
		$this->id = $id;
		$this->apiParas["id"] = $id;
	}

	public function getId() {
		return $this->id;
	}

	public function getApiMethodName() {
		return "taobao.hanoi.template.delete";
	}

	public function getApiParas() {
		return $this->apiParas;
	}

	public function check() {

		Taobao_RequestCheckUtil::checkNotNull($this->appName, "appName");
		Taobao_RequestCheckUtil::checkNotNull($this->id, "id");
	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
