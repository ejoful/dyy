<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[FilmType]].
 *
 * @see FilmType
 */
class FilmTypeQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return FilmType[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return FilmType|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
