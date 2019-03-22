<?php

namespace app\modules\doctor\controllers;

use app\models\Query;
use app\models\QuerySearch;
use app\models\User;
use app\modules\registrator\model\Visit;
use Yii;
use yii\data\Pagination;
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

    public $layout = 'main';

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'index', 'create', 'update'],
                'rules' => [
                    [
                        'actions' => ['logout', 'index', 'create', 'update'],
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
     * Displays a single Receive model.
     * @param string $query
     * @return mixed
     */
    public function actionIndex()

    {
        $sorov = Query::find()->where(['user_id' => Yii::$app->user->id])->all();
        $querys = Visit::find()->where(['inside'=>0]);
        $countss= clone $querys;
        $pages =new \yii\data\Pagination(['totalCount'=>$countss->count(),'pageSize'=>5]);
        $pages->pageSizeParam=false;
        $modelss = $querys->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('index', [
            'query' => $sorov,
            'pages'=>$pages,
            'modelss'=>$modelss,
        ]);
    }
}
