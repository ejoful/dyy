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
use backend\models\FilmType;

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
    public function actionIndex($type=null, $category=null, $play_time=null, $loca=null, $lang=null, $page=null)
    {
        $params = [];
        $params['FilmSearch']['type'] = $type;
        $params['FilmSearch']['category'] = $category;
        $params['FilmSearch']['play_time'] = $play_time;
        $params['FilmSearch']['location'] = $loca;
        $params['FilmSearch']['language'] = $lang;
        $params['page'] = $page;

//         print_r($params);
//         print_r(Yii::$app->request->queryParams);
        $searchModel = new FilmSearch();
//         $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider = $searchModel->search($params);
        $pagination = new Pagination([
            'defaultPageSize' => 36,
            'totalCount' => $dataProvider->totalCount,
        ]);
        $dataProvider->setPagination($pagination);
        $models = $dataProvider->getModels();
//         print_r($models);die();
        $type_models = FilmType::find()
        ->orderBy('position asc')
        ->all();
        $sql = "SELECT category FROM {{%film}} group by category ;";
        $category_models = Yii::$app->db->createCommand($sql)->queryAll();
        $category_models = array_column($category_models, 'category');
//         print_r($category_models);die();
        $category_arr = [];
        foreach ($category_models as $category_model) {
            $arr = explode(',', $category_model);
            foreach ($arr as $value) {
                if (!empty($value)) {
                    if (isset($category_arr[$value])){
                        $category_arr[$value] += 1;
                    } else {
                        $category_arr[$value] = 1;
                    }
                }
            }
            
        }
        arsort($category_arr);
//         print_r($category_arr);
        $category_arr = array_keys($category_arr);
//         print_r($category_arr);die();
        
        
        return $this->render('index', [
            'models' => $models,
            'pagination' => $pagination,
            'type_models' => $type_models,
            'category_arr' => $category_arr,
        ]);
    }

}
