<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sex".
 *
 * @property integer $id
 * @property integer $s_id
 * @property string $type
 */
class Jinsi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sex';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['s_id', 'type'], 'required'],
            [['s_id'], 'integer'],
            [['type'], 'string', 'max' => 11],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            's_id' => 'S ID',
            'type' => 'Type',
        ];
    }
}
