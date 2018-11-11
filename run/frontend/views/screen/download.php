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
        <li>
          <a title="艾克斯奥特曼[22-彩虹色的大地][1.0GB]" href="/down/6220-0-0.html" target="_blank" class="ico_1">艾克斯奥特曼[22-彩虹色的大地][1.0GB]
            <span class="bt">详情</span></a>
          <span>
            <a class="d1" href="magnet:?xt=urn:btih:c29e2f0622772a88d54b3e5adaa7a8c2b60c497c">磁力</a></span>
        </li>
        <li>
          <a title="艾克斯奥特曼[21-凄美终焉][454.5MB]" href="/down/6220-0-1.html" target="_blank" class="ico_1">艾克斯奥特曼[21-凄美终焉][454.5MB]
            <span class="bt">详情</span></a>
          <span>
            <a class="d1" href="magnet:?xt=urn:btih:73d38a819f2d64efae859ad1cd213ff14ec3d68e">磁力</a></span>
        </li>
        <li>
          <a title="艾克斯奥特曼[20-纽带 一体化][993.3MB]" href="/down/6220-0-2.html" target="_blank" class="ico_1">艾克斯奥特曼[20-纽带 一体化][993.3MB]
            <span class="bt">详情</span></a>
          <span>
            <a class="d1" href="magnet:?xt=urn:btih:5441f4c2d0a65eb1141ce11a6105e706193e83ef">磁力</a></span>
        </li>
        <li>
          <a title="艾克斯奥特曼[19-共同生存][493.3MB]" href="/down/6220-0-3.html" target="_blank" class="ico_1">艾克斯奥特曼[19-共同生存][493.3MB]
            <span class="bt">详情</span></a>
          <span>
            <a class="d1" href="magnet:?xt=urn:btih:39b8c40792d72aaa1bcb3a1b363b14245a2de843">磁力</a></span>
        </li>
        <li>
          <a title="艾克斯奥特曼[18-渡的恋情][515MB]" href="/down/6220-0-4.html" target="_blank" class="ico_1">艾克斯奥特曼[18-渡的恋情][515MB]
            <span class="bt">详情</span></a>
          <span>
            <a class="d1" href="magnet:?xt=urn:btih:24d6c8a8be58349b20b55ea3810881b96d167aed">磁力</a></span>
        </li>
        <li>
          <a title="艾克斯奥特曼[17-朋友是怪兽][558.9MB]" href="/down/6220-0-5.html" target="_blank" class="ico_1">艾克斯奥特曼[17-朋友是怪兽][558.9MB]
            <span class="bt">详情</span></a>
          <span>
            <a class="d1" href="magnet:?xt=urn:btih:9994d019dac44ce46b4ec96327cd8c32b2d7dd1f">磁力</a></span>
        </li>
        <li>
          <a title="艾克斯奥特曼[16-直击!深入Xio24小时][382.3MB]" href="/down/6220-0-6.html" target="_blank" class="ico_1">艾克斯奥特曼[16-直击!深入Xio24小时][382.3MB]
            <span class="bt">详情</span></a>
          <span>
            <a class="d1" href="magnet:?xt=urn:btih:675840cf660b6f7f82054714eb87704232156de3">磁力</a></span>
        </li>
        <li>
          <a title="艾克斯奥特曼[15-战士的背脊][399.8MB]" href="/down/6220-0-7.html" target="_blank" class="ico_1">艾克斯奥特曼[15-战士的背脊][399.8MB]
            <span class="bt">详情</span></a>
          <span>
            <a class="d1" href="magnet:?xt=urn:btih:0a2c27f96c9abc9274fd644f092779d158d2cc3f">磁力</a></span>
        </li>
        <li>
          <a title="艾克斯奥特曼[14.5-超越极限的胜利之光][14V2][846MB]" href="/down/6220-0-8.html" target="_blank" class="ico_1">艾克斯奥特曼[14.5-超越极限的胜利之光][14V2][846MB]
            <span class="bt">详情</span></a>
          <span>
            <a class="d1" href="magnet:?xt=urn:btih:f3b48d3037155c5be115b2a8c9375159d7ff5c49">磁力</a></span>
        </li>
        <li>
          <a title="艾克斯奥特曼[14-闪照天空 连接大地][419.3MB]" href="/down/6220-0-9.html" target="_blank" class="ico_1">艾克斯奥特曼[14-闪照天空 连接大地][419.3MB]
            <span class="bt">详情</span></a>
          <span>
            <a class="d1" href="magnet:?xt=urn:btih:b9e6aa4cd14f6177b28e0fc208042d75c984279d">磁力</a></span>
        </li>
        <li>
          <a title="艾克斯奥特曼[13-通往胜利的剑刃][419.3MB]" href="/down/6220-0-10.html" target="_blank" class="ico_1">艾克斯奥特曼[13-通往胜利的剑刃][419.3MB]
            <span class="bt">详情</span></a>
          <span>
            <a class="d1" href="magnet:?xt=urn:btih:25e8cb77566c9f74e04a4165d338c6aae0aba693">磁力</a></span>
        </li>
        <li>
          <a title="艾克斯奥特曼[12-彩虹尽头][419.1MB]" href="/down/6220-0-11.html" target="_blank" class="ico_1">艾克斯奥特曼[12-彩虹尽头][419.1MB]
            <span class="bt">详情</span></a>
          <span>
            <a class="d1" href="magnet:?xt=urn:btih:2a17bae3e6ba809ec5505eb62ba925f075d01d70">磁力</a></span>
        </li>
        <li>
          <a title="艾克斯奥特曼[11-未知的友人][419.9MB]" href="/down/6220-0-12.html" target="_blank" class="ico_1">艾克斯奥特曼[11-未知的友人][419.9MB]
            <span class="bt">详情</span></a>
          <span>
            <a class="d1" href="magnet:?xt=urn:btih:8593909af4976b2e8be3af4529fc911dae367e61">磁力</a></span>
        </li>
        <li>
          <a title="艾克斯奥特曼[10-扎根的怪兽][419.6MB]" href="/down/6220-0-13.html" target="_blank" class="ico_1">艾克斯奥特曼[10-扎根的怪兽][419.6MB]
            <span class="bt">详情</span></a>
          <span>
            <a class="d1" href="magnet:?xt=urn:btih:67c46718624080affa535428895ede62dc17c674">磁力</a></span>
        </li>
        <li>
          <a title="艾克斯奥特曼[09-我等乃星云][419.5MB]" href="/down/6220-0-14.html" target="_blank" class="ico_1">艾克斯奥特曼[09-我等乃星云][419.5MB]
            <span class="bt">详情</span></a>
          <span>
            <a class="d1" href="magnet:?xt=urn:btih:1169c19f2c8c98a8c6ac72ea338ddbe8f43c2039">磁力</a></span>
        </li>
        <li>
          <a title="艾克斯奥特曼[08-被盯梢的艾克斯][418.6MB]" href="/down/6220-0-15.html" target="_blank" class="ico_1">艾克斯奥特曼[08-被盯梢的艾克斯][418.6MB]
            <span class="bt">详情</span></a>
          <span>
            <a class="d1" href="magnet:?xt=urn:btih:7c897540a6b4022cf0c9782650eac749d0827ca9">磁力</a></span>
        </li>
        <li>
          <a title="艾克斯奥特曼[07-跨越星际的誓言][419.1MB]" href="/down/6220-0-16.html" target="_blank" class="ico_1">艾克斯奥特曼[07-跨越星际的誓言][419.1MB]
            <span class="bt">详情</span></a>
          <span>
            <a class="d1" href="magnet:?xt=urn:btih:cf7ed44031b029796971b9ecc60c5e2c907cc08c">磁力</a></span>
        </li>
        <li>
          <a title="艾克斯奥特曼[06-拥有星之记忆的男子][419.1MB]" href="/down/6220-0-17.html" target="_blank" class="ico_1">艾克斯奥特曼[06-拥有星之记忆的男子][419.1MB]
            <span class="bt">详情</span></a>
          <span>
            <a class="d1" href="magnet:?xt=urn:btih:1751ad19763c5c20f6fc0c3796b3e84902e43a34">磁力</a></span>
        </li>
        <li>
          <a title="艾克斯奥特曼[05-圣盾闪光之时][431.8MB]" href="/down/6220-0-18.html" target="_blank" class="ico_1">艾克斯奥特曼[05-圣盾闪光之时][431.8MB]
            <span class="bt">详情</span></a>
          <span>
            <a class="d1" href="magnet:?xt=urn:btih:d1f77fd47ca9b25524993ddd5a5671c0e3a476f9">磁力</a></span>
        </li>
        <li>
          <a title="艾克斯奥特曼[04-All For One][427.6MB]" href="/down/6220-0-19.html" target="_blank" class="ico_1">艾克斯奥特曼[04-All For One][427.6MB]
            <span class="bt">详情</span></a>
          <span>
            <a class="d1" href="magnet:?xt=urn:btih:f97db92ebf4bc0c7b3aedcf83715b7a6091a0041">磁力</a></span>
        </li>
        <li>
          <a title="艾克斯奥特曼[03-唤夜之歌][419.2MB]" href="/down/6220-0-20.html" target="_blank" class="ico_1">艾克斯奥特曼[03-唤夜之歌][419.2MB]
            <span class="bt">详情</span></a>
          <span>
            <a class="d1" href="magnet:?xt=urn:btih:45d584eeffcfa636a15228b0f985801e0a9720eb">磁力</a></span>
        </li>
        <li>
          <a title="艾克斯奥特曼[02-无数的可能性][419.1MB]" href="/down/6220-0-21.html" target="_blank" class="ico_1">艾克斯奥特曼[02-无数的可能性][419.1MB]
            <span class="bt">详情</span></a>
          <span>
            <a class="d1" href="magnet:?xt=urn:btih:ff319dcd1c88ff8d69434fe795275e843839d863">磁力</a></span>
        </li>
        <li>
          <a title="艾克斯奥特曼[02-无数的可能性][419MB]" href="/down/6220-0-22.html" target="_blank" class="ico_1">艾克斯奥特曼[02-无数的可能性][419MB]
            <span class="bt">详情</span></a>
          <span>
            <a class="d1" href="magnet:?xt=urn:btih:ac9b4b178a0a63fd983f2227e23f559139d4fa13">磁力</a></span>
        </li>
        <li>
          <a title="艾克斯奥特曼[01-星空之声][418.6MB]" href="/down/6220-0-23.html" target="_blank" class="ico_1">艾克斯奥特曼[01-星空之声][418.6MB]
            <span class="bt">详情</span></a>
          <span>
            <a class="d1" href="magnet:?xt=urn:btih:0d4f0d0da60b344c9403335f45be0dd1f1c3107e">磁力</a></span>
        </li>
      </ul>
    </div>
  </div>
  <div class="side rt" style="width:195px;line-height:22px;">
    <a href="/btdy/dy6220.html">
      <img width="100%" src="http://gif-china.cc/uploads/allimg/201608/d416365ef058a606.jpg?h=250" alt="艾克斯奥特曼"></a>
    <p>主演：
      <a href="/search/%E9%AB%98%E6%A9%8B%E5%81%A5%E4%BB%8B.html">高橋健介</a>&nbsp;/&nbsp;
      <a href="/search/%E5%9D%82%E3%83%8E%E4%B8%8A%E8%8C%9C.html">坂ノ上茜</a>&nbsp;/&nbsp;
      <a href="/search/%E7%B4%B0%E7%94%B0%E5%96%84%E5%BD%A6.html">細田善彦</a>&nbsp;/&nbsp;
      <a href="/search/%E6%9D%BE%E6%9C%AC%E4%BA%AB%E6%81%AD.html">松本享恭</a>&nbsp;/&nbsp;
      <a href="/search/%E6%9C%88%E8%88%B9%E3%81%95%E3%82%89%E3%82%89.html">月船さらら</a></p>
    <br>简介：
    <p>有关本剧的情报并不多，不过有消息源指出，该剧类似《银河奥特曼》，即主角艾克斯奥特曼可以 使用其他奥特曼战士/怪兽的力量，不过区别点在于，主角艾克斯奥特曼可以借助特殊的卡牌使用其他奥特曼战士/怪兽的力量（类似银河奥特曼的火花软胶人偶超变身设定），比如艾克斯奥特曼能数码哥莫拉卡牌“合体，并且从海报的左上方我们能看到同数码哥莫拉卡牌“合体”的X奥特曼,看起来有机甲的视觉。</p>
  </div>
</div>













