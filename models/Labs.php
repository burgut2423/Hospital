<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "labs".
 *
 * @property int $lab_id
 * @property string $name
 */
class Labs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'labs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'lab_id' => 'Lab ID',
            'name' => 'Name',
        ];
    }
}
