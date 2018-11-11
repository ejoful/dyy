<?php

use yii\helpers\Url;
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
<div class="topur">
  <div class="play">
    <div class="daohang">当前位置：
      <a href="/">BT电影天堂</a>&nbsp;»&nbsp;
      <a href="<?= Url::to(['screen/index', 'type' => $model->type]) ?>"><?= $model->type ?></a>&nbsp;»&nbsp;
      <a href="<?= Url::to(['screen/view', 'id' => $model->id]) ?>"><?= $model->name ?></a></div>
    <div class="vod">
      <div class="vod_img lf">
        <img src="<?= $model->detail_pic ?>" alt="<?= $model->name ?>"></div>
      <div class="vod_intro rt">
        <h1><?= $model->name ?><span class="year">(<?= $model->play_time ?>)</span></h1>
        <dl>
          <dt>更新:</dt>
          <dd><?= $model->update_time ?></dd>
          <dt>状态:</dt><dd><?= $model->quality ?></dd>
          <dt>类型:</dt>
          <dd>
            <a href="<?= Url::to(['screen/index', 'type' => $model->type]) ?>"><?= $model->type ?></a>/
            <?php foreach (explode(',', $model->category) as $value) {?>
            <a href="<?= Url::to(['screen/index', 'category' => $value]) ?>"><?= $value; ?></a>&nbsp;/&nbsp;
            <?php }?>
           </dd>
          <dt>地区:</dt>
          <dd>
            <a href="<?= Url::to(['screen/index', 'location' => $model->location]) ?>"><?= $model->location ?></a></dd>
          <dt>语言:</dt>
          <dd>
            <a href="<?= Url::to(['screen/index', 'language' => $model->language]) ?>"><?= $model->language ?></a></dd>
          <dt style="padding-right:3px;">imdb:</dt><dd>
          <?php if (!empty($model->imdb)) {?>
          <a href="http://www.imdb.com/title/<?= $model->imdb; ?>/" target="_blank" rel="nofollow"><?= $model->imdb; ?></a>
          <?php } else {?>未知<?php }?></dd>
          <dt>主演:</dt>
          <dd class="zhuyan">
          <?php foreach (explode(',', $model->star) as $value) {?>
            <a href="<?= Url::to(['screen/search', 'star' => $value]) ?>"><?= $value; ?></a>&nbsp;/&nbsp;
          <?php }?>
           </dd>
        </dl>
        <div id="bdshare" style="z-index:1;" class="bdshare_t bds_tools_24 get-codes-bdshare">
          <a class="bds_qzone" title="分享到QQ空间" href="#"></a>
          <a class="bds_tqq" title="分享到腾讯微博" href="#"></a>
          <a class="bds_tsina" title="分享到新浪微博" href="#"></a>
          <a class="bds_renren" title="分享到人人网" href="#"></a>
          <a class="bds_douban" title="分享到豆瓣网" href="#"></a>
          <span class="bds_more"></span>
          <a class="shareCount" href="#" title="累计分享0次">0</a></div>
        <script type="text/javascript">markVideo(<?= $model->id; ?>, 0, 0, 0, 5, 0); //markVideo2(<?= $model->id; ?>,0,5);
          </script>
        <div class="pfen">
          <div class="starscore">
            <input type="hidden" id="MARK_B1" name="MARK_B1" value="31">
            <input type="hidden" id="MARK_B2" name="MARK_B2" value="5.6">
            <input type="hidden" id="MARK_B3" name="MARK_B3" value="174">
            <input type="hidden" id="MARK_B4" name="MARK_B4" value="0">
            <div class="starA fl" id="filmStar">
              <span class="starB s5" id="start"></span>
              <div class="starC" id="starTC">
                <a href="javascript:;" onclick="OnStar(<?= $model->id; ?>,1)" onmouseout="kaifach()" onmousemove="startm(1)"></a>
                <a href="javascript:;" onclick="OnStar(<?= $model->id; ?>,2)" onmouseout="kaifach()" onmousemove="startm(2)"></a>
                <a href="javascript:;" onclick="OnStar(<?= $model->id; ?>,3)" onmouseout="kaifach()" onmousemove="startm(3)"></a>
                <a href="javascript:;" onclick="OnStar(<?= $model->id; ?>,4)" onmouseout="kaifach()" onmousemove="startm(4)"></a>
                <a href="javascript:;" onclick="OnStar(<?= $model->id; ?>,5)" onmouseout="kaifach()" onmousemove="startm(5)"></a>
                <a href="javascript:;" onclick="OnStar(<?= $model->id; ?>,6)" onmouseout="kaifach()" onmousemove="startm(6)"></a>
                <a href="javascript:;" onclick="OnStar(<?= $model->id; ?>,7)" onmouseout="kaifach()" onmousemove="startm(7)"></a>
                <a href="javascript:;" onclick="OnStar(<?= $model->id; ?>,8)" onmouseout="kaifach()" onmousemove="startm(8)"></a>
                <a href="javascript:;" onclick="OnStar(<?= $model->id; ?>,9)" onmouseout="kaifach()" onmousemove="startm(9)"></a>
                <a href="javascript:;" onclick="OnStar(<?= $model->id; ?>,10)" onmouseout="kaifach()" onmousemove="startm(10)"></a>
              </div>
            </div>
            <span class="no c1" id="filmStarScore">5
              <i>.6</i>
            </span>
          </div>
          <span class="fen" id="filmStarScoreTip">平庸 不看也罢(31评)</span></div>
        <span class="bitt">
          <a href="#download">下载地址</a>
          <span><?php if (!empty($model->imdb)) {?>
          <a href="<?= $model->album; ?>/" target="_blank" rel="nofollow">相关图片</a>
          <?php } else {?>暂无图片<?php }?></span>
          <span><?php if (!empty($model->imdb)) {?>
          <a href="<?= $model->short_video_url; ?>/" target="_blank" rel="nofollow">预告片</a>
          <?php } else {?>暂无预告<?php }?></span>
          <a href="http://subhd.com/search/<?= $model->name; ?>" target="_blank" rel="nofollow">字幕</a>
          <a href="javascript:AddFav('<?= $model->id; ?>','')">收藏</a>
          <a href="javascript:viod()" onclick="reportErr(<?= $model->id; ?>)">报 错</a>
          <a href="#comment" style="border-right:1px solid #ccc;">评论</a></span>
        <div class="des">
          <div class="c05">
          <strong>剧情介绍：</strong>
          <span style="color: rgb(48, 48, 48); font-family: 微软雅黑; font-size: 14px; background-color: rgb(255, 255, 255);"><?= $model->descr; ?></span>
          </div>
        </div>
      </div>
    </div>
    <div id="nucms_downlist">
    <a name="download"></a>
    <?php foreach ($download_arr as $key => $value_arr) {?>
      <div class="p_list">
        <h2><?= $key; ?>下载地址</h2>
        <ul class="p_list_02">
        <?php foreach ($value_arr as $value) {?>
          <li>
          <a title="<?= $value->name; ?>" href="<?= Url::to(['screen/download', 'id' => $value->id]); ?>" target="_blank"><?= $value->name ?><span class="bt">详情</span></a>
          <?php if (!empty($value->magnet_url)) {?>
          <span><a class="d1" href="<?= $value->magnet_url; ?>">磁力</a></span>
          <?php }?>
          </li>
        <?php }?>
        </ul>
      </div>
      <?php }?>
    </div>
    <div class="p_list">
      <div class="well ad-body">
        <p align="center">
          <script src="/templets/btdy/js/ad9401.js"></script>
          <a href="http://t.cn/RgSuyec" target="_blank">
            <img src="http://ww3.sinaimg.cn/large/0060lm7Tly1flmlbp213tg30qo01oadq.gif" border="0"></a>
        </p>
      </div>
      <h3>随机推荐</h3>
      <ul class="c_t list_lis cts_list">
      <?php foreach ($suiji_models as $value) {?>
        <li>
          <div class="liimg">
            <a class="pic_link" href="<?= Url::to(['screen/view', 'id' => $value->id]); ?>" title="<?= $value->name; ?>" target="_blank">
              <i>
              </i>
              <img src="<?= $value->detail_pic; ?>" alt="<?= $value->name; ?>">
              <span><?= $value->quality; ?></span></a>
          </div>
          <div class="cts_ms">
            <p class="title">
              <a href="<?= Url::to(['screen/view', 'id' => $value->id]); ?>" title="<?= $value->name; ?>" target="_blank"><?= $value->name; ?></a>
              <span><?= $value->score; ?></span></p>
            <p class="des"><?= $value->play_time . ' '.$value->location.' '.$value->category; ?></p></div>
        </li>
        <?php }?>
      </ul>
    </div>
    <a name="comment"></a>
    <div class="p_list" style="margin-bottom:12px;">
      <div style="padding:10px;">
        <div id="comment_list">对不起，评论暂时关闭</div>
        <script>viewComment("/comment.php?id=<?= $model->id; ?>&type=0", "")</script></div>
    </div>
  </div>
  <div class="rt tp">
    <div class="side">
      <h3>最近更新</h3>
      <ul>
      <?php foreach ($zuijin_models as $value) {?>
        <li>
          <div class="img">
            <a href="<?= Url::to(['screen/view', 'id' => $value->id]); ?>" class="preview" rel="<?= $value->detail_pic; ?>" title="<?= $value->name; ?>">
              <img width="30" height="42" src="<?= $value->list_pic; ?>" alt="<?= $value->name; ?>"></a>
          </div>
          <div class="title">
            <a href="<?= Url::to(['screen/view', 'id' => $value->id]); ?>" title="<?= $value->name; ?>">
              <p style="color:green;"><?= $value->name; ?></p>
              <p class="star">
                <span class="star0"></span><?= $value->score; ?></p>
            </a>
          </div>
        </li>
        <?php }?>
      </ul>
    </div>
    <div class="side tp1" id="top_rt" style="margin-top: 10px; margin-left: 0px; position: relative;">
      <h3>本周热门</h3>
      <ul>
        <li>
          <div class="img">
            <a href="/btdy/dy13886.html" class="preview" rel="http://gif-china.cc/uploads/allimg/181106/cf1897947112ad52.jpg?h=250" title="异奇自然">
              <img width="30" height="42" src="http://gif-china.cc/uploads/allimg/181106/cf1897947112ad52.jpg?h=35" alt="异奇自然"></a>
          </div>
          <div class="title">
            <a href="/btdy/dy13886.html" title="异奇自然">
              <p style="color:red;">异奇自然</p>
              <p class="star">
                <span class="star0"></span>0.0</p>
            </a>
          </div>
        </li>
        <li>
          <div class="img">
            <a href="/btdy/dy13869.html" class="preview" rel="http://gif-china.cc/uploads/allimg/181104/86fd3b6315cb46eb.jpg?h=250" title="唐人街1871">
              <img width="30" height="42" src="http://gif-china.cc/uploads/allimg/181104/86fd3b6315cb46eb.jpg?h=35" alt="唐人街1871"></a>
          </div>
          <div class="title">
            <a href="/btdy/dy13869.html" title="唐人街1871">
              <p style="color:red;">唐人街1871</p>
              <p class="star">
                <span class="star10"></span>10.0</p>
            </a>
          </div>
        </li>
        <li>
          <div class="img">
            <a href="/btdy/dy13639.html" class="preview" rel="http://gif-china.cc/uploads/allimg/181001/31003e3f3bb8615e.jpg?h=250" title="无双">
              <img width="30" height="42" src="http://gif-china.cc/uploads/allimg/181001/31003e3f3bb8615e.jpg?h=35" alt="无双"></a>
          </div>
          <div class="title">
            <a href="/btdy/dy13639.html" title="无双">
              <p style="color:red;">无双</p>
              <p class="star">
                <span class="star8"></span>8.0</p>
            </a>
          </div>
        </li>
        <li>
          <div class="img">
            <a href="/btdy/dy13117.html" class="preview" rel="http://gif-china.cc/uploads/allimg/180701/273c3dc60f4d6a4b.jpg?h=250" title="我不是药神">
              <img width="30" height="42" src="http://gif-china.cc/uploads/allimg/180701/273c3dc60f4d6a4b.jpg?h=35" alt="我不是药神"></a>
          </div>
          <div class="title">
            <a href="/btdy/dy13117.html" title="我不是药神">
              <p style="color:red;">我不是药神</p>
              <p class="star">
                <span class="star5"></span>5.3</p>
            </a>
          </div>
        </li>
        <li>
          <div class="img">
            <a href="/btdy/dy13895.html" class="preview" rel="http://gif-china.cc/uploads/allimg/181108/db80c4fd332e02ab.jpg?h=250" title="罪人">
              <img width="30" height="42" src="http://gif-china.cc/uploads/allimg/181108/db80c4fd332e02ab.jpg?h=35" alt="罪人"></a>
          </div>
          <div class="title">
            <a href="/btdy/dy13895.html" title="罪人">
              <p style="color:red;">罪人</p>
              <p class="star">
                <span class="star8"></span>8.0</p>
            </a>
          </div>
        </li>
        <li>
          <div class="img">
            <a href="/btdy/dy13889.html" class="preview" rel="http://gif-china.cc/uploads/allimg/181106/e4522c5e6713a53d.jpg?h=250" title="同族">
              <img width="30" height="42" src="http://gif-china.cc/uploads/allimg/181106/e4522c5e6713a53d.jpg?h=35" alt="同族"></a>
          </div>
          <div class="title">
            <a href="/btdy/dy13889.html" title="同族">
              <p style="color:red;">同族</p>
              <p class="star">
                <span class="star5"></span>5.4</p>
            </a>
          </div>
        </li>
        <li>
          <div class="img">
            <a href="/btdy/dy13871.html" class="preview" rel="http://gif-china.cc/uploads/allimg/181104/6d959abcdfb4f483.jpg?h=250" title="黎明前的两个夜晚">
              <img width="30" height="42" src="http://gif-china.cc/uploads/allimg/181104/6d959abcdfb4f483.jpg?h=35" alt="黎明前的两个夜晚"></a>
          </div>
          <div class="title">
            <a href="/btdy/dy13871.html" title="黎明前的两个夜晚">
              <p style="color:red;">黎明前的两个夜晚</p>
              <p class="star">
                <span class="star7"></span>6.8</p>
            </a>
          </div>
        </li>
        <li>
          <div class="img">
            <a href="/btdy/dy13898.html" class="preview" rel="http://gif-china.cc/uploads/allimg/181108/49f4dbeb59fd29fa.jpg?h=250" title="刺心">
              <img width="30" height="42" src="http://gif-china.cc/uploads/allimg/181108/49f4dbeb59fd29fa.jpg?h=35" alt="刺心"></a>
          </div>
          <div class="title">
            <a href="/btdy/dy13898.html" title="刺心">
              <p style="color:red;">刺心</p>
              <p class="star">
                <span class="star7"></span>7.4</p>
            </a>
          </div>
        </li>
        <li>
          <div class="img">
            <a href="/btdy/dy13638.html" class="preview" rel="http://gif-china.cc/uploads/allimg/181001/d6bb1bb0f9b70948.jpg?h=250" title="影">
              <img width="30" height="42" src="http://gif-china.cc/uploads/allimg/181001/d6bb1bb0f9b70948.jpg?h=35" alt="影"></a>
          </div>
          <div class="title">
            <a href="/btdy/dy13638.html" title="影">
              <p style="color:red;">影</p>
              <p class="star">
                <span class="star8"></span>7.7</p>
            </a>
          </div>
        </li>
        <li>
          <div class="img">
            <a href="/btdy/dy13279.html" class="preview" rel="http://gif-china.cc/uploads/allimg/201807/96e3920c938faa67.jpg?h=250" title="西虹市首富">
              <img width="30" height="42" src="http://gif-china.cc/uploads/allimg/201807/96e3920c938faa67.jpg?h=35" alt="西虹市首富"></a>
          </div>
          <div class="title">
            <a href="/btdy/dy13279.html" title="西虹市首富">
              <p style="color:red;">西虹市首富</p>
              <p class="star">
                <span class="star8"></span>7.8</p>
            </a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>
