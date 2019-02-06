<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "query".
 *
 * @property integer $id
 * @property integer $visit_id
 * @property integer $doctor_id
 * @property integer $add_time
 * @property integer $resive_time
 * @property integer $resive_state
 * @property integer $end_time
 */
class Sorov extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'query';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['visit_id', 'doctor_id', 'add_time', 'resive_time', 'resive_state', 'end_time'], 'required'],
            [['visit_id', 'doctor_id', 'add_time', 'resive_time', 'resive_state', 'end_time'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'visit_id' => 'Visit ID',
            'doctor_id' => 'Doctor ID',
            'add_time' => 'Add Time',
            'resive_time' => 'Resive Time',
            'resive_state' => 'Resive State',
            'end_time' => 'End Time',
        ];
    }
    public static function create($visit_id, $doctor_id)
    {


            $new = new Sorov();
            $new->visit_id = $visit_id;
            $new->doctor_id = $doctor_id;
            $new->add_time = 4;
            $new->resive_time = 0;
            $new->end_time = 0;
            $new->resive_state =0;
            $new->save();
            return true;
    }
}
