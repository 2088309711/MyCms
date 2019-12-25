<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/12/25 0025
 * Time: 13:52
 */

namespace app\admin\controller;


use think\Controller;

class NjClass extends Controller
{


    public function index()
    {
        return $this->fetch();
    }

}