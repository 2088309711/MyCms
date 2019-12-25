<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/12/25 0025
 * Time: 13:54
 */

namespace app\admin\controller;


use think\Controller;

class UserManage extends Controller
{


    public function index()
    {
        return $this->fetch();
    }

}