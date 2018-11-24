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
use backend\models\Film;
use backend\models\Download;

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
    public function actionIndex($type=null, $category=null, $play_time=null, $location=null, 
        $language=null, $page=null, $satr=null)
    {
        $params = [];
        $params['FilmSearch']['type'] = $type;
        $params['FilmSearch']['category'] = $category;
        $params['FilmSearch']['play_time'] = $play_time;
        $params['FilmSearch']['location'] = $location;
        $params['FilmSearch']['language'] = $language;
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
        $sql = "SELECT category FROM {{%film}} group by category;";
        $category_search_models = Yii::$app->db->createCommand($sql)->queryAll();
        $category_models = array_column($category_search_models, 'category');
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
        
        $sql = "SELECT play_time FROM {{%film}} group by play_time;";
        $play_time_search_models = Yii::$app->db->createCommand($sql)->queryAll();
        $play_time_arr = array_column($play_time_search_models, 'play_time');
        rsort($play_time_arr);
//         print_r($play_time_arr);die();

        $sql = "SELECT location FROM {{%film}};";
        $location_search_models = Yii::$app->db->createCommand($sql)->queryAll();
        $location_models = array_column($location_search_models, 'location');
//                 print_r($location_models);die();
        $location_arr = [];
        foreach ($location_models as $value) {
            if (!empty($value)) {
                if (isset($location_arr[$value])){
                    $location_arr[$value] += 1;
                } else {
                    $location_arr[$value] = 1;
                }
            }
        }
        arsort($location_arr);
//         print_r($location_arr);
        $location_arr = array_keys($location_arr);
        
        $sql = "SELECT language FROM {{%film}};";
        $language_search_models = Yii::$app->db->createCommand($sql)->queryAll();
        $language_models = array_column($language_search_models, 'language');
        //                 print_r($location_models);die();
        $language_arr = [];
        foreach ($language_models as $value) {
            if (!empty($value)) {
                if (isset($language_arr[$value])){
                    $language_arr[$value] += 1;
                } else {
                    $language_arr[$value] = 1;
                }
            }
        }
        arsort($language_arr);
        //         print_r($location_arr);
        $language_arr = array_keys($language_arr);
        
        return $this->render('index', [
            'models' => $models,
            'pagination' => $pagination,
            'type_models' => $type_models,
            'category_arr' => $category_arr,
            'play_time_arr' => $play_time_arr,
            'location_arr' => $location_arr,
            'language_arr' => $language_arr,
            'totalCount' => $dataProvider->totalCount,
        ]);
    }
    
    public function actionView($id)
    {
        $model = $this->findModel($id);
        //下载链接列表
        $download_models = Download::find()
        ->where(['film_id' => $id])
        ->all();
        $download_arr = [];
        foreach ($download_models as $value) {
            $download_arr[$value->type][] = $value;
        }
        $suiji_models = Film::find()
        ->where(['!=', 'id' , $id])
        ->orderBy('rand()')
        ->limit(5)
        ->all();
        $date=new \DateTime();
        $date->modify('this week');
        $first_day_of_week = $date->format('Y-m-d');
        $date->modify('this week +6 days');
        $end_day_of_week = $date->format('Y-m-d');
        $zuijin_models = Film::find()
        ->where(['!=', 'id' , $id])
        ->orderBy('update_time desc')
        ->limit(10)
        ->all();
        return $this->render('view', [
            'model' => $model,
            'download_arr' => $download_arr,
            'suiji_models' => $suiji_models,
            'zuijin_models' => $zuijin_models,
        ]);
    }
    
    protected function findModel($id)
    {
        if (($model = Film::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    
    public function actionDownload($id)
    {
        $download_model = $this->findDownloadModel($id);
        $film_model = $this->findModel($download_model->film_id);
        $download_models = $this->findDownloadModels($download_model->film_id);
        
        
        return $this->render('download', [
            'download_model' => $download_model,
            'film_model' => $film_model,
            'download_models' => $download_models,
        ]);
        
        
    }
    
    protected function findDownloadModel($id)
    {
        if (($model = Download::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    
    protected function findDownloadModels($id)
    {
        if (($model = Download::findAll(['film_id'=>$id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
