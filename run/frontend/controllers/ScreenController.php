<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use backend\models\FilmSearch;
use yii\data\Pagination;

/**
 * Site controller
 */
class ScreenController extends Controller
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
    public function actionIndex($type=null,$category=null)
    {
        $params = [];
        if (!empty($type)) {
            $params['FilmSearch']['type'] = $type;
        }
        if (!empty($category)) {
            $params['FilmSearch']['category'] = $category;
        }
        if (!empty($type)) {
            $params['FilmSearch']["type"] = $type;
        }
        print_r($params);
        print_r(Yii::$app->request->queryParams);
        $searchModel = new FilmSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $pagination = new Pagination([
            'defaultPageSize' => 36,
            'totalCount' => $dataProvider->totalCount,
        ]);
        $dataProvider->setPagination($pagination);
        $models = $dataProvider->getModels();
//         print_r($models);die();
        return $this->render('index', [
            'models' => $models,
            'pagination' => $pagination,
        ]);
    }

}
