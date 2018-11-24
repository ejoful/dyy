<?php

namespace frontend\controllers;

use backend\models\Topiclist;
use backend\models\Film;
use yii\web\NotFoundHttpException;
class TopiclistController extends \yii\web\Controller
{
    public function actionIndex($id)
    {
        $topiclist_model = $this->findToplistModel($id);
        $films = Film::find()
        ->where(['in', 'id', explode(',', $topiclist_model->filmid_list)])
        ->all();
        $topic['id'] = $id;
        $topic['name'] = $topiclist_model->name;
        $topic['films'] = $films;
        return $this->render('index',['topic' => $topic]);
    }
    
    protected function findToplistModel($id)
    {
        if (($model = Topiclist::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}




