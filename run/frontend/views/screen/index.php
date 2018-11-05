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
        <a target="_self" href="/screen/1-----time-1.html">全部</a>
        <a class="current" target="_self" href="/screen/1--2017---time-1.html">2017</a>
        <a target="_self" href="/screen/1--2016---time-1.html">2016</a>
        <a target="_self" href="/screen/1--2015---time-1.html">2015</a>
        <a target="_self" href="/screen/1--2014---time-1.html">2014</a>
        <a target="_self" href="/screen/1--2013---time-1.html">2013</a>
        <a target="_self" href="/screen/1--2012---time-1.html">2012</a>
        <a target="_self" href="/screen/1--2011---time-1.html">2011</a>
        <a target="_self" href="/screen/1--2010---time-1.html">2010</a>
        <a target="_self" href="/screen/1--2009---time-1.html">2009</a>
        <a target="_self" href="/screen/1--2008---time-1.html">2008</a>
        <a target="_self" href="/screen/1--2007---time-1.html">2007</a>
        <a target="_self" href="/screen/1--2006---time-1.html">2006</a>
        <a target="_self" href="/screen/1--2005---time-1.html">2005</a>
        <a target="_self" href="/screen/1--2004---time-1.html">2004</a>
        <a target="_self" href="/screen/1--2003---time-1.html">2003</a>
        <a target="_self" href="/screen/1--%E6%9B%B4%E6%97%A9---time-1.html">更早</a></dd>
    </dl>
    <dl>
      <dt>选择地区：</dt>
      <dd>
        <a class="current" target="_self" href="/screen/1--2017---time-1.html">全部</a>
        <a target="_self" href="/screen/1--2017-%E5%A4%A7%E9%99%86--time-1.html">大陆</a>
        <a target="_self" href="/screen/1--2017-%E9%A6%99%E6%B8%AF--time-1.html">香港</a>
        <a target="_self" href="/screen/1--2017-%E5%8F%B0%E6%B9%BE--time-1.html">台湾</a>
        <a target="_self" href="/screen/1--2017-%E6%97%A5%E6%9C%AC--time-1.html">日本</a>
        <a target="_self" href="/screen/1--2017-%E9%9F%A9%E5%9B%BD--time-1.html">韩国</a>
        <a target="_self" href="/screen/1--2017-%E6%AC%A7%E7%BE%8E--time-1.html">欧美</a>
        <a target="_self" href="/screen/1--2017-%E6%B3%B0%E5%9B%BD--time-1.html">泰国</a>
        <a target="_self" href="/screen/1--2017-%E5%8D%B0%E5%BA%A6--time-1.html">印度</a></dd>
    </dl>
    <dl>
      <dt>选择语言：</dt>
      <dd>
        <a class="current" target="_self" href="/screen/1--2017---time-1.html">全部</a>
        <a target="_self" href="/screen/1--2017--%E5%9B%BD%E8%AF%AD-time-1.html">国语</a>
        <a target="_self" href="/screen/1--2017--%E7%B2%A4%E8%AF%AD-time-1.html">粤语</a>
        <a target="_self" href="/screen/1--2017--%E8%8B%B1%E8%AF%AD-time-1.html">英语</a>
        <a target="_self" href="/screen/1--2017--%E6%97%A5%E8%AF%AD-time-1.html">日语</a>
        <a target="_self" href="/screen/1--2017--%E9%9F%A9%E8%AF%AD-time-1.html">韩语</a>
        <a target="_self" href="/screen/1--2017--%E6%B3%B0%E8%AF%AD-time-1.html">泰语</a>
        <a target="_self" href="/screen/1--2017--%E6%B3%95%E8%AF%AD-time-1.html">法语</a>
        <a target="_self" href="/screen/1--2017--%E5%BE%B7%E8%AF%AD-time-1.html">德语</a>
        <a target="_self" href="/screen/1--2017--%E4%BF%84%E8%AF%AD-time-1.html">俄语</a>
        <a target="_self" href="/screen/1--2017--%E4%B8%B9%E9%BA%A6%E8%AF%AD-time-1.html">丹麦语</a>
        <a target="_self" href="/screen/1--2017--%E5%8D%B0%E5%9C%B0%E8%AF%AD-time-1.html">印地语</a>
        <a target="_self" href="/screen/1--2017--%E8%A5%BF%E7%8F%AD%E7%89%99%E8%AF%AD-time-1.html">西班牙语</a>
        <a target="_self" href="/screen/1--2017--%E8%91%A1%E8%90%84%E7%89%99%E8%AF%AD-time-1.html">葡萄牙语</a>
        <a target="_self" href="/screen/1--2017--%E6%84%8F%E5%A4%A7%E5%88%A9%E8%AF%AD-time-1.html">意大利语</a>
        <a target="_self" href="/screen/1--2017--%E6%97%A0%E5%AF%B9%E7%99%BD-time-1.html">无对白</a></dd>
    </dl>
    <dl>
      <dt>已选条件：</dt>
      <dd>
        <a href="/screen/0--2017---time-1.html">类型: 电影 ×</a>
        <a href="/screen/1-----time-1.html">年代: 2017 ×</a>
        <a href="/screen/0-----time-1.html">清除全部</a></dd>
    </dl>
  </div>
</div>
<div class="list_su">
  <div class="down_top">排序：
    <a class="current" href="http://www.btbtdy.com/screen/1--2017---time-1.html">最新</a>
    <a class="" href="http://www.btbtdy.com/screen/1--2017---hit-1.html">热门</a>
    <a class="" href="http://www.btbtdy.com/screen/1--2017---score-1.html">评分</a>
    <div class="dtop">筛选结果：共
      <span>480</span>条数据</div></div>
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

