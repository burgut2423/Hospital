<?php

namespace app\modules\lobarant\controllers;

use app\models\AnalizBioximya;
use app\models\AnalizType;
use yii\data\Pagination;
use yii\web\Controller;

/**
 * Default controller for the `lobarant` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */

    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * @return string
     * @param  AnalizType
     */
    public function actionCreateqon()
    {
        $model = AnalizType::findAll(['analiz_id' => 1]);
        $querys = AnalizType::find()->where(['analiz_id' => 1]);
        $countss = clone $querys;
        $pages = new \yii\data\Pagination(['totalCount' => $countss->count(), 'pageSize' => 3]);
        $pages->pageSizeParam = false;
        $modelss = $querys->offset($pages->offset)->limit($pages->limit)->all();

        return $this->render('createqon', [
            'model' => $modelss,
            'pages' => $pages,

        ]);
    }

    /**
     * @return string
     *
     */
    public function actionCreatebio()
    {
        $model = AnalizType::find()->where(['analiz_id' => 3]);
        $count = clone $model;
        $pages = new Pagination(['totalCount' => $count->count(), 'pageSize' => 3]);
        $pages->pageSizeParam = false;
        $bioximya = $model->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('createbio', [
            'model' => $bioximya,
            'page' => $pages,
        ]);
    }

    /**
     * @return string
     */
    public function actionCreatesiydik()
    {
        return $this->render('createsiydik');
    }
}
