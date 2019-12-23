<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/12/5 0005
 * Time: 21:58
 */

namespace app\admin\controller;


use app\admin\model\Enewsclass;
use app\admin\model\Enewstable;
use think\Controller;
use think\Db;

class ListNews extends Controller
{


    public function index()
    {
        return $this->fetch();
    }


    public function getData()
    {

//        取得数据表
        $table = Enewstable::all();

        $xinxi = Db::name('ecms_' . $table[0]['tbname'])->order('id desc')->limit(0, 30)->select();

//        console_log();

//        $classList = Enewsclass::all();
//        console_log($classList);

        $result = [
            "code" => 0,
            "msg" => "",
            "count" => count($xinxi),
            "data" => $xinxi
        ];

        return $result;

    }

}