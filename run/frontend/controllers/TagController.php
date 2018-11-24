<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use backend\models\Film;
use backend\models\Topiclist;

/**
 * Site controller
 */
class TagController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionNew($type=null)
    {
        if (empty($type)) {
            $new_models = Film::find()
            ->orderBy('update_time desc')
            ->limit(100)
            ->all();
            $type = '榜首页';
        } else {
            $new_models = Film::find()
            ->where(['type' => $type])
            ->orderBy('update_time desc')
            ->limit(100)
            ->all();
        }
        
        return $this->render('new', ['new_models' => $new_models, 'type' => $type]);
    }
    
    public function actionHot()
    {
        return $this->render('hot');
    }
    
    public function actionUpdate()
    {
        return $this->render('update');
    }
    
    public function actionTopic()
    {
        $topiclist_model = Topiclist::find()->all();
        return $this->render('topic',['topiclist_model' => $topiclist_model]);
    }
    
    public function actionYun()
    {
        return $this->render('yun');
    }

}
