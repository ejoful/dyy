<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%film}}".
 *
 * @property integer $id
 * @property string $name
 * @property string $keywords
 * @property string $description
 * @property string $play_time
 * @property string $update_time
 * @property string $quality
 * @property string $type
 * @property integer $total_count
 * @property string $category
 * @property string $location
 * @property string $language
 * @property string $imdb
 * @property string $star
 * @property string $descr
 * @property string $list_pic
 * @property string $detail_pic
 * @property string $album
 * @property string $short_video_url
 * @property string $short_video_embed
 * @property string $subtitle
 * @property double $score
 * @property string $url
 */
class Film extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%film}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['keywords', 'description', 'descr', 'short_video_embed'], 'string'],
            [['play_time', 'update_time'], 'safe'],
            [['total_count'], 'integer'],
            [['score'], 'number'],
            [['name', 'quality', 'type', 'category', 'location', 'language', 'imdb', 'star', 'list_pic', 'detail_pic', 'album', 'short_video_url', 'subtitle', 'url'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', '名字'),
            'keywords' => Yii::t('app', '页面keywords'),
            'description' => Yii::t('app', '页面description'),
            'play_time' => Yii::t('app', '年代（出品时间）'),
            'update_time' => Yii::t('app', '更新'),
            'quality' => Yii::t('app', '清晰度'),
            'type' => Yii::t('app', '类型'),
            'total_count' => Yii::t('app', '总集数'),
            'category' => Yii::t('app', '分类'),
            'location' => Yii::t('app', '地区'),
            'language' => Yii::t('app', '语言'),
            'imdb' => Yii::t('app', 'Imdb'),
            'star' => Yii::t('app', '主演'),
            'descr' => Yii::t('app', '剧情介绍'),
            'list_pic' => Yii::t('app', '列表页面图片'),
            'detail_pic' => Yii::t('app', '详细页面图片'),
            'album' => Yii::t('app', '相册'),
            'short_video_url' => Yii::t('app', '预告链接'),
            'short_video_embed' => Yii::t('app', '嵌入视屏代码'),
            'subtitle' => Yii::t('app', '字幕'),
            'score' => Yii::t('app', '评分'),
            'url' => Yii::t('app', '链接'),
        ];
    }

    /**
     * @inheritdoc
     * @return FilmQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new FilmQuery(get_called_class());
    }
}
