<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:69:"D:\php-workspace\MyCms/tp5/application/admin\view\template\index.html";i:1577257374;s:59:"D:\php-workspace\MyCms\tp5\application\admin\view\base.html";i:1577260328;s:67:"D:\php-workspace\MyCms\tp5\application\admin\view\nav_template.html";i:1577258204;}*/ ?>
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
                    <dd><a href="">安全设置</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item"><a href="">退出</a></li>
        </ul>
    </div>

    <div id="main-nav" data-switch="1" class="layui-side layui-bg-black">
        <div class="layui-side-scroll">
            <ul class="layui-nav layui-nav-tree" lay-filter="test">
                <li class="layui-nav-item"><a href=""> 查看标签语法 </a></li>
<li class="layui-nav-item"><a href=""> 自动生成标签 </a></li>
<li class="layui-nav-item"><a href=""> 动态页面模板管理 </a></li>


<li class="layui-nav-item">
    <a href="javascript:;"> 首页模板 </a>
    <dl class="layui-nav-child">
        <dd><a href=""> 首页模板 </a></dd>
        <dd><a href=""> 管理首页方案 </a></dd>


    </dl>
</li>


<li class="layui-nav-item">
    <a href="javascript:;"> 封面模板 </a>
    <dl class="layui-nav-child">
        <dd><a href=""> 管理封面模板分类 </a></dd>
        <dd><a href=""> 管理封面模板 </a></dd>


    </dl>
</li>


<li class="layui-nav-item">
    <a href="javascript:;"> 列表模板 </a>
    <dl class="layui-nav-child">
        <dd><a href=""> 管理列表模板分类 </a></dd>
        <dd><a href=""> 管理列表模板 </a></dd>


    </dl>
</li>


<li class="layui-nav-item">
    <a href="javascript:;"> 内容模板 </a>
    <dl class="layui-nav-child">
        <dd><a href=""> 管理内容模板分类 </a></dd>
        <dd><a href=""> 管理内容模板 </a></dd>


    </dl>
</li>


<li class="layui-nav-item">
    <a href="javascript:;"> 搜索模板 </a>
    <dl class="layui-nav-child">
        <dd><a href=""> 管理搜索模板分类 </a></dd>
        <dd><a href=""> 管理搜索模板 </a></dd>


    </dl>
</li>


<li class="layui-nav-item">
    <a href="javascript:;"> 标签模板 </a>
    <dl class="layui-nav-child">
        <dd><a href=""> 管理标签模板分类 </a></dd>
        <dd><a href=""> 管理标签模板 </a></dd>


    </dl>
</li>


<li class="layui-nav-item">
    <a href="javascript:;"> 公共模板变量 </a>
    <dl class="layui-nav-child">
        <dd><a href=""> 管理模板变量分类 </a></dd>
        <dd><a href=""> 管理模板变量 </a></dd>


    </dl>
</li>


<li class="layui-nav-item">
    <a href="javascript:;"> 公共模板 </a>
    <dl class="layui-nav-child">
        <dd><a href=""> 控制面板模板 </a></dd>
        <dd><a href=""> 全站搜索模板 </a></dd>
        <dd><a href=""> 高级搜索表单模板 </a></dd>
        <dd><a href=""> 横向搜索JS模板 </a></dd>
        <dd><a href=""> 纵向搜索JS模板 </a></dd>
        <dd><a href=""> 相关信息模板 </a></dd>
        <dd><a href=""> 留言板模板 </a></dd>
        <dd><a href=""> 评论JS调用模板 </a></dd>
        <dd><a href=""> 最终下载页模板 </a></dd>
        <dd><a href=""> 下载地址模板 </a></dd>
        <dd><a href=""> 在线播放地址模板 </a></dd>
        <dd><a href=""> 列表分页模板 </a></dd>
        <dd><a href=""> 登陆状态模板 </a></dd>
        <dd><a href=""> JS调用登陆模板 </a></dd>
    </dl>
</li>


<li class="layui-nav-item">
    <a href="javascript:;"> JS模板 </a>
    <dl class="layui-nav-child">
        <dd><a href=""> 管理JS模板分类 </a></dd>
        <dd><a href=""> 管理JS模板 </a></dd>


    </dl>
</li>


<li class="layui-nav-item">
    <a href="javascript:;"> 评论列表模板 </a>
    <dl class="layui-nav-child">
        <dd><a href=""> 增加评论模板 </a></dd>
        <dd><a href=""> 管理评论模板 </a></dd>


    </dl>
</li>


<li class="layui-nav-item">
    <a href="javascript:;"> 打印模板 </a>
    <dl class="layui-nav-child">
        <dd><a href=""> 增加打印模板 </a></dd>
        <dd><a href=""> 管理打印模板 </a></dd>


    </dl>
</li>


<li class="layui-nav-item">
    <a href="javascript:;"> 自定义页面模板 </a>
    <dl class="layui-nav-child">
        <dd><a href=""> 增加自定义页面模板 </a></dd>
        <dd><a href=""> 管理自定义页面模板 </a></dd>


    </dl>
</li>


<li class="layui-nav-item">
    <a href="javascript:;"> 投票模板 </a>
    <dl class="layui-nav-child">
        <dd><a href=""> 增加投票模板 </a></dd>
        <dd><a href=""> 管理投票模板 </a></dd>


    </dl>
</li>


<li class="layui-nav-item">
    <a href="javascript:;"> 标签 </a>
    <dl class="layui-nav-child">
        <dd><a href=""> 管理标签分类 </a></dd>
        <dd><a href=""> 管理标签 </a></dd>


    </dl>
</li>


<li class="layui-nav-item">
    <a href="javascript:;"> 模板组管理 </a>
    <dl class="layui-nav-child">
        <dd><a href=""> 修改模板ID </a></dd>
        <dd><a href=""> 导入/导出模板组 </a></dd>


    </dl>
</li>


<li class="layui-nav-item">
    <a href="javascript:;"> 其他相关 </a>
    <dl class="layui-nav-child">
        <dd><a href=""> 批量导入栏目模板 </a></dd>
        <dd><a href=""> 批量更换列表模板 </a></dd>
        <dd><a href=""> 批量替换模板字符 </a></dd>


    </dl>
</li>








            </ul>
        </div>
    </div>

    
<div id="main-content" class="layui-body" style="bottom:0;">temp</div>


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