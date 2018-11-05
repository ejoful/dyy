<?php

use yii\helpers\Url;
use yii\widgets\LinkPager;
/* @var $this yii\web\View */

$this->title = 'BT电影天堂-迅雷BT种子下载|高清电影下载';
echo $query_str = Yii::$app->getRequest()->queryString;
$params = explode('&', $query_str);
// print_r($params);


parse_str($query_str, $query_arr);
// echo '<pre>';
// // print_r($query_arr);
// echo '</pre>';
// print_r($query_arr['FilmSearch']["'category'"]);
// die();
?>

<div class="list">
  <div class="s_index">
    <dl>
      <dt>选择类型：</dt>
      <dd>
        <a class="current" target="_self" href="<?= Url::to(['screen/index',"FilmSearch['type']" => '',"FilmSearch['category']" => $query_arr['FilmSearch']["'category'"]]) ?>">全部</a>
        <a target="_self" href="<?= Url::to(['screen/index',"FilmSearch['type']" => '电影',"FilmSearch['category']" => $query_arr['FilmSearch']["'category'"]]) ?>">电影</a>
        <a target="_self" href="/screen/30--2017---time-1.html">电视剧</a>
        <a target="_self" href="/screen/34--2017---time-1.html">动漫</a>
        <a target="_self" href="/screen/29--2017---time-1.html">蓝光原盘</a>
        <a target="_self" href="/screen/28--2017---time-1.html">3D电影</a>
        <a target="_self" href="/screen/38--2017---time-1.html">VR视频</a></dd>
    </dl>
    <dl>
      <dt>选择分类：</dt>
      <dd>
        <a class="current" target="_self" href="/screen/1--2017---time-1.html">全部</a>
        <a target="_self" href="/screen/1-%E5%8A%A8%E4%BD%9C-2017---time-1.html">动作</a>
        <a target="_self" href="/screen/1-%E7%A7%91%E5%B9%BB-2017---time-1.html">科幻</a>
        <a target="_self" href="/screen/1-%E5%96%9C%E5%89%A7-2017---time-1.html">喜剧</a>
        <a target="_self" href="/screen/1-%E7%88%B1%E6%83%85-2017---time-1.html">爱情</a>
        <a target="_self" href="/screen/1-%E5%89%A7%E6%83%85-2017---time-1.html">剧情</a>
        <a target="_self" href="/screen/1-%E5%A5%87%E5%B9%BB-2017---time-1.html">奇幻</a>
        <a target="_self" href="/screen/1-%E5%8A%A8%E7%94%BB-2017---time-1.html">动画</a>
        <a target="_self" href="/screen/1-%E6%83%8A%E6%82%9A-2017---time-1.html">惊悚</a>
        <a target="_self" href="/screen/1-%E6%81%90%E6%80%96-2017---time-1.html">恐怖</a>
        <a target="_self" href="/screen/1-%E6%82%AC%E7%96%91-2017---time-1.html">悬疑</a>
        <a target="_self" href="/screen/1-%E7%8A%AF%E7%BD%AA-2017---time-1.html">犯罪</a>
        <a target="_self" href="/screen/1-%E6%88%98%E4%BA%89-2017---time-1.html">战争</a>
        <a target="_self" href="/screen/1-%E5%86%92%E9%99%A9-2017---time-1.html">冒险</a>
        <a target="_self" href="/screen/1-%E8%A5%BF%E9%83%A8-2017---time-1.html">西部</a>
        <a target="_self" href="/screen/1-%E7%81%BE%E9%9A%BE-2017---time-1.html">灾难</a>
        <a target="_self" href="/screen/1-%E6%AD%A6%E4%BE%A0-2017---time-1.html">武侠</a>
        <a target="_self" href="/screen/1-%E5%8F%A4%E8%A3%85-2017---time-1.html">古装</a>
        <a target="_self" href="/screen/1-%E8%B0%8D%E6%88%98-2017---time-1.html">谍战</a>
        <a target="_self" href="/screen/1-%E4%BC%A0%E8%AE%B0-2017---time-1.html">传记</a>
        <a target="_self" href="/screen/1-%E5%8E%86%E5%8F%B2-2017---time-1.html">历史</a>
        <a target="_self" href="/screen/1-%E7%BA%AA%E5%BD%95-2017---time-1.html">纪录</a>
        <a target="_self" href="/screen/1-%E5%90%8C%E6%80%A7-2017---time-1.html">同性</a>
        <a target="_self" href="/screen/1-%E9%9F%B3%E4%B9%90-2017---time-1.html">音乐</a>
        <a target="_self" href="/screen/1-%E6%AD%8C%E8%88%9E-2017---time-1.html">歌舞</a>
        <a target="_self" href="/screen/1-%E9%9D%92%E6%98%A5-2017---time-1.html">青春</a>
        <a target="_self" href="/screen/1-%E5%AE%B6%E5%BA%AD-2017---time-1.html">家庭</a>
        <a target="_self" href="/screen/1-%E5%84%BF%E7%AB%A5-2017---time-1.html">儿童</a>
        <a target="_self" href="/screen/1-%E6%A0%A1%E5%9B%AD-2017---time-1.html">校园</a>
        <a target="_self" href="/screen/1-%E5%8A%B1%E5%BF%97-2017---time-1.html">励志</a>
        <a target="_self" href="/screen/1-%E8%BF%90%E5%8A%A8-2017---time-1.html">运动</a>
        <a target="_self" href="/screen/1-%E4%BD%93%E8%82%B2-2017---time-1.html">体育</a>
        <a target="_self" href="/screen/1-%E7%9F%AD%E7%89%87-2017---time-1.html">短片</a>
        <a target="_self" href="/screen/1-%E7%9C%9F%E4%BA%BA%E7%A7%80-2017---time-1.html">真人秀</a>
        <a target="_self" href="/screen/1-%E9%BB%91%E8%89%B2%E7%94%B5%E5%BD%B1-2017---time-1.html">黑色电影</a>
        <a target="_self" href="/screen/1-%E8%84%B1%E5%8F%A3%E7%A7%80-2017---time-1.html">脱口秀</a></dd>
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

