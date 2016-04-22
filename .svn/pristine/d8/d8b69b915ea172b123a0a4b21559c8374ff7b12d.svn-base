<?php
namespace Cloud\Controller;
use Think\Controller;
class DashboardController extends BaseController {
    public function index() {

        $this->assign('leftNav', 'dashboard');

        $this->display();
    }
    
    public function ignoreQuery() {
        $ignoreId = $_REQUEST['ignoreid'];

        $response = array('flag' => 0, 'msg' => "忽略成功");

        if (!empty($ignoreId)) {
            echo json_encode($response);
        }
    }

    public function listQuery() {
        $listId = $_REQUEST['listid'];

        $data = array('question' => "IP没有使用", 'suggest' => 'xxxxxxxxx', 'ID' => '123456', 'time' => '2015年3月3日', "infoid" => "111");

        $response = array(
            'flag'  => 0, 
            'msg'   => "获取成功",
            'data'  => [$data, $data, $data]
        );

        if (!empty($listId)) {
            echo json_encode($response);
        }
    }

    public function cardQuery() {
        $cardId = $_REQUEST['cardid'];

        $data1 = array('listid' => "111", 'title' => '账号', 'num' => '8');
        $data2 = array('listid' => "222", 'title' => 'ELB日志没有开启?', 'num' => '4');
        $data3 = array('listid' => "333", 'title' => '镜像来源被删除', 'num' => '12');
        $data4 = array('listid' => "444", 'title' => 'RDS', 'num' => '1');
        $data5 = array('listid' => "555", 'title' => '镜像来源被删除', 'num' => '1');
        $data6 = array('listid' => "666", 'title' => '镜像来源被删除', 'num' => '1');

        $response = array(
            'flag'  => 0, 
            'msg'   => "获取成功",
            'data'  => [$data1, $data2, $data3 ,$data4 ,$data5, $data6]
        );

        if (!empty($cardId)) {
            echo json_encode($response);
        }
    }

    public function pageQuery() {
        $data1 = array(
            'title' => "网络审计",  "num" => "9", "status" => "建议", "cardid" => "111"
        );
        $data2 = array(
            'title' => "宿主机审计", "num" => "10", "status" => "建议", "cardid" => "222"
        );
        $data3 = array(
            'title' => "虚拟化审计", "num" => "", "status" => "一切正常", "cardid" => "333"
        );
        $data4 = array(
            'title' => "云主机审计", "num" => "100", "status" => "建议", "cardid" => "444"
        );
        $data5 = array(
            'title' => "应用审计",  "num" => "", "status" => "一切正常", "cardid" => "555"
        );
        $data6 = array(
            'title' => "数据审计",  "num" => "54", "status" => "建议", "cardid" => "666"
        );

        $response = array(
            'flag'  => 0, 
            'msg'   => "获取成功",
            'data'  => [$data1, $data2, $data3 ,$data4 ,$data5, $data6]
        );

        echo json_encode($response);
    }
}