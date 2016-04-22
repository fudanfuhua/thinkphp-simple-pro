<?php
namespace Cloud\Controller;
use Think\Controller;
class BaseController extends Controller {
	public function _initialize(){
		$this->assign("__ROOT__", 		__ROOT__);
		$this->assign("__APP__", 		__APP__);
		$this->assign("__MODULE__", 	__MODULE__);
		$this->assign("__CONTROLLER__", __CONTROLLER__);
		$this->assign("__ACTION__", 	__ACTION__);
		$this->assign("__SELF__", 		__SELF__);
		$this->assign("__PUBLIC__", 	"/recent/Public");
//		$this->assign("__HTMLPATH__", 	__HTMLPATH__);
	}
}
