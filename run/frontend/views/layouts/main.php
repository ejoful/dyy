<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="keywords" content="BT电影天堂,迅雷电影,迅雷种子,高清电影,电影下载,BT种子">
    <meta name="description" content="BT电影天堂网(www.btbtdy.com)为广大影迷朋友们提供最新最热门的迅雷电影下载。我们专注于高清电影下载服务，全力打造优秀的BT种子、迅雷种子下载网站！ ">
    <script type="text/javascript">
    delete window.document.referrer;
    window.document.__defineGetter__('referrer', function () {
        return "";
    });</script>
    <script type="text/javascript">if (/Android|webOS|iPhone|iPod|iPad|Windows Phone|BlackBerry|Mobile/i.test(navigator.userAgent)) {
        var url = window.location.pathname + window.location.search;
        window.location.href = 'http://m.btbtdy.com' + url;
      };
      var sitePath = '';</script>
      <script type="text/javascript" src="//cdn.staticfile.org/jquery/1.7.2/jquery.min.js"></script>
    <style id="style-1-cropbar-clipper">/* Copyright 2014 Evernote Corporation. All rights reserved. */ .en-markup-crop-options { top: 18px !important; left: 50% !important; margin-left: -100px !important; width: 200px !important; border: 2px rgba(255,255,255,.38) solid !important; border-radius: 4px !important; } .en-markup-crop-options div div:first-of-type { margin-left: 0px !important; }</style>
 </head>
<body>
<?php $this->beginBody() ?>
<div id="myModal" class="reveal-modal">
      <b style="font-size:20px">公告</b>
      <br>
      <p style="font-size:14px">为防止主域名被封,本站启用备用域名 www.btbtdy.net 若主域名长时间无法正常打开请使用备用域名.</p>
      <a class="close-reveal-modal">×</a></div>
    <script type="text/javascript" src="/statics/js/v1(1)"></script>
    <script type="text/javascript" src="/statics/js/v1(2)"></script>
    <link rel="shortcut icon" type="image/x-ico" href="http://www.btbtdy.com/favicon.ico">
    <div class="head">
      <div class="head_inner">
        <div class="head00">
          <h1>
            <a href="http://www.btbtdy.com/" title="BT电影天堂-迅雷BT种子下载|高清电影下载" class="head01 lf">BT电影天堂</a></h1>
          <div class="lf head_so">
            <form id="formsearch" method="get" action="http://www.btbtdy.com/s.php" autocomplete="off" class="searchform">
              <input class="searchinput lf" type="text" id="keyword" name="word" placeholder="请输入关键词" value="" autocomplete="off">
              <input id="searchbtn" type="submit" value="搜索" class="searchbtn lf"></form>
          </div>
          <div class="head_rt">
            <ul>
              <li>
                <a href="http://www.btbtdy.com/gbook.php">
                  <i class="i1"></i>留言</a>
              </li>
              <li>
                <a href="http://www.btbtdy.com/help.html">
                  <i class="i2"></i>帮助</a>
              </li>
              <li style="border:1px;">
                <a id="translateLink" href="javascript:translatePage();" title="点击切换简繁语言">
                  <i class="i3"></i>繁體</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="head_inner2">
        <div class="head02 lf">
          <ul>
            <li>
              <a href="/">首页</a></li>
            <li>
              <a href="<?= Url::to(['screen/index']) ?>">电影</a></li>
            <li>
              <a href="http://www.btbtdy.com/btfl/dy30.html">电视剧</a></li>
            <li>
              <a href="http://www.btbtdy.com/btfl/dy34.html">动漫</a></li>
            <li>
              <a href="http://www.btbtdy.com/btfl/dy29.html">蓝光原盘</a></li>
            <li>
              <a href="http://www.btbtdy.com/btfl/dy28.html">3D电影</a></li>
            <li>
              <a href="<?= Url::to(['tag/new']) ?>">最新</a></li>
            <li>
              <a href="<?= Url::to(['tag/hot']) ?>">排行</a></li>
            <li>
              <a href="http://www.btbtdy.com/previews.html#today">更新表</a></li>
            <li>
              <a href="<?= Url::to(['tag/topic']) ?>">专题</a></li>
            <li>
              <a href="<?= Url::to(['tag/yun']) ?>">云点播</a></li>
            <li>
              <a href="http://www.btbtdy.com/#" class="big-link" data-reveal-id="myModal" data-animation="none">备用域名</a></li>
            <li id="ad">
              <a href="http://www.btbtdy.com/#">广告设置</a>
              <ul id="ads">
                <i class="s01"></i>
                <li id="close_btn2">开启广告</li>您已成功关闭本站广告</ul></li>
          </ul>
          <span id="seacms_member">
            <div class="login">
              <a href="http://www.btbtdy.com/login.php" style="margin-right:10px;">登录</a>
              <i class="s02"></i>
              <a href="http://www.btbtdy.com/reg.php">注册</a></div>
          </span>
          <script>member()</script></div>
      </div>
</div>

        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>

<!-- asid start -->
    <div class="asid_share" id="asid_share">
      <div class="asid_share_box relative">
        <a href="http://www.btbtdy.com/gbook.php">
          <img alt="我有话说" title="我有话说" class="adid_icon" src="/statics/images/icon_say.png"></a>
      </div>
      <div class="asid_share_box relative">
        <a href="http://www.btbtdy.com/help.html">
          <img alt="新手帮助" title="新版帮助" class="adid_icon" src="/statics/images/icon_help.png"></a>
      </div>
      <div class="asid_share_box relative" style="display: block;">
        <a href="http://www.btbtdy.com/#">
          <img alt="返回顶部" title="返回顶部" class="adid_icon" src="/statics/images/icon_back.png"></a>
      </div>
    </div>
    <script type="text/javascript">$(function() {
        $('#asid_share').hhShare({
          cenBox: 'asid_share_box',
          icon: 'adid_icon',
          addClass: 'red_bag',
          titleClass: 'asid_title',
          triangle: 'asid_share_triangle',
          showBox: 'asid_sha_layer'
        });
      });</script>
    <!-- asid end -->
    <div class="foot">
      <div class="foot_inner">
        <br>免责声明：本站所有资源均收集自互联网，没有提供影片资源存储，也未参与录制、上传。若本站收录的资源涉及您的版权或知识产权或其他利益，请附上版权证明邮件告知，我们会尽快确认后作出删除等处理措施。
        <br>Copyright © 2017 [
        <a href="http://www.btbtdy.com/">BT电影天堂</a>] 管理员邮箱：btbtdycom#mail.com(#=@)
        <br></div></div>
    <script type="text/javascript" src="/statics/js/v1(3)"></script>
    <script type="text/javascript" src="/statics/js/v1(4)"></script>
    <!-- 统计代码 开始 -->
    <script>var _hmt = _hmt || []; (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?99249fb41a838398a3cc1c3ad2258fe7";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
      })();</script>
    <!-- 统计代码 结束 -->
    <script type="text/javascript" src="/statics/js/v1(5)"></script>
    <script type="text/javascript">var params = {
        "XOffset": 0,
        "YOffset": 0,
        "fontColor": "#444",
        "fontColorHI": "#000",
        "fontSize": "14px",
        "fontFamily": "arial",
        "borderColor": "gray",
        "bgcolorHI": "#ebebeb",
        "sugSubmit": true
      };
      BaiduSuggestion.bind("keyword", params);
      $(function() {
        $("img.lazy").lazyload({
          effect: "show"
        })
      });
      //var width=document.documentElement.clientWidth;if(width<1449){document.writeln('')}else if(width>1450){document.writeln('<script src="http://www.btbtdy.com/js/go/s29779"><\/script>')};
      document.getElementById('formsearch').onsubmit = function() {
        var keyword = encodeURIComponent(document.getElementById('keyword').value);
        window.location = '/search/' + keyword + '.html';
        return false;
        return false;
      }</script>
    <iframe class="bdSug_sd" style="display: none; position: absolute; border-width: 0px;" src="./BT电影天堂-迅雷BT种子下载_高清电影下载_files/saved_resource.html"></iframe>
    <div id="bdSug_1" class="bdSug_wpr" style="display: none;"></div>
    <script type="text/javascript">$(".cts").slide({
        effect: "fold",
        autoPlay: false,
        switchLoad: "data-original",
        delayTime: 0
      });</script>
    <script type="text/javascript" src="/statics/js/v1(6)"></script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
