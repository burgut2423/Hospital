<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "analiz".
 *
 * @property int $analiz_id
 * @property string $analiz_name
 *
 * @property AnalizType[] $analizTypes
 */
class Analiz extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'analiz';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['analiz_name'], 'required'],
            [['analiz_name'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'analiz_id' => 'Analiz ID',
            'analiz_name' => 'Analiz Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAnalizTypes()
    {
        return $this->hasMany(AnalizType::className(), ['analiz_id' => 'analiz_id']);
    }
}
