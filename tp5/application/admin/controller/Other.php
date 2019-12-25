<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/12/25 0025
 * Time: 14:04
 */

namespace app\admin\controller;


use think\Controller;

class Other extends Controller
{

    public function index()
    {
        return $this->fetch();
    }
}