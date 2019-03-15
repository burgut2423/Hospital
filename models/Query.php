<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "query".
 *
 * @property integer $id
 * @property integer $visit_id
 * @property integer $user_id
 * @property integer $add_time
 * @property integer $reseive_time
 * @property integer $resive_state
 * @property integer $end_time
 *
 * @property Visit $visit
 * @property User $user
 */
class Query extends \yii\db\ActiveRecord
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
            [['visit_id', 'user_id', 'add_time', 'reseive_time', 'resive_state', 'end_time'], 'required'],
            [['visit_id', 'user_id', 'add_time', 'reseive_time', 'resive_state', 'end_time'], 'integer'],
            [['visit_id'], 'exist', 'skipOnError' => true, 'targetClass' => Visit::className(), 'targetAttribute' => ['visit_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
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
            'user_id' => 'User ID',
            'add_time' => 'Add Time',
            'reseive_time' => 'Reseive Time',
            'resive_state' => 'Resive State',
            'end_time' => 'End Time',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVisit()
    {
        return $this->hasOne(Visit::className(), ['id' => 'visit_id'])->inverseOf('queries');
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id'])->inverseOf('queries');
    }
    public function  getPatient($id){
         return static::find()->where(['user_id'=>$id])->asArray()->all();
    }

}
