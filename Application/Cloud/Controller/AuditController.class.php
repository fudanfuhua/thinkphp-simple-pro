<?php
namespace Cloud\Controller;
use Think\Controller;
class AuditController extends BaseController {
    public function index() {

    	$this->assign('leftNav', 'audit');

        $this->display();

    }
}