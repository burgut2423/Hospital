<?php

namespace app\modules\registrator\controllers;

use app\models\User;
use app\modules\registrator\model\Patient;
use app\modules\registrator\model\Visit;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;

/**
 * Default controller for the `registrator` module
 */
class DefaultController extends Controller
{


    /**
     * Returns a list of behaviors that this component should behave as.
     *
     * Child classes may override this method to specify the behaviors they want to behave as.
     *
     * The return value of this method should be an array of behavior objects or configurations
     * indexed by behavior names. A behavior configuration can be either a string specifying
     * the behavior class or an array of the following structure:
     *
     * ```php
     * 'behaviorName' => [
     *     'class' => 'BehaviorClass',
     *     'property1' => 'value1',
     *     'property2' => 'value2',
     * ]
     * ```
     *
     * Note that a behavior class must extend from [[Behavior]]. Behaviors can be attached using a name or anonymously.
     * When a name is used as the array key, using this name, the behavior can later be retrieved using [[getBehavior()]]
     * or be detached using [[detachBehavior()]]. Anonymous behaviors can not be retrieved or detached.
     *
     * Behaviors declared in this method will be attached to the component automatically (on demand).
     *
     * @return array the behavior configurations.
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
     * Renders the index view for the module
     * @return string
     */
      public $layout='main';
    public function actionIndex()
    {
           $doctor = User::findAll(['role'=>2]);
           $counter1 = count($doctor);
           $admin = User::findAll(['role'=>1]);
           $counter2 =count($admin);
           $bemorlar =Patient::find()->all();
           $visit =Visit::find()->all();
           $counter4 =count($visit);

            $counter3 = count($bemorlar);
           return $this->render('index',
             [
                 'doctor'=>$counter1,
                 'admin'=>$counter2,
                 'bemorlar'=>$counter3,
                 'visit'=>$counter4,
             ]
           );
    }
}
