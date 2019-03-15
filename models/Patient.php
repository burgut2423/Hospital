<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "patient".
 *
 * @property integer $id
 * @property string $name
 * @property string $surname
 * @property string $lastname
 * @property string $midname
 * @property string $address
 * @property string $phone_number
 * @property string $work_phone
 * @property string $work
 * @property integer $gender_id
 *
 * @property Gender $gender
 * @property Visit[] $visits
 */
class Patient extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'patient';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'surname', 'lastname', 'midname', 'address', 'phone_number', 'work_phone', 'work', 'gender_id'], 'required'],
            [['address'], 'string'],
            [['gender_id'], 'integer'],
            [['name', 'surname', 'lastname', 'midname', 'phone_number', 'work_phone'], 'string', 'max' => 30],
            [['work'], 'string', 'max' => 60],
            [['gender_id'], 'exist', 'skipOnError' => true, 'targetClass' => Gender::className(), 'targetAttribute' => ['gender_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'surname' => 'Surname',
            'lastname' => 'Lastname',
            'midname' => 'Midname',
            'address' => 'Address',
            'phone_number' => 'Phone Number',
            'work_phone' => 'Work Phone',
            'work' => 'Work',
            'gender_id' => 'Gender ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGender()
    {
        return $this->hasOne(Gender::className(), ['id' => 'gender_id'])->inverseOf('patients');
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVisits()
    {
        return $this->hasMany(Visit::className(), ['client_id' => 'id'])->inverseOf('client');
    }
}
