<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;

use Think\Cache\Driver\Db;
use Think\Controller;

class AaaController extends CommonController {

    protected $is_dan_shuang = array(
        1 => "单",
        2 => "双",
    );

    protected $is_da_xiao = array(
        1 => "大",
        2 => "小",
    );

    public function indexAction() {

        $User = M("Users"); // 实例化User对象
        $trend = M("DataTrend");
        $data = M("PlayData");
        $trendlist = $trend->select();
        $datalist = $data->select();


        $datafind = $data->order("order_no desc")->find();

        $datafind["BigOrSmall"] = $this->is_da_xiao[$datafind["is_da"]];
        $datafind["OneOrDouble"] = $this->is_dan_shuang[$datafind["is_dan"]];

//        $aa = Db::table('Users')->where('status',1)->select();

//        dump($datafind);
//        exit;
        $this->assign("trendlist", $trendlist);
        $this->assign("datalist", $datalist);
        $this->assign("datafind", $datafind);
        $this->display();
    }


}