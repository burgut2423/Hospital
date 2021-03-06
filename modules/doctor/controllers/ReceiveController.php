<?php

namespace app\modules\doctor\controllers;

use app\models\AnalizType;
use app\models\Analliz;
use app\modules\registrator\model\Visit;
use Yii;
use app\models\Receive;
use app\models\ReceiveSearch;
use yii\base\Model;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ReceiveController implements the CRUD actions for Receive model.
 */
class ReceiveController extends Controller
{

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Receive models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ReceiveSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Receive model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {

        $analiz = new AnalizType();
        if ($analiz->load(Yii::$app->request->post())) {
            $num = $analiz->analiz_id;

              for ($i = 0; $i < count($num); $i++) {
                $analiz2 = new AnalizType();
                $analiz2->validate();
                $analiz2->visit_id = $analiz->visit_id;
                $analiz2->add_time=$analiz->add_time;
                $analiz2->end_time=$analiz->end_time;
                $analiz2->analiz_id = $num[$i];
                $analiz2->save(false);
            }

            return $this->redirect('/doctor');
        }



        return $this->render('view', [
            'model' => $this->findModel($id),
            'analiz' => $analiz,
        ]);
    }

    /**
     * Creates a new Receive model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Receive();

        if ($model->load(Yii::$app->request->post())) {

            if ($model->save()) {
                $model_visit_id = Visit::findOne(['id' => $model->visit_id]);
                $model_visit_id->inside = 0;
                $model_visit_id->save();
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Receive model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {

        $model = $this->findModel($id);
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Receive model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Receive model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Receive the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Receive::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
