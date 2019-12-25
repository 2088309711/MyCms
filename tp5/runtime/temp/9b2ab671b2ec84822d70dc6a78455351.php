<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:66:"D:\php-workspace\MyCms/tp5/application/admin\view\index\index.html";i:1577184497;s:59:"D:\php-workspace\MyCms\tp5\application\admin\view\base.html";i:1577184846;s:61:"D:\php-workspace\MyCms\tp5\application\admin\view\left_2.html";i:1577181363;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>柠吉CMS</title>
    <link rel="stylesheet" href="/statics/layui/css/layui.css">
    <style>
        #nav-switch {
            width: 45px;
            height: 45px;
            position: absolute;
            top: 0;
            left: 140px;
            padding: 15px 0 0 15px;
        }

        #nav-switch i {
            font-size: 30px;
            color: #bdbec0;
        }
    </style>
</head>
<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">
    <div class="layui-header">
        <div class="layui-logo" style="width:140px;">柠吉CMS</div>
        <div id="nav-switch">
            <i class="layui-icon layui-icon-shrink-right"></i>
        </div>

        <ul class="layui-nav layui-layout-left">
            <li class="layui-nav-item"><a href="">
                <i class="layui-icon layui-icon-engine"></i> 系统</a></li>
            <li class="layui-nav-item"><a href="/index.php/info">
                <i class="layui-icon layui-icon-form"></i> 信息</a></li>
            <li class="layui-nav-item"><a href="">
                <i class="layui-icon layui-icon-tabs"></i> 栏目</a></li>
            <li class="layui-nav-item"><a href="">
                <i class="layui-icon layui-icon-template"></i> 模板</a></li>
            <li class="layui-nav-item"><a href="">
                <i class="layui-icon layui-icon-user"></i> 用户</a></li>
            <li class="layui-nav-item"><a href="">
                <i class="layui-icon layui-icon-component"></i> 插件</a></li>
            <li class="layui-nav-item"><a href="">
                <i class="layui-icon layui-icon-cart"></i> 商城</a></li>
            <li class="layui-nav-item"><a href="">
                <i class="layui-icon layui-icon-app"></i> 其他</a></li>
        </ul>
        <ul class="layui-nav layui-layout-right">
            <li class="layui-nav-item">
                <a href="javascript:;">
                    <i class="layui-icon layui-icon-username"></i>
                    贤心
                </a>
                <dl class="layui-nav-child">
                    <dd><a href="">基本资料</a></dd>
                    <dd><a href="">安全设置</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item"><a href="">退出</a></li>
        </ul>
    </div>

    <div id="main-nav" data-switch="1" class="layui-side layui-bg-black">
        <div class="layui-side-scroll">
            <ul class="layui-nav layui-nav-tree" lay-filter="test">
                <li class="layui-nav-item layui-nav-itemed">
    <a class="" href="javascript:;">所有商品</a>
    <dl class="layui-nav-child">
        <dd><a href="javascript:;">列表一</a></dd>
        <dd><a href="javascript:;">列表二</a></dd>
        <dd><a href="javascript:;">列表三</a></dd>
        <dd><a href="">超链接</a></dd>
    </dl>
</li>
<li class="layui-nav-item">
    <a href="javascript:;">解决方案</a>
    <dl class="layui-nav-child">
        <dd><a href="javascript:;">列表一</a></dd>
        <dd><a href="javascript:;">列表二</a></dd>
        <dd><a href="">超链接</a></dd>
    </dl>
</li>
<li class="layui-nav-item"><a href="">云市场</a></li>
<li class="layui-nav-item"><a href="">发布商品</a></li>````````````````````
            </ul>
        </div>
    </div>

    
<div id="main-content" class="layui-body layui-bg-gray" style="bottom:0;">

    <div style="padding: 15px;">

        <h1 style="text-align: center; margin-bottom: 10px;">您好，欢迎使用柠吉网站管理系统(NJCMS)！</h1>

        <div class="layui-card">
            <div class="layui-card-header"><strong>我的状态</strong></div>
            <div class="layui-card-body">
                登录者：123456，所属用户组：超级管理员<br>
                这是您第 13 次登录，上次登录时间：2019-12-24 12:46:32 ，登录IP：127.0.0.1:49610
            </div>
        </div>


        <div class="layui-card">
            <div class="layui-card-header"><strong>快捷菜单</strong></div>
            <div class="layui-card-body">


                <div style="margin-bottom: 10px;">
                    <span>信息操作：</span>
                    <div class="layui-btn-group">
                        <a href="#" type="button" class="layui-btn layui-btn-primary">增加信息</a>
                        <a href="#" type="button" class="layui-btn layui-btn-primary">管理信息</a>
                        <a href="#" type="button" class="layui-btn layui-btn-primary">审核信息</a>
                        <a href="#" type="button" class="layui-btn layui-btn-primary">签发信息</a>
                        <a href="#" type="button" class="layui-btn layui-btn-primary">管理评论</a>
                        <a href="#" type="button" class="layui-btn layui-btn-primary">更新碎片</a>
                        <a href="#" type="button" class="layui-btn layui-btn-primary">更新专题</a>
                        <a href="#" type="button" class="layui-btn layui-btn-primary">数据统计</a>

                    </div>
                </div>


                <div style="margin-bottom: 10px;">
                    <span>栏目操作：</span>
                    <div class="layui-btn-group">
                        <a href="#" type="button" class="layui-btn layui-btn-primary">管理栏目</a>
                        <a href="#" type="button" class="layui-btn layui-btn-primary">管理专题</a>
                        <a href="#" type="button" class="layui-btn layui-btn-primary">管理采集</a>
                        <a href="#" type="button" class="layui-btn layui-btn-primary">管理附件</a>
                        <a href="#" type="button" class="layui-btn layui-btn-primary">系统参数设置</a>
                        <a href="#" type="button" class="layui-btn layui-btn-primary">数据更新中心</a>


                    </div>
                </div>


                <div style="margin-bottom: 10px;">
                    <span>用户操作：</span>
                    <div class="layui-btn-group">
                        <a href="#" type="button" class="layui-btn layui-btn-primary">审核会员</a>
                        <a href="#" type="button" class="layui-btn layui-btn-primary">管理会员</a>
                        <a href="#" type="button" class="layui-btn layui-btn-primary">管理登录日志</a>
                        <a href="#" type="button" class="layui-btn layui-btn-primary">管理操作日志</a>
                        <a href="#" type="button" class="layui-btn layui-btn-primary">修改个人资料</a>
                        <a href="#" type="button" class="layui-btn layui-btn-primary">用户发布统计</a>
                    </div>
                </div>


                <div style="margin-bottom: 5px;">
                    <span>反馈管理：</span>
                    <div class="layui-btn-group">
                        <a href="#" type="button" class="layui-btn layui-btn-primary">管理留言</a>
                        <a href="#" type="button" class="layui-btn layui-btn-primary">管理反馈信息</a>
                        <a href="#" type="button" class="layui-btn layui-btn-primary">管理错误报告</a>
                        <a href="#" type="button" class="layui-btn layui-btn-primary">管理订单</a>
                        <a href="#" type="button" class="layui-btn layui-btn-primary">管理支付记录</a>
                        <a href="#" type="button" class="layui-btn layui-btn-primary">查看目录权限状态</a>

                    </div>
                </div>


            </div>
        </div>


        <div class="layui-card">
            <div class="layui-card-header"><strong>系统信息</strong></div>
            <div class="layui-card-body">


                <table class="layui-table" style="margin: 0;" lay-skin="nob">

                    <tr>
                        <th colspan="2"><strong>网站信息</strong></th>
                        <th colspan="2"><strong>服务器信息</strong></th>
                    </tr>

                    <tr>
                        <td>会员注册：</td>
                        <td>开启</td>
                        <td>服务器软件：</td>
                        <td>Apache/2.4.23 (Win32) OpenSSL/1.0.2j mod_fcgid/2.3.9</td>
                    </tr>


                    <tr>
                        <td>会员投稿：</td>
                        <td>关闭</td>
                        <td>操作系统：</td>
                        <td>WINNT</td>
                    </tr>


                    <tr>
                        <td>管理员个数：</td>
                        <td><a href="user/ListUser.php?ehash_kVM8H=NNosqbNY6q7AZKK8npfu">1</a> 人</td>
                        <td>PHP版本：</td>
                        <td>7.0.12</td>
                    </tr>


                    <tr>
                        <td>未审核评论：</td>
                        <td>
                            <a href="openpage/AdminPage.php?leftfile=..%2Fpl%2FPlNav.php%3Fehash_kVM8H%3DNNosqbNY6q7AZKK8npfu&mainfile=..%2Fpl%2FListAllPl.php%3Fchecked%3D2%26ehash_kVM8H%3DNNosqbNY6q7AZKK8npfu&title=%E7%AE%A1%E7%90%86%E8%AF%84%E8%AE%BA&ehash_kVM8H=NNosqbNY6q7AZKK8npfu">0</a>
                            条
                        </td>
                        <td>MYSQL版本：</td>
                        <td>5.5.53</td>
                    </tr>


                    <tr>
                        <td>未审核会员：</td>
                        <td>
                            <a href="member/ListMember.php?sear=1&schecked=1&ehash_kVM8H=NNosqbNY6q7AZKK8npfu">0</a>
                            人
                        </td>
                        <td>全局变量：</td>
                        <td>关闭（建议关闭）</td>
                    </tr>


                    <tr>
                        <td>过期广告：</td>
                        <td><a href="tool/ListAd.php?time=1&ehash_kVM8H=NNosqbNY6q7AZKK8npfu">0</a>
                            个
                        </td>
                        <td>魔术引用：</td>
                        <td>关闭（建议开启）</td>
                    </tr>


                    <tr>
                        <td>登陆者IP：</td>
                        <td>127.0.0.1</td>
                        <td>上传文件：</td>
                        <td>可以（最大文件：2M，表单：8M）</td>
                    </tr>


                    <tr>
                        <td>程序版本：</td>
                        <td><a href="http://www.phome.net" target="_blank">NJCMS
                            v7.5 Free</a> (201804091030)
                        </td>
                        <td>当前时间：</td>
                        <td>2019-12-24 17:56:42</td>
                    </tr>

                    <tr>
                        <td>程序编码：</td>
                        <td>UTF-8</td>
                        <td>使用域名：</td>
                        <td>mycms.com</td>
                    </tr>

                </table>

            </div>
        </div>

    </div>

</div>


</div>
<script src="/statics/layui/layui.js"></script>
<script>
    layui.use(['element', 'jquery'], function () {
        var element = layui.element;
        var $ = layui.jquery;
        $(function () {
            $('#nav-switch').click(function () {
                var icon = $(this).children('i'), nav = $('#main-nav'), content = $('#main-content');
                if (nav.data('switch') == 1) {
                    nav.data('switch', 0);
                    content.animate({'left': 0});
                    nav.animate({'left': -200, opacity: 0});
                    icon.removeClass('layui-icon-shrink-right').addClass('layui-icon-spread-left');
                } else {
                    nav.data('switch', 1);
                    content.animate({'left': 200});
                    nav.animate({'left': 0, opacity: 1});
                    icon.removeClass('layui-icon-spread-left').addClass('layui-icon-shrink-right');
                }
            });
        })
    });
</script>
</body>
</html>