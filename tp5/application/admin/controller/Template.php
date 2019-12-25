<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/12/25 0025
 * Time: 13:53
 */

namespace app\admin\controller;


use think\Controller;

class Template extends Controller
{
    public function index()
    {
        return $this->fetch();
    }
}