<?php

use yii\helpers\Url;
use common\components\Helper;
use yii\widgets\LinkPager;


/* @var $this yii\web\View */

$this->title = 'BT电影天堂-迅雷BT种子下载|高清电影下载';
?>
<div class="list_so">
  <h1>关键词“<font color="red"><?= $word ?></font>”的搜索结果</h1>
  <?php if (empty($models)) {?>
  对不起，没有找到任何记录,<a target="_blank" href="gbook.php?key=">
  <font color="red"><b>请您在此留言</b></font></a>，我们尽快为你添加喜欢的电影
  <?php } else {
  foreach ($models as $model) {
      ?>
  <dl>
    <dt class="lf">
      <a class="so_pic" href="<?= Url::to(['screen/view', 'id' => $model->id]); ?>" title="<?= $model->name; ?>" target="_blank">
        <img class="lazy" data-src="<?= $model->list_pic; ?>" alt="<?= $model->name; ?>" src="<?= $model->list_pic; ?>" style="display: inline;">
        <span><?= $model->quality; ?></span></a>
    </dt>
    <dd class="lf">
      <p>名称：
        <strong>
          <a href="<?= Url::to(['screen/view', 'id' => $model->id]) ?>" title="<?= $model->name ?>" target="_blank"><?= $model->name ?></a></strong>
        <span><?= $model->type . ' ' .$model->quality; ?></span></p>
      <p>上映时间：<?= $model->play_time ?> / 地区：<?= $model->location ?></p>
      <p>主演：<?php foreach (explode(',', $model->star) as $value) {?>
            <a href="<?= Url::to(['screen/search', 'word' => $value]) ?>"><?= $value; ?></a>&nbsp;/&nbsp;
          <?php }?></p>
      <p>简介：<?= Helper::truncate_utf8_string($model->description, 200); ?></p>
    </dd>
  </dl>
  <?php }}?>
</div>
<?php 
// 显示分页
echo LinkPager::widget([
    'options' => ['class' => 'pages'],
    'pagination' => $pages,
    'firstPageLabel' => '首页',
    'prevPageLabel' => '《',
    'nextPageLabel' => '》',
    'lastPageLabel' => '尾页',
]);
?>

