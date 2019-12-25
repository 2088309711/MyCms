<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:74:"D:\php-workspace\MyCms/tp5/application/admin\view\shopping_mall\index.html";i:1577255304;s:59:"D:\php-workspace\MyCms\tp5\application\admin\view\base.html";i:1577255049;s:67:"D:\php-workspace\MyCms\tp5\application\admin\view\nav_nj_class.html";i:1577249756;}*/ ?>
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
            <li class="layui-nav-item"><a href="/index.php/system">
                <i class="layui-icon layui-icon-engine"></i> 系统</a></li>
            <li class="layui-nav-item"><a href="/index.php/info">
                <i class="layui-icon layui-icon-form"></i> 信息</a></li>
            <li class="layui-nav-item"><a href="/index.php/class">
                <i class="layui-icon layui-icon-tabs"></i> 栏目</a></li>
            <li class="layui-nav-item"><a href="/index.php/template">
                <i class="layui-icon layui-icon-template"></i> 模板</a></li>
            <li class="layui-nav-item"><a href="/index.php/user_manage">
                <i class="layui-icon layui-icon-user"></i> 用户</a></li>
            <li class="layui-nav-item"><a href="/index.php/plug_in">
                <i class="layui-icon layui-icon-component"></i> 插件</a></li>
            <li class="layui-nav-item"><a href="/index.php/shopping_mall">
                <i class="layui-icon layui-icon-cart"></i> 商城</a></li>
            <li class="layui-nav-item"><a href="/index.php/other">
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
                <li class="layui-nav-item">
    <a class="" href="javascript:;">系统设置</a>
    <dl class="layui-nav-child">


        <dd><a href="../../SetEnews.php?ehash_kVM8H=NNosqbNY6q7AZKK8npfu" target="main">系统参数设置</a>
        </dd>
        <dd><a href="../../pub/SetRewrite.php?ehash_kVM8H=NNosqbNY6q7AZKK8npfu" target="main">伪静态参数设置</a>
        </dd>
        <dd><a href="../../pub/SetPageCache.php?ehash_kVM8H=NNosqbNY6q7AZKK8npfu" target="main">动态页缓存设置</a>
        </dd>
        <dd><a href="../../pub/SetDigg.php?ehash_kVM8H=NNosqbNY6q7AZKK8npfu"
               target="main">DIGG顶设置</a></dd>


        <dd><a href="../../pub/ListPubVar.php?ehash_kVM8H=NNosqbNY6q7AZKK8npfu"
               target="main">扩展变量</a></dd>


        <dd><a href="../../pub/SetSafe.php?ehash_kVM8H=NNosqbNY6q7AZKK8npfu"
               target="main">安全参数配置</a></dd>


        <dd><a href="../../pub/SetFirewall.php?ehash_kVM8H=NNosqbNY6q7AZKK8npfu" target="main">网站防火墙</a>
        </dd>


    </dl>
</li>


<li class="layui-nav-item">
    <a class="" href="javascript:;">数据更新</a>
    <dl class="layui-nav-child">


        <dd><a href="../../ReHtml/ChangeData.php?ehash_kVM8H=NNosqbNY6q7AZKK8npfu"
               target="main">数据更新中心</a></dd>
        <dd><a href="../../ReHtml/ReInfoUrl.php?ehash_kVM8H=NNosqbNY6q7AZKK8npfu"
               target="main">更新信息页地址</a></dd>
        <dd><a href="../../ReHtml/ChangePageCache.php?ehash_kVM8H=NNosqbNY6q7AZKK8npfu"
               target="main">更新动态页缓存</a></dd>
        <dd><a href="../../ReHtml/DoUpdateData.php?ehash_kVM8H=NNosqbNY6q7AZKK8npfu"
               target="main">数据整理</a></dd>


        <dd><a href="../../PostUrlData.php?ehash_kVM8H=NNosqbNY6q7AZKK8npfu" target="main">远程发布</a>
        </dd>


    </dl>
</li>


<li class="layui-nav-item">
    <a class="" href="javascript:;">数据表与系统模型</a>
    <dl class="layui-nav-child">

        <dd><a href="../../db/AddTable.php?enews=AddTable&ehash_kVM8H=NNosqbNY6q7AZKK8npfu"
               target="main"
        >新建数据表</a></dd>
        <dd><a href="../../db/ListTable.php?ehash_kVM8H=NNosqbNY6q7AZKK8npfu" target="main"
        >管理数据表</a></dd>
    </dl>
</li>


<li class="layui-nav-item">
    <a class="" href="javascript:;">计划任务</a>
    <dl class="layui-nav-child">


        <dd><a href="../../ListDo.php?ehash_kVM8H=NNosqbNY6q7AZKK8npfu" target="main"
        >管理刷新任务</a></dd>


        <dd><a href="../../other/ListTask.php?ehash_kVM8H=NNosqbNY6q7AZKK8npfu"
               target="main"
        >管理计划任务</a></dd>


    </dl>
</li>


<li class="layui-nav-item">
    <a class="" href="javascript:;">工作流</a>
    <dl class="layui-nav-child">

        <dd><a href="../../workflow/AddWf.php?enews=AddWorkflow&ehash_kVM8H=NNosqbNY6q7AZKK8npfu"
               target="main">增加工作流</a></dd>
        <dd><a href="../../workflow/ListWf.php?ehash_kVM8H=NNosqbNY6q7AZKK8npfu" target="main"
        >管理工作流</a></dd>


    </dl>
</li>


<li class="layui-nav-item">
    <a class="" href="javascript:;">优化方案</a>
    <dl class="layui-nav-child">

        <dd><a href="../../db/ListYh.php?ehash_kVM8H=NNosqbNY6q7AZKK8npfu" target="main"
        >管理优化方案</a></dd>

    </dl>
</li>


<li class="layui-nav-item">
    <a class="" href="javascript:;">网站多访问端</a>
    <dl class="layui-nav-child">

        <dd><a href="../../moreport/ListMoreport.php?ehash_kVM8H=NNosqbNY6q7AZKK8npfu"
               target="main"
        >管理网站访问端</a></dd>

    </dl>
</li>


<li class="layui-nav-item">
    <a class="" href="javascript:;">扩展菜单</a>
    <dl class="layui-nav-child">

        <dd><a href="../../other/MenuClass.php?ehash_kVM8H=NNosqbNY6q7AZKK8npfu" target="main"
        >管理菜单</a></dd>

    </dl>
</li>


<li class="layui-nav-item">
    <a class="" href="javascript:;">备份与恢复数据</a>
    <dl class="layui-nav-child">


        <dd><a href="../../ebak/ChangeDb.php?ehash_kVM8H=NNosqbNY6q7AZKK8npfu"
               target="main"
        >备份数据</a></dd>
        <dd><a href="../../ebak/ReData.php?ehash_kVM8H=NNosqbNY6q7AZKK8npfu" target="main"
        >恢复数据</a></dd>
        <dd><a href="../../ebak/ChangePath.php?ehash_kVM8H=NNosqbNY6q7AZKK8npfu"
               target="main"
        >管理备份目录</a></dd>


        <dd><a href="../../db/DoSql.php?ehash_kVM8H=NNosqbNY6q7AZKK8npfu" target="main"
        >执行SQL语句</a></dd>


    </dl>
</li>


            </ul>
        </div>
    </div>

    
<div id="main-content" class="layui-body" style="bottom:0;">shop</div>


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