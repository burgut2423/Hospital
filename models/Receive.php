<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_receive".
 *
 * @property integer $id
 * @property integer $visit_id
 * @property string $complaint
 * @property string $amnesis_norby
 * @property string $ahvol
 * @property string $eye_status
 * @property string $auskultatsiya
 * @property string $xirillash
 * @property string $arterial_bosim_ong
 * @property string $arterial_bosim_chap
 * @property integer $yurak_qis_soni
 * @property integer $puls
 * @property string $fibrilyatsiya
 * @property string $shovqin
 * @property string $tili
 * @property string $qorni
 * @property string $jigar
 * @property string $taloq
 * @property string $astsit
 * @property string $disease
 * @property string $disease_level
 * @property string $asorat
 * @property string $yuldosh
 * @property string $tavsiya
 * @property integer $receive_time
 * @property integer $doctor_id
 * @property string $receive_state
 * @property integer $direction
 *
 * @property Visit $visit
 */
class Receive extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_receive';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['visit_id', 'yurak_qis_soni', 'puls', 'receive_time', 'doctor_id', ], 'integer'],
            [['complaint', 'amnesis_norby', 'disease', 'asorat', 'yuldosh', 'tavsiya'], 'string'],
            [['ahvol', 'eye_status', 'auskultatsiya', 'xirillash', 'fibrilyatsiya', 'shovqin', 'tili', 'taloq', 'astsit', 'disease_level'], 'string', 'max' => 100],
            [['arterial_bosim_ong', 'arterial_bosim_chap'], 'string', 'max' => 24],
            [['qorni', 'jigar'], 'string', 'max' => 128],
            [['visit_id'], 'exist', 'skipOnError' => true, 'targetClass' => Visit::className(), 'targetAttribute' => ['visit_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return
            [

            'id' =>Yii::t('app','ID'),
            'visit_id' => 'Visit ID',
            'complaint' => 'Bemor shikoyatlari',
            'amnesis_norby' => 'Ushbu kasallik tarixi',
            'ahvol' => 'Ahvol',
            'eye_status' => 'Ko\'z olmasining oq qismi',
            'auskultatsiya' => 'Auskultatsiyada',
            'xirillash' => 'Xirrillashlar',
            'arterial_bosim_ong' => 'Arterial qon bosimi (o\'ng qo\'l)',
            'arterial_bosim_chap' => 'Arterial qon bosimi (chap qo\'l)',
            'yurak_qis_soni' => 'Yurak qisqarishlar soni',
            'puls' => 'Puls',
            'fibrilyatsiya' => 'Bo\'lmachalar fibrilyatsiyasi',
            'shovqin' => 'Yurak shovqinlari',
            'tili' => 'Tili',
            'qorni' => 'Qorni',
            'jigar' => 'Jigar',
            'taloq' => 'Taloq',
            'astsit' => 'Astsit',
            'disease' => 'Kasallik',
            'disease_level' => 'Kasallik darajasi',
            'asorat' => 'Kasallik asorati',
            'yuldosh' => 'Yo\'ldosh kasalliklar',
            'tavsiya' => 'Tavsiyalar',

        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVisit()
    {
        return $this->hasOne(Visit::className(), ['id' => 'visit_id'])->inverseOf('receives');
    }
}
