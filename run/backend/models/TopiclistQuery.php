<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[Topiclist]].
 *
 * @see Topiclist
 */
class TopiclistQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Topiclist[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Topiclist|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
