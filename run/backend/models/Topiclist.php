<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%topiclist}}".
 *
 * @property integer $id
 * @property string $name
 * @property string $pic
 * @property string $filmid_list
 */
class Topiclist extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%topiclist}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'pic', 'filmid_list'], 'required'],
            [['filmid_list'], 'string'],
            [['name', 'pic'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', '专题名字'),
            'pic' => Yii::t('app', '图片'),
            'filmid_list' => Yii::t('app', '电影id列表'),
        ];
    }

    /**
     * @inheritdoc
     * @return TopiclistQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TopiclistQuery(get_called_class());
    }
}
