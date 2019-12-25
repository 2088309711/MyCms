<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/12/25 0025
 * Time: 14:03
 */

namespace app\admin\controller;


use think\Controller;

class ShoppingMall extends Controller
{

    public function index()
    {
        return $this->fetch();
    }

}