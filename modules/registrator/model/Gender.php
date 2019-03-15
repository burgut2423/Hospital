<?php

namespace app\modules\registrator\model;

use Yii;

/**
 * This is the model class for table "gender".
 *
 * @property integer $id
 * @property string $name
 *
 * @property Patient[] $patients
 */
class Gender extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gender';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Jinsi',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPatients()
    {
        return $this->hasMany(Patient::className(), ['gender_id' => 'id'])->inverseOf('gender');
    }
}
