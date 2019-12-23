<?php
if (!defined('InEmpireCMS')) {
    exit();
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>菜单</title>
    <link rel="stylesheet" href="/statics/layui/css/layui.css">
    <style>
        .layui-layout-admin .layui-side {
            top: 0;
        }
    </style>
</head>
<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">


    <div class="layui-side layui-bg-black">
        <div class="layui-side-scroll">

            <ul class="layui-nav layui-nav-tree" lay-filter="test">


                <?
                if ($r[dopublic] || $r[dofirewall] || $r[dosetsafe] || $r[dopubvar]) {
                    ?>


                    <li class="layui-nav-item">
                        <a class="" href="javascript:;">系统设置</a>
                        <dl class="layui-nav-child">


                            <?
                            if ($r[dopublic]) {
                                ?>

                                <dd><a href="../../SetEnews.php<?= $ecms_hashur['whehref'] ?>" target="main">系统参数设置</a>
                                </dd>
                                <dd><a href="../../pub/SetRewrite.php<?= $ecms_hashur['whehref'] ?>" target="main">伪静态参数设置</a>
                                </dd>
                                <dd><a href="../../pub/SetPageCache.php<?= $ecms_hashur['whehref'] ?>" target="main">动态页缓存设置</a>
                                </dd>
                                <dd><a href="../../pub/SetDigg.php<?= $ecms_hashur['whehref'] ?>"
                                       target="main">DIGG顶设置</a></dd>


                                <?
                            }
                            if ($r[dopubvar]) {
                                ?>


                                <dd><a href="../../pub/ListPubVar.php<?= $ecms_hashur['whehref'] ?>"
                                       target="main">扩展变量</a></dd>


                                <?
                            }
                            if ($r[dosetsafe]) {
                                ?>


                                <dd><a href="../../pub/SetSafe.php<?= $ecms_hashur['whehref'] ?>"
                                       target="main">安全参数配置</a></dd>


                                <?
                            }
                            if ($r[dofirewall]) {
                                ?>

                                <dd><a href="../../pub/SetFirewall.php<?= $ecms_hashur['whehref'] ?>" target="main">网站防火墙</a>
                                </dd>

                                <?
                            }
                            ?>


                        </dl>
                    </li>


                    <?
                }
                ?>

                <?
                if ($r[dochangedata] || $r[dopostdata]) {
                    ?>


                    <li class="layui-nav-item">
                        <a class="" href="javascript:;">数据更新</a>
                        <dl class="layui-nav-child">


                            <?
                            if ($r[dochangedata]) {
                                ?>

                                <dd><a href="../../ReHtml/ChangeData.php<?= $ecms_hashur['whehref'] ?>"
                                       target="main">数据更新中心</a></dd>
                                <dd><a href="../../ReHtml/ReInfoUrl.php<?= $ecms_hashur['whehref'] ?>"
                                       target="main">更新信息页地址</a></dd>
                                <dd><a href="../../ReHtml/ChangePageCache.php<?= $ecms_hashur['whehref'] ?>"
                                       target="main">更新动态页缓存</a></dd>
                                <dd><a href="../../ReHtml/DoUpdateData.php<?= $ecms_hashur['whehref'] ?>"
                                       target="main">数据整理</a></dd>


                                <?
                            }
                            if ($r[dopostdata]) {
                                ?>

                                <dd><a href="../../PostUrlData.php<?= $ecms_hashur['whehref'] ?>" target="main">远程发布</a>
                                </dd>


                                <?
                            }
                            ?>


                        </dl>
                    </li>


                    <?
                }
                ?>

                <?
                if ($r[dof] || $r[dom] || $r[dotable]) {
                    ?>


                    <li class="layui-nav-item">
                        <a class="" href="javascript:;">数据表与系统模型</a>
                        <dl class="layui-nav-child">

                            <dd><a href="../../db/AddTable.php?enews=AddTable<?= $ecms_hashur['ehref'] ?>"
                                   target="main"
                                >新建数据表</a></dd>
                            <dd><a href="../../db/ListTable.php<?= $ecms_hashur['whehref'] ?>" target="main"
                                >管理数据表</a></dd>
                        </dl>
                    </li>


                    <?
                }
                ?>

                <?
                if ($r[dodo] || $r[dotask]) {
                    ?>


                    <li class="layui-nav-item">
                        <a class="" href="javascript:;">计划任务</a>
                        <dl class="layui-nav-child">


                            <?
                            if ($r[dodo]) {
                                ?>
                                <dd><a href="../../ListDo.php<?= $ecms_hashur['whehref'] ?>" target="main"
                                    >管理刷新任务</a></dd>


                                <?
                            }
                            if ($r[dotask]) {
                                ?>


                                <dd><a href="../../other/ListTask.php<?= $ecms_hashur['whehref'] ?>"
                                       target="main"
                                    >管理计划任务</a></dd>


                                <?
                            }
                            ?>


                        </dl>
                    </li>


                    <?
                }
                ?>

                <?
                if ($r[doworkflow]) {
                    ?>


                    <li class="layui-nav-item">
                        <a class="" href="javascript:;">工作流</a>
                        <dl class="layui-nav-child">

                            <dd><a href="../../workflow/AddWf.php?enews=AddWorkflow<?= $ecms_hashur['ehref'] ?>"
                                   target="main">增加工作流</a></dd>
                            <dd><a href="../../workflow/ListWf.php<?= $ecms_hashur['whehref'] ?>" target="main"
                                >管理工作流</a></dd>


                        </dl>
                    </li>


                    <?
                }
                ?>

                <?
                if ($r[doyh]) {
                    ?>


                    <li class="layui-nav-item">
                        <a class="" href="javascript:;">优化方案</a>
                        <dl class="layui-nav-child">

                            <dd><a href="../../db/ListYh.php<?= $ecms_hashur['whehref'] ?>" target="main"
                                >管理优化方案</a></dd>

                        </dl>
                    </li>


                    <?
                }
                ?>

                <?php
                if ($r['domoreport']) {
                    ?>


                    <li class="layui-nav-item">
                        <a class="" href="javascript:;">网站多访问端</a>
                        <dl class="layui-nav-child">

                            <dd><a href="../../moreport/ListMoreport.php<?= $ecms_hashur['whehref'] ?>"
                                   target="main"
                                >管理网站访问端</a></dd>

                        </dl>
                    </li>


                    <?
                }
                ?>

                <?
                if ($r[domenu]) {
                    ?>


                    <li class="layui-nav-item">
                        <a class="" href="javascript:;">扩展菜单</a>
                        <dl class="layui-nav-child">

                            <dd><a href="../../other/MenuClass.php<?= $ecms_hashur['whehref'] ?>" target="main"
                                >管理菜单</a></dd>

                        </dl>
                    </li>


                    <?
                }
                ?>

                <?
                if ($r[dodbdata] || $r[doexecsql]) {
                    ?>


                    <li class="layui-nav-item">
                        <a class="" href="javascript:;">备份与恢复数据</a>
                        <dl class="layui-nav-child">


                            <?
                            if ($r[dodbdata]) {
                                ?>


                                <dd><a href="../../ebak/ChangeDb.php<?= $ecms_hashur['whehref'] ?>"
                                       target="main"
                                    >备份数据</a></dd>
                                <dd><a href="../../ebak/ReData.php<?= $ecms_hashur['whehref'] ?>" target="main"
                                    >恢复数据</a></dd>
                                <dd><a href="../../ebak/ChangePath.php<?= $ecms_hashur['whehref'] ?>"
                                       target="main"
                                    >管理备份目录</a></dd>


                                <?
                            }
                            if ($r[doexecsql]) {
                                ?>

                                <dd><a href="../../db/DoSql.php<?= $ecms_hashur['whehref'] ?>" target="main"
                                    >执行SQL语句</a></dd>


                                <?
                            }
                            ?>


                        </dl>
                    </li>


                    <?
                }
                ?>

            </ul>
        </div>
    </div>


</div>
<script src="/statics/layui/layui.js"></script>
<script>
    //JavaScript代码区域
    layui.use('element');
</script>
</body>
</html>

