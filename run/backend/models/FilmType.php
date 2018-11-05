<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%film_type}}".
 *
 * @property integer $id
 * @property string $name
 */
class FilmType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%film_type}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 255],
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
        ];
    }

    /**
     * @inheritdoc
     * @return FilmTypeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new FilmTypeQuery(get_called_class());
    }
}
