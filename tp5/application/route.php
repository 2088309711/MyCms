<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------


use think\Route;


Route::get([
    '/' => 'index/index/index',
    'nav' => 'index/index/nav',
    'download' => 'index/index/download',
    'loader_help' => 'index/index/loaderHelp',
    'video_play/:id' => 'index/index/videoPlay',
    'download_loader' => 'index/index/downloadLoader',
    'add' => 'red_pack/index/add',
    'query' => 'red_pack/index/index',
    'login' => 'red_pack/index/login',
    'delete/:id' => 'red_pack/index/delete',
    'update/:id' => 'red_pack/index/update',
    'list_news' => 'admin/Info/news',
    'list_news_get_data' => 'admin/Info/getData',
    'info' => 'admin/Info/index',
    'admin_login' => 'admin/Login/index',
    'admin' => 'admin/Index/index',
    'system' => 'admin/System/index',
    'class' => 'admin/NjClass/index',
    'template' => 'admin/Template/index',
    'user_manage' => 'admin/UserManage/index',
    'plug_in' => 'admin/PlugIn/index',
    'shopping_mall' => 'admin/ShoppingMall/index',
    'other' => 'admin/Other/index',
]);

Route::post([
    'query' => 'red_pack/index/index',
    'add' => 'red_pack/index/add',
    'login' => 'red_pack/index/login',
    'delete' => 'red_pack/index/delete',
    'update' => 'red_pack/index/update',
    'admin_login' => 'admin/login/index',
]);


return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]' => [
        ':id' => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],

];


