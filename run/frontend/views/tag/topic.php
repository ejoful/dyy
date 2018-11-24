<?php

use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'BT电影天堂-迅雷BT种子下载|高清电影下载';
$this->registerCssFile('@web/statics/css/zt.css');
?>
<div class="si_map"></div>
<div class="si_main m10">
  <div class="p_list_list">
    <div class="p_list_list_b">
      <ul class="zt_list_ul">
      <?php foreach ($topiclist_model as $model) {?>
        <li style="background: rgb(255, 255, 227);">
          <span class="zt_list_1">
            <a href="<?= Url::to(['topiclist/index', 'id'=>$model->id]) ?>" class="zt_d" target="_blank">
              <img src="<?= $model->pic ?>" border="0" width="210" height="105"></a>
          </span>
          <span class="zt_list_2">
            <strong>
              <a href="<?= Url::to(['topiclist/index', 'id'=>$model->id]) ?>" target="_blank"><?= $model->name ?></a></strong>
          </span>
        </li>
        <?php }?>
      </ul>
      <div id="clear_div"></div>
    </div>
  </div>
</div>
<div class="si_map"></div>