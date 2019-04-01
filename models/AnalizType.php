<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "analiz_type".
 *
 * @property int $id
 * @property int $visit_id
 * @property int $analiz_id
 * @property int $add_time
 * @property int $end_time
 *
 * @property Analiz $analiz
 * @property Visit $visit
 */
class AnalizType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'analiz_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['visit_id', 'analiz_id', 'add_time', 'end_time'], 'required'],
            [['visit_id', 'analiz_id', 'add_time', 'end_time'], 'integer'],
            [['analiz_id'], 'exist', 'skipOnError' => true, 'targetClass' => Analiz::className(), 'targetAttribute' => ['analiz_id' => 'analiz_id']],
            [['visit_id'], 'exist', 'skipOnError' => true, 'targetClass' => Visit::className(), 'targetAttribute' => ['visit_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'visit_id' => 'Visit ID',
            'analiz_id' => 'Analiz ID',
            'add_time' => 'Add Time',
            'end_time' => 'End Time',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAnaliz()
    {
        return $this->hasOne(Analiz::className(), ['analiz_id' => 'analiz_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVisit()
    {
        return $this->hasOne(Visit::className(), ['id' => 'visit_id']);
    }
}
