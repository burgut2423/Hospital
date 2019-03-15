<?php

namespace app\modules\registrator\model;

use Yii;

/**
 * This is the model class for table "visit".
 *
 * @property integer $id
 * @property integer $client_id
 * @property integer $visit_time
 * @property integer $out_time
 * @property integer $inside
 *
 * @property Query[] $queries
 * @property Patient $client
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
            [['client_id', 'visit_time', 'out_time', 'inside'], 'required'],
            [['client_id', 'visit_time', 'out_time', 'inside'], 'integer'],
            [['client_id'], 'exist', 'skipOnError' => true, 'targetClass' => Patient::className(), 'targetAttribute' => ['client_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'client_id' => 'Client ID',
            'visit_time' => 'Visit Time',
            'out_time' => 'Out Time',
            'inside' => 'Inside',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQueries()
    {
        return $this->hasMany(Query::className(), ['visit_id' => 'id'])->inverseOf('visit');
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClient()
    {
        return $this->hasOne(Patient::className(), ['id' => 'client_id'])->inverseOf('visits');
    }
}
