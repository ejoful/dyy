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

<div class="list">
  <div class="s_index">
    <dl>
      <dt>选择类型：</dt>
      <dd>
      <?php 
      $type_str = '';
      foreach ($type_models as $film_type) {
          $url = Url::to(['screen/index',
              'type' => $film_type->value,
              'category' => $params['category'],
              'play_time' => $params['play_time'],
              'location' => $params['location'],
              'language' => $params['language'],
              
          ]);
          if (strcmp($params['type'],$film_type->value) == 0) {
              $type_str .= "<a class='current' target='_self' href='$url'>$film_type->name</a>";
          } else {
              $type_str .= "<a target='_self' href='$url'>$film_type->name</a>";
          }
      }
      echo $type_str;
      ?>
      </dd>
    </dl>
    <dl>
      <dt>选择分类：</dt>
      <dd>
      <?php 
      $url = Url::to(['screen/index',
          'type' => $params['type'],
          'category' => '',
          'play_time' => $params['play_time'],
          'location' => $params['location'],
          'language' => $params['language'],
      
      ]);
        if (strcmp($params['category'],'') == 0) {
              $category_str = "<a class='current' target='_self' href='$url'>全部</a>";
          } else {
              $category_str = "<a target='_self' href='$url'>全部</a>";
          }
      foreach ($category_arr as $category) {
          $url = Url::to(['screen/index',
              'type' => $params['type'],
              'category' => $category,
              'play_time' => $params['play_time'],
              'location' => $params['location'],
              'language' => $params['language'],
              
          ]);
          if (strcmp($params['category'],$category) == 0) {
              $category_str .= "<a class='current' target='_self' href='$url'>$category</a>";
          } else {
              $category_str .= "<a target='_self' href='$url'>$category</a>";
          }
      }
      echo $category_str;
      ?>
      </dd>
    </dl>
    <dl>
      <dt>选择年代：</dt>
      <dd>
      <?php 
      $url = Url::to(['screen/index',
          'type' => $params['type'],
          'category' => $params['category'],
          'play_time' => '',
          'location' => $params['location'],
          'language' => $params['language'],
      
      ]);
        if (strcmp($params['play_time'],'') == 0) {
              $pl_time_str = "<a class='current' target='_self' href='$url'>全部</a>";
          } else {
              $pl_time_str = "<a target='_self' href='$url'>全部</a>";
          }
      foreach ($play_time_arr as $item) {
          $url = Url::to(['screen/index',
              'type' => $params['type'],
              'category' => $params['category'],
              'play_time' => $item,
              'location' => $params['location'],
              'language' => $params['language'],
              
          ]);
          if (strcmp($params['play_time'],$item) == 0) {
              $pl_time_str .= "<a class='current' target='_self' href='$url'>$item</a>";
          } else {
              $pl_time_str .= "<a target='_self' href='$url'>$item</a>";
          }
      }
      echo $pl_time_str;
      ?>
      </dd>
    </dl>
    <dl>
      <dt>选择地区：</dt>
      <dd>
      <?php 
      $url = Url::to(['screen/index',
          'type' => $params['type'],
          'category' => $params['category'],
          'play_time' => $params['play_time'],
          'location' => '',
          'language' => $params['language'],
      
      ]);
        if (strcmp($params['location'],'') == 0) {
              $lo_time_str = "<a class='current' target='_self' href='$url'>全部</a>";
          } else {
              $lo_time_str = "<a target='_self' href='$url'>全部</a>";
          }
      foreach ($location_arr as $item) {
          $url = Url::to(['screen/index',
              'type' => $params['type'],
              'category' => $params['category'],
              'play_time' => $params['play_time'],
              'location' => $item,
              'language' => $params['language'],
              
          ]);
          if (strcmp($params['location'],$item) == 0) {
              $lo_time_str .= "<a class='current' target='_self' href='$url'>$item</a>";
          } else {
              $lo_time_str .= "<a target='_self' href='$url'>$item</a>";
          }
      }
      echo $lo_time_str;
      ?>
      </dd>
    </dl>
    <dl>
      <dt>选择语言：</dt>
      <dd>
      <?php 
      $url = Url::to(['screen/index',
          'type' => $params['type'],
          'category' => $params['category'],
          'play_time' => $params['play_time'],
          'location' => $params['location'],
          'language' => '',
      
      ]);
        if (strcmp($params['language'],'') == 0) {
              $lang_str = "<a class='current' target='_self' href='$url'>全部</a>";
          } else {
              $lang_str = "<a target='_self' href='$url'>全部</a>";
          }
      foreach ($language_arr as $item) {
          $url = Url::to(['screen/index',
              'type' => $params['type'],
              'category' => $params['category'],
              'play_time' => $params['play_time'],
              'location' => $params['location'],
              'language' => $item,
              
          ]);
          if (strcmp($params['language'],$item) == 0) {
              $lang_str .= "<a class='current' target='_self' href='$url'>$item</a>";
          } else {
              $lang_str .= "<a target='_self' href='$url'>$item</a>";
          }
      }
      echo $lang_str;
      ?>
    </dl>
    <dl>
      <dt>已选条件：</dt>
      <dd>
      <?php if (!empty($params['type'])) { ?>
        <a href="<?= Url::to(['screen/index',
              'type' => '',
              'category' => $params['category'],
              'play_time' => $params['play_time'],
              'location' => $params['location'],
              'language' => $params['language'],
              
          ]); ?>"><?= "类型: ".$params['type']." ×"; ?></a>
        <?php }?>
        <?php if (!empty($params['category'])) { ?>
        <a href="<?= Url::to(['screen/index',
              'type' => $params['type'],
              'category' => '',
              'play_time' => $params['play_time'],
              'location' => $params['location'],
              'language' => $params['language'],
              
          ]); ?>"><?= "分类: ".$params['category']." ×"; ?></a>
        <?php }?>
        <?php if (!empty($params['play_time'])) { ?>
        <a href="<?= Url::to(['screen/index',
              'type' => $params['type'],
              'category' => $params['category'],
              'play_time' => '',
              'location' => $params['location'],
              'language' => $params['language'],
              
          ]); ?>"><?= "年代: ".$params['play_time']." ×"; ?></a>
        <?php }?>
        <?php if (!empty($params['location'])) { ?>
        <a href="<?= Url::to(['screen/index',
              'type' => $params['type'],
              'category' => $params['category'],
              'play_time' => $params['play_time'],
              'location' => '',
              'language' => $params['language'],
              
          ]); ?>"><?= "地区: ".$params['location']." ×"; ?></a>
        <?php }?>
        <?php if (!empty($params['language'])) { ?>
        <a href="<?= Url::to(['screen/index',
              'type' => $params['type'],
              'category' => $params['category'],
              'play_time' => $params['play_time'],
              'location' => $params['location'],
              'language' => '',
              
          ]); ?>"><?= "语言: ".$params['language']." ×"; ?></a>
        <?php }?>
        <?php 
        if (empty(implode('',$params))) {?>
        条件为空
      <?php } else {?>
      <a href="<?= Url::to(['screen/index',
          'type' => '',
          'category' => '',
          'play_time' => '',
          'location' => '',
          'language' => '',
      
      ]); ?>">清除全部</a>
      <?php }?>
      </dd>
    </dl>
  </div>
</div>
<div class="list_su">
  <div class="down_top">
    <div class="dtop">筛选结果：共<span><?= $totalCount ?></span>条数据</div>
    </div>
  <ul>
  <?php 
  $str = '';
  foreach ($models as $model) {
      $str .= '<li>';
      $str .= '<div class="liimg">';
      $str .= "<a class='pic_link' href='".Url::to(['screen/view', 'id' => $model->id])."' title='$model->name' target='_blank'>";
      $str .= "<img class='lazy' data-src='$model->list_pic' alt='$model->name' src='$model->list_pic' style='display: inline;'>";
      $str .= "<span>$model->quality</span></a>";
      $str .= "</div>";
      $str .= "<div class='cts_ms'>";
      $str .= "<p class='title'>";
      $str .= "<a href='".Url::to(['screen/view', 'id' => $model->id])."' title='$model->name' target='_blank'>$model->name</a>";
      $str .= "<span>8.1</span></p>";
      $str .= "<p class='des'>$model->play_time $model->location $model->category</p></div>";
      $str .= "</li>";
  }
  echo $str;
  
  ?>
  </ul>
</div>
<?php 
// 显示分页
echo LinkPager::widget([
    'options' => ['class' => 'pages'],
    'pagination' => $pagination,
    'firstPageLabel' => '首页',
    'prevPageLabel' => '《',
    'nextPageLabel' => '》',
    'lastPageLabel' => '尾页',
]);
?>
<div class="pages">

