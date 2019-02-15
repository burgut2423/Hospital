<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "visit".
 *
 * @property integer $id
 * @property integer $client_Id
 * @property integer $visit_time
 * @property integer $reg_id
 * @property integer $out_time
 * @property integer $inside
 */
class Visit extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'visit';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['client_Id', 'visit_time', 'reg_id', 'out_time', 'inside'], 'required'],
            [['client_Id', 'visit_time', 'reg_id', 'out_time', 'inside'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'client_Id' => 'Client  ID',
            'visit_time' => 'Visit Time',
            'reg_id' => 'Reg ID',
            'out_time' => 'Out Time',
            'inside' => 'Inside',
        ];
    }
    public static function create($client_id ,$userid){
        $stmt = Visit::findAll(['client_id'=>$client_id,'inside'=>1]);
        if(!$stmt){
            $visit = new Visit;
            $visit->client_Id = $client_id;
            $visit->visit_time = time();
            $visit->reg_id = $userid;
            $visit->out_time = 0;
            $visit->inside = 1;
            $visit->save();
        }
    }
}
