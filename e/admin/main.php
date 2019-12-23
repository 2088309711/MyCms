<?php
define('EmpireCMSAdmin', '1');
require("../class/connect.php");
require("../class/db_sql.php");
require("../class/functions.php");
require("../member/class/user.php");
$link = db_connect();
$empire = new mysqlquery();
//验证用户
$lur = is_login();
$logininid = (int)$lur['userid'];
$loginin = $lur['username'];
$loginrnd = $lur['rnd'];
$loginlevel = (int)$lur['groupid'];
$loginadminstyleid = $lur['adminstyleid'];
//ehash
$ecms_hashur = hReturnEcmsHashStrAll();
//我的状态
$user_r = $empire->fetch1("select pretime,preip,loginnum,preipport from {$dbtbpre}enewsuser where userid='$logininid'");
$gr = $empire->fetch1("select groupname from {$dbtbpre}enewsgroup where groupid='$loginlevel'");
//管理员统计
$adminnum = $empire->gettotal("select count(*) as total from {$dbtbpre}enewsuser");
$date = date("Y-m-d");
$noplnum = $empire->gettotal("select count(*) as total from {$dbtbpre}enewspl_" . $public_r['pldeftb'] . " where checked=1");
//未审核会员
$nomembernum = $empire->gettotal("select count(*) as total from " . eReturnMemberTable() . " where " . egetmf('checked') . "=0");
//过期广告
$outtimeadnum = $empire->gettotal("select count(*) as total from {$dbtbpre}enewsad where endtime<'$date' and endtime<>'0000-00-00'");
//签发信息
$qfinfonum = $empire->gettotal("select count(*) as total from {$dbtbpre}enewswfinfo where checktno=0 and (groupid like '%," . $lur['groupid'] . ",%' or userclass like '%," . $lur['classid'] . ",%' or username like '%," . $lur['username'] . ",%')");
//系统信息
if (function_exists('ini_get')) {
    $onoff = ini_get('register_globals');
} else {
    $onoff = get_cfg_var('register_globals');
}
if ($onoff) {
    $onoff = "打开";
} else {
    $onoff = "关闭";
}
if (function_exists('ini_get')) {
    $upload = ini_get('file_uploads');
} else {
    $upload = get_cfg_var('file_uploads');
}
if ($upload) {
    $upload = "可以";
} else {
    $upload = "不可以";
}
if (function_exists('ini_get')) {
    $uploadsize = ini_get('upload_max_filesize');
} else {
    $uploadsize = get_cfg_var('upload_max_filesize');
}
if (function_exists('ini_get')) {
    $uploadpostsize = ini_get('post_max_size');
} else {
    $uploadpostsize = get_cfg_var('post_max_size');
}
//开启
$register_ok = "开启";
if ($public_r[register_ok]) {
    $register_ok = "关闭";
}
$addnews_ok = "开启";
if ($public_r[addnews_ok]) {
    $addnews_ok = "关闭";
}
//版本
@include("../class/EmpireCMS_version.php");
?>


    <!DOCTYPE html>
    <html lang="zh-cn">

    <head>
        <title>柠吉内容管理系统(NJCMS)</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/statics/pintuer/css/pintuer.css">
        <script src="/statics/pintuer/js/jquery.js"></script>
        <script src="/statics/pintuer/js/pintuer.js"></script>
        <script src="/statics/pintuer/js/respond.js"></script>
    </head>

    <body>
    <div class="container-layout">
        <h1 class="text-center padding-top">
            您好，欢迎使用柠吉网站管理系统(NJCMS)！
        </h1>


        <div class="panel margin-top">
            <div class="panel-head">我的状态</div>
            <div class="panel-body">

                <p class="margin-little-bottom">

                    登录者：<?= $loginin ?>，所属用户组：<?= $gr[groupname] ?>

                    <br>这是您第 <?= $user_r[loginnum] ?>
                    次登录，上次登录时间：<?= $user_r[pretime] ? date('Y-m-d H:i:s', $user_r[pretime]) : '---' ?>
                    ，登录IP：<?= $user_r[preip] ? $user_r[preip] . ':' . $user_r[preipport] : '---' ?>

                </p>
            </div>
        </div>


        <div class="panel margin-top">
            <div class="panel-head">快捷菜单</div>
            <div class="panel-body">


                <div>
                    信息操作：
                    <div class="button-group">


                        <a class="button" href="AddInfoChClass.php<?= $ecms_hashur['whehref'] ?>">增加信息</a>

                        <a class="button" href="ListAllInfo.php<?= $ecms_hashur['whehref'] ?>">管理信息</a>
                        <a class="button" href="ListAllInfo.php?ecmscheck=1<?= $ecms_hashur['ehref'] ?>">审核信息</a>
                        <a class="button" href="workflow/ListWfInfo.php<?= $ecms_hashur['whehref'] ?>">签发信息 <span
                                    class="badge bg-yellow"><?= $qfinfonum ?></span></a>
                        <a class="button"
                           href="openpage/AdminPage.php?leftfile=<?= urlencode('../pl/PlNav.php' . $ecms_hashur['whehref']) ?>&mainfile=<?= urlencode('../pl/PlMain.php' . $ecms_hashur['whehref']) ?>&title=<?= urlencode('管理评论') ?><?= $ecms_hashur['ehref'] ?>">管理评论</a>
                        <a class="button" href="sp/UpdateSp.php<?= $ecms_hashur['whehref'] ?>">更新碎片</a>
                        <a class="button" href="special/UpdateZt.php<?= $ecms_hashur['whehref'] ?>">更新专题</a>
                        <a class="button" href="info/InfoMain.php<?= $ecms_hashur['whehref'] ?>">数据统计</a>


                    </div>
                </div>


                <div class="margin-top">
                    栏目操作：
                    <div class="button-group">


                        <a class="button" href="ListClass.php<?= $ecms_hashur['whehref'] ?>">管理栏目</a>
                        <a class="button" href="special/ListZt.php<?= $ecms_hashur['whehref'] ?>">管理专题</a>
                        <a class="button" href="ListInfoClass.php<?= $ecms_hashur['whehref'] ?>">管理采集</a>
                        <a class="button"
                           href="openpage/AdminPage.php?leftfile=<?= urlencode('../file/FileNav.php' . $ecms_hashur['whehref']) ?>&title=<?= urlencode('管理附件') ?><?= $ecms_hashur['ehref'] ?>">附件管理</a>
                        <a class="button" href="SetEnews.php<?= $ecms_hashur['whehref'] ?>">系统参数设置</a>
                        <a class="button" href="ReHtml/ChangeData.php<?= $ecms_hashur['whehref'] ?>">数据更新中心</a>


                    </div>
                </div>


                <div class="margin-top">
                    用户操作：
                    <div class="button-group">


                        <a class="button" href="member/ListMember.php?sear=1&schecked=1<?= $ecms_hashur['ehref'] ?>">审核会员</a>
                        <a class="button" href="member/ListMember.php<?= $ecms_hashur['whehref'] ?>">管理会员</a>
                        <a class="button" href="user/ListLog.php<?= $ecms_hashur['whehref'] ?>">管理登陆日志</a>
                        <a class="button" href="user/ListDolog.php<?= $ecms_hashur['whehref'] ?>">管理操作日志</a>
                        <a class="button" href="user/EditPassword.php<?= $ecms_hashur['whehref'] ?>">修改个人资料</a>
                        <a class="button" href="user/UserTotal.php<?= $ecms_hashur['whehref'] ?>">用户发布统计</a>


                    </div>
                </div>


                <div class="margin-top">
                    反馈管理：
                    <div class="button-group">


                        <a class="button" href="tool/gbook.php<?= $ecms_hashur['whehref'] ?>">管理留言</a>
                        <a class="button" href="tool/feedback.php<?= $ecms_hashur['whehref'] ?>">管理反馈信息</a>
                        <a class="button" href="DownSys/ListError.php<?= $ecms_hashur['whehref'] ?>">管理错误报告</a>
                        <a class="button" href="#empirecms"
                           onclick="window.open('openpage/AdminPage.php?leftfile=<?= urlencode('../ShopSys/pageleft.php' . $ecms_hashur['whehref']) ?>&mainfile=<?= urlencode('../ShopSys/ListDd.php' . $ecms_hashur['whehref']) ?>&title=<?= urlencode('商城系统管理') ?><?= $ecms_hashur['ehref'] ?>','AdminShopSys','');">管理订单</a>
                        <a class="button" href="pay/ListPayRecord.php<?= $ecms_hashur['whehref'] ?>">管理支付记录</a>
                        <a class="button" href="PathLevel.php<?= $ecms_hashur['whehref'] ?>">查看目录权限状态</a>


                    </div>
                </div>


            </div>
        </div>


        <div class="panel margin-top margin-bottom">
            <div class="panel-head">系统信息</div>
            <div class="panel-body">


                <table class="table">

                    <tr>
                        <th colspan="2">网站信息</th>

                        <th colspan="2">服务器信息</th>

                    </tr>


                    <tr>
                        <td>会员注册：</td>
                        <td><?= $register_ok ?></td>
                        <td>服务器软件：</td>
                        <td><?= $_SERVER['SERVER_SOFTWARE'] ?></td>
                    </tr>


                    <tr>
                        <td>会员投稿：</td>
                        <td><?= $addnews_ok ?></td>
                        <td>操作系统：</td>
                        <td><? echo defined('PHP_OS') ? PHP_OS : '未知'; ?></td>
                    </tr>


                    <tr>
                        <td>管理员个数：</td>
                        <td><a href="user/ListUser.php<?= $ecms_hashur['whehref'] ?>"><?= $adminnum ?></a> 人</td>
                        <td>PHP版本：</td>
                        <td><? echo @phpversion(); ?></td>
                    </tr>


                    <tr>
                        <td>未审核评论：</td>
                        <td>
                            <a href="openpage/AdminPage.php?leftfile=<?= urlencode('../pl/PlNav.php' . $ecms_hashur['whehref']) ?>&mainfile=<?= urlencode('../pl/ListAllPl.php?checked=2' . $ecms_hashur['ehref']) ?>&title=<?= urlencode('管理评论') ?><?= $ecms_hashur['ehref'] ?>"><?= $noplnum ?></a>
                            条
                        </td>
                        <td>MYSQL版本：</td>
                        <td><? echo do_eGetDBVer(0); ?></td>
                    </tr>


                    <tr>
                        <td>未审核会员：</td>
                        <td>
                            <a href="member/ListMember.php?sear=1&schecked=1<?= $ecms_hashur['ehref'] ?>"><?= $nomembernum ?></a>
                            人
                        </td>
                        <td>全局变量：</td>
                        <td><?= $onoff ?>（建议关闭）</td>
                    </tr>


                    <tr>
                        <td>过期广告：</td>
                        <td><a href="tool/ListAd.php?time=1<?= $ecms_hashur['ehref'] ?>"><?= $outtimeadnum ?></a>
                            个
                        </td>
                        <td>魔术引用：</td>
                        <td><?= MAGIC_QUOTES_GPC ? '开启' : '关闭' ?>（建议开启）</td>
                    </tr>


                    <tr>
                        <td>登陆者IP：</td>
                        <td><? echo egetip(); ?></td>
                        <td>上传文件：</td>
                        <td><?= $upload ?>（最大文件：<?= $uploadsize ?>，表单：<?= $uploadpostsize ?>）</td>
                    </tr>


                    <tr>
                        <td>程序版本：</td>
                        <td><a href="http://www.phome.net" target="_blank">NJCMS
                                v<?= EmpireCMS_VERSION ?> Free</a> (<?= EmpireCMS_LASTTIME ?>)
                        </td>
                        <td>当前时间：</td>
                        <td><? echo date("Y-m-d H:i:s"); ?></td>
                    </tr>

                    <tr>
                        <td>程序编码：</td>
                        <td><?= EmpireCMS_CHARVER ?></td>
                        <td>使用域名：</td>
                        <td><?= $_SERVER['HTTP_HOST'] ?></td>
                    </tr>

                </table>

            </div>
        </div>

    </div>

    </body>
    </html>

<?php
db_close();
$empire = null;
?>