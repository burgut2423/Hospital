<?php

/**
 * Class my
 */
class my extends \yii\bootstrap\Modal{
        private  $name;
        private  $pass;
        public function actionMy(){
            if (Yii::$app->request->post()){
                 var_dump($_POST);
            }
        }
    }
?>