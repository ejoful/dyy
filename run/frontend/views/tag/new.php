<?php

use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'BT电影天堂-迅雷BT种子下载|高清电影下载';
?>
<div class="topur">
  <div class="sides rt tp">
    <div class="p-side" id="top_rt" style="margin-top: 0px; margin-left: 0px; position: relative; top: 0px;">
      <div class="nav">
        <div id="navSelected" class="navSelected"></div>
        <ul id="nav">
          <li id="navCurr"><a href="<?= Url::to(['tag/new']) ?>">最新榜首页</a></li>
          <li><a href="<?= Url::to(['tag/new', 'type' => '电影']) ?>">最新电影</a></li>
          <li><a href="<?= Url::to(['tag/new', 'type' => '电视剧']) ?>">最新电视剧</a></li>
          <li><a href="<?= Url::to(['tag/new', 'type' => '动漫']) ?>">最新动漫</a></li>
          <li><a href="<?= Url::to(['tag/new', 'type' => '3D电影']) ?>">最新3D电影</a></li>
          <li><a href="<?= Url::to(['tag/new', 'type' => '蓝光原盘']) ?>">最新蓝光原盘</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="play">
    <div clss="daohang" id="daphang">当前位置：
      <a href="/">首页</a>&nbsp;&nbsp;»&nbsp;&nbsp;
      <a href="#">最新<?= $type; ?></a></div>
    <div class="p_listnew">
      <div class="c_2">
        <h1>最新<?= $type; ?></h1></div>
      <ul class="new-ul">
        <li class="li">
          <div class="tit">
            <p>资源名称</p>
          </div>
          <div class="year">
            <p>年代</p>
          </div>
          <div class="area">
            <p>地区</p>
          </div>
          <div class="score">
            <p>评分</p>
          </div>
          <div class="type">
            <p>类型</p>
          </div>
          <div class="starring">
            <p>主演</p>
          </div>
          <div class="timetit">
            <p>更新时间</p>
          </div>
        </li>
        <?php foreach ($new_models as $model) {?>
        <li class="li">
          <div class="name">
            <a style="color:green;font-weight:bold;" href="<?= Url::to(['screen/view', 'id' => $model->id]) ?>" title="<?= $model->name; ?>"><?= $model->name; ?></a>
            <!-- <em class="em">更至27集</em>  --></div>
          <div class="year"><?= $model->play_time; ?></div>
          <div class="area"><?= $model->location; ?></div>
          <div class="score"><?= $model->score; ?></div>
          <div class="type"><?= $model->type; ?></div>
          <div class="starring"><?= $model->star; ?></div>
          <div class="time"><?= $model->update_time; ?></div></li>
        <?php }?>
      </ul>
    </div>
  </div>
</div>