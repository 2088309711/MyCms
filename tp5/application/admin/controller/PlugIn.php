<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/12/25 0025
 * Time: 14:00
 */

namespace app\admin\controller;


use think\Controller;

class PlugIn extends Controller
{


    public function index()
    {
        return $this->fetch();
    }

}