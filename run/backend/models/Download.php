<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%download}}".
 *
 * @property integer $id
 * @property integer $film_id
 * @property string $name
 * @property string $size
 * @property string $format
 * @property integer $number
 * @property string $type
 * @property string $magnet_url
 * @property string $xiaomi_url
 * @property string $xunlei_url
 * @property integer $position
 * @property string $url
 * @property string $create_time
 * @property string $update_time
 */
class Download extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%download}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['film_id', 'name', 'size', 'number'], 'required'],
            [['film_id', 'number', 'position'], 'integer'],
            [['create_time', 'update_time'], 'safe'],
            [['name', 'size', 'type', 'magnet_url', 'xiaomi_url', 'xunlei_url', 'url'], 'string', 'max' => 255],
            [['format'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'film_id' => Yii::t('app', '电影id'),
            'name' => Yii::t('app', '名字'),
            'size' => Yii::t('app', '文件大小'),
            'format' => Yii::t('app', '视频格式'),
            'number' => Yii::t('app', '包含集数'),
            'type' => Yii::t('app', '类型（720p,1080p）'),
            'magnet_url' => Yii::t('app', '下载地址'),
            'xiaomi_url' => Yii::t('app', '小米路由'),
            'xunlei_url' => Yii::t('app', '迅雷离线'),
            'position' => Yii::t('app', '排序'),
            'url' => Yii::t('app', '下载页面的链接'),
            'create_time' => Yii::t('app', '创建时间'),
            'update_time' => Yii::t('app', '更新时间'),
        ];
    }

    /**
     * @inheritdoc
     * @return DownloadQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new DownloadQuery(get_called_class());
    }
}
