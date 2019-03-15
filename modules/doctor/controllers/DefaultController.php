<?php

namespace app\modules\doctor\controllers;
use app\models\Query;
use app\models\QuerySearch;
use app\models\User;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;

/**
 * Default controller for the `doctor` module
 *
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     * @var  $query `app\models\Visit`
     * @var $searchModel `app\models\QuerySearch`
     */
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout','index','create','update'],
                'rules' => [
                    [
                        'actions' => ['logout','index','create','update'],
                        'allow' => true,
                        'roles' =>['@'],
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
     * Displays a single Receive model.
     * @param string $query
     * @return mixed
     */
    public function actionIndex()
     {
         $query = Query::find()->where(['user_id'=>Yii::$app->user->id])->all();
         return $this->render('index', [
             'query'=>$query,
         ]);
     }
}
