<?php
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'BT电影天堂-迅雷BT种子下载|高清电影下载';
$this->registerCssFile('@web/statics/css/zt.css');
?>
<div class="zt_box">
  <div clss="daohang" id="daphang">当前位置：
    <a href="/">首页</a>&nbsp;&nbsp;»&nbsp;&nbsp;
    <a href="<?= Url::to(['tag/topic']) ?>">专题</a>&nbsp;&nbsp;»&nbsp;&nbsp;
    <h1>
      <a href="#"><?= $topic['name']; ?></a></h1>
    <div id="bdshare" style="float:right; margin-right:0px;" class="bdshare_t bds_tools_24 get-codes-bdshare">
      <a class="bds_qzone" title="分享到QQ空间" href="#"></a>
      <a class="bds_tqq" title="分享到腾讯微博" href="#"></a>
      <a class="bds_tsina" title="分享到新浪微博" href="#"></a>
      <a class="bds_renren" title="分享到人人网" href="#"></a>
      <a class="bds_tieba" title="分享到百度贴吧" href="#"></a>
      <span class="bds_more"></span>
      <a class="shareCount" href="#" title="累计分享0次">0</a></div>
  </div>
  <ul class="zt_box_ul">
  <?php foreach ($topic['films'] as $model) {?>
    <li style="background: rgb(255, 255, 255);">
      <span class="zt_1">
        <a href="<?= Url::to(['screen/view', 'id' => $model->id]) ?>" class="pic" target="_blank">
          <img src="<?= $model->list_pic; ?>" width="110" border="0" alt="<?= $model->name; ?>"></a>
      </span>
      <span class="zt_2">
        <span class="zt_2_1">
          <a href="<?= Url::to(['screen/view', 'id' => $model->id]) ?>" title="<?= $model->name; ?>BT下载" class="nn_blue" target="_blank"><?= $model->name; ?></a></span>
        <span class="zt_2_2"><?= $model->descr; ?></span></span>
    </li>
    <?php } ?>
  </ul>
  <!--zt_box end-->
  <div class="zt_list">
    <!-- 多说评论框 start -->
    <div class="ds-thread" data-thread-key="topic<?= $topic['id'] ?>" data-title="<?= $topic['name']; ?>-BT电影天堂" data-url="<?= Url::to(['topiclist/index','id'=>$topic['id']]) ?>" id="ds-thread">
      <div id="ds-waiting"></div>
    </div>
    <!-- 多说评论框 end -->
    <!-- 多说公共JS代码 start (一个网页只需插入一次) -->
    <script type="text/javascript">var duoshuoQuery = {
        short_name: "btdy"
      }; (function() {
        var ds = document.createElement('script');
        ds.type = 'text/javascript';
        ds.async = true;
        ds.src = (document.location.protocol == 'https:' ? 'https:': 'http:') + '/templets/btdy/js/embed.js?1';
        ds.charset = 'UTF-8'; (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ds);
      })();</script>
    <!-- 多说公共JS代码 end --></div>
</div>