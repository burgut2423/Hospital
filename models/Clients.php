<?php

namespace app\models;

use Symfony\Component\BrowserKit\Client;
use Yii;

/**
 * This is the model class for table "clients".
 *
 * @property integer $id
 * @property string $surname
 * @property string $name
 * @property string $midname
 * @property string $birth_date
 * @property string $home_phone
 * @property string $work_phone
 * @property string $address
 * @property string $work_place
 * @property integer $sex
 * @property integer $region_id
 * @property integer $district_id
 */
class Clients extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'clients';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['surname', 'name', 'midname', 'birth_date','home_phone','work_phone','work_place', 'address', 'sex', 'region_id', 'district_id'], 'required',
                'message'=>'{attribute} yazsanga'
                ],
            [['sex', 'region_id', 'district_id'], 'integer'],
            [['surname', 'name', 'midname'], 'string', 'max' => 128],
            [['birth_date'], 'string', 'max' => 20],
            [['home_phone', 'work_phone'], 'string', 'max' => 24],
            [['address', 'work_place'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'surname' => 'Familyasi',
            'name' => 'Ismi',
            'midname' => 'Sharifi',
            'birth_date' => 'Tug\'ilgan yili',
            'home_phone' => 'Uy telefoni',
            'work_phone' => 'Ish joyi telefoni',
            'address' => 'Yashash manzli',
            'work_place' => 'Ish joyi',
            'sex' => 'Jinsi',
            'region_id' => 'Viloyati',
            'district_id' => 'Qishlog\'i',
        ];
    }


    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAddress(){
        return $this->hasOne(Region::className(),['id'=>'region_id']);
    }
   public function getDirection(){
        return $this->hasOne(District::className(),['id'=>'district_id']);
   }

}
