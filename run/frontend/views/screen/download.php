<?php

use yii\helpers\Url;
use yii\widgets\LinkPager;
/* @var $this yii\web\View */

$this->title = 'BT电影天堂-迅雷BT种子下载|高清电影下载';
$query_str = Yii::$app->getRequest()->queryString;
parse_str($query_str, $query_arr);

$params = [
    'type' => '',
    'category' => '',
    'play_time' => '',
    'location' => '',
    'language' => '',
];
$params = array_merge($params, $query_arr);
?>
<style>.video-down {
	height:100%;
	width:950px;
	background:#fff;
	padding:10px;
	padding-top:0px;
}
.video-down h2 {
	padding:10px;
}
.video-down p {
	font-size:14px;
	background-color:#d9edf7;
	padding:10px;
}
.down123 a {
	background:#48afff;
	color:#fff;
	margin-right:10px;
	padding:5px 10px;
}
.down123 a:link,.down123 a:visited {
	color:#fff
}
.side {
	background:#fff;
	padding:10px;
}
.prompt {
	font-size:14px;
	background-color:#ededed;
	padding:10px;
}
</style>
<div class="topur">
  <div class="daohang">当前位置：
    <a href="/">BT电影天堂</a>&nbsp;»&nbsp;
    <a href="<?= Url::to(['screen/index', 'type' => $film_model->type]) ?>"><?= $film_model->type ?></a>&nbsp;»&nbsp;
      <a href="<?= Url::to(['screen/view', 'id' => $film_model->id]) ?>"><?= $film_model->name ?></a></div>
  <p align="center"></p>
  <div class="video-down lf" id="video-down">
    <h2>资源名称</h2>
    <p><?= $download_model->name; ?></p>
    <h2>资源链接</h2>
    <p><?= $download_model->magnet_url; ?></p>
    <div class="down123" style="margin-top:15px;">
      <a href="<?= $download_model->magnet_url; ?>">磁力下载</a>
      <a href="<?= $download_model->xunlei_url; ?>">迅雷下载</a>
      <a href="<?= $download_model->xiaomi_url; ?>" target="_blank">小米路由</a></div>
    <h2>下载提示</h2>
    <div class="prompt">1. 本站建议下载使用专业BT软件下载电影，如：
      <a href="https://www.bitcomet.com/cn" target="_blank" rel="nofollow" style="color:#337ab7;">比特彗星</a>，
      <a href="http://www.bitspirit.cc" target="_blank" rel="nofollow" style="color:#337ab7;">比特精灵</a>，
      <a href="http://www.utorrent.com/intl/zh_cn/" target="_blank" rel="nofollow" style="color:#337ab7;">uTorrent</a>，
      <a href="https://www.qbittorrent.org/download.php" target="_blank" rel="nofollow" style="color:#337ab7;">qBittorrent</a>，
      <a href="http://www.xunlei.com/" target="_blank" rel="nofollow" style="color:#337ab7;">迅雷</a>等. 分享：
      <a href="http://www.xiaodao.la/sousuo.asp?SearchText=%D1%B8%C0%D7" target="_blank" rel="nofollow" style="color:#337ab7;">迅雷加速</a>-
      <a href="http://www.xiaodao.la/sousuo.asp?SearchText=%B0%D9%B6%C8%CD%F8%C5%CC" target="_blank" rel="nofollow" style="color:#337ab7;">网盘加速</a>.
      <br>2. 本站资源大多无字幕需要去专业字幕站下载字幕后,外挂字幕观看.如
      <a href="http://www.zimuku.cn/" target="_blank" rel="nofollow" style="color:#337ab7;">字幕库</a>，
      <a href="http://subhd.com/" target="_blank" rel="nofollow" style="color:#337ab7;">SubHD</a>等. 也可以使用
      <a href="https://www.splayer.org/" target="_blank" rel="nofollow" style="color:#337ab7;">射手影音</a>，
      <a href="http://video.xunlei.com/" target="_blank" rel="nofollow" style="color:#337ab7;">迅雷影音</a>等播放软件自动匹配字幕.</div>
    <h2>全部资源</h2>
    <div class="p_list" style="width:950px;">
      <ul class="p_list_02" style="width:950px;">
      <?php 
      foreach ($download_models as $value) {
      ?>
        <li>
          <a title="<?= $value->name; ?>" href="<?= Url::to(['screen/download', 'id' => $value->id]) ?>" target="_blank" class="ico_1"><?= $value->name; ?>
            <span class="bt">详情</span></a>
          <span>
            <a class="d1" href="<?= $value->magnet_url; ?>">磁力</a></span>
        </li>
      <?php }?>
      </ul>
    </div>
  </div>
  <div class="side rt" style="width:195px;line-height:22px;">
    <a href="/btdy/dy6220.html">
      <img width="100%" src="<?= $film_model->list_pic; ?>" alt="<?= $film_model->name ?>"></a>
    <p>主演：
    <?php foreach (explode(',', $film_model->star) as $value) {?>
            <a href="<?= Url::to(['screen/search', 'star' => $value]) ?>"><?= $value; ?></a>&nbsp;/&nbsp;
    <?php }?>
    <br>简介：
    <p><?= $film_model->descr; ?></p>
  </div>
</div>













