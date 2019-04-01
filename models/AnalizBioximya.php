<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_analiz_biohimiya".
 *
 * @property int $id
 * @property int $visit_id Бемор
 * @property int $sana Сана
 * @property string $palata Палата
 * @property string $bulim бўлим
 * @property string $qon_qand Қондаги қанд миқдори
 * @property string $siyd_qand Сийдикдаги қанд миқдори
 * @property string $umum_oqsil Умумий оқсил
 * @property string $alat АлАТ
 * @property string $asat АсАТ
 * @property string $mochevina Мочевина
 * @property string $kreatinin Креатинин
 * @property string $bilirubin Билирубин
 * @property string $umumiy Умумий
 * @property string $boglangan Боғланган
 * @property string $erkin Эркин
 * @property string $diastoza Диастоза
 * @property string $moch_kislota Мочевая кисота
 * @property string $kaliy Калий
 * @property string $kalsiy Кальций
 * @property string $natriy Натрий
 * @property string $c_reak_belok С-реактивный белок
 * @property string $jelezo Железо
 * @property string $xoleterin Холетерин
 * @property int $laborant_id Лаборант
 * @property int $direction
 *
 * @property Visit $visit
 * @property User $laborant
 */
class AnalizBioximya extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_analiz_biohimiya';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['visit_id', 'sana', 'laborant_id', 'direction'], 'required'],
            [['visit_id', 'sana', 'laborant_id', 'direction'], 'integer'],
            [['palata', 'qon_qand', 'siyd_qand', 'umum_oqsil', 'alat', 'asat', 'mochevina', 'kreatinin', 'bilirubin', 'umumiy', 'boglangan', 'erkin', 'diastoza', 'moch_kislota', 'kaliy', 'kalsiy', 'natriy', 'c_reak_belok', 'jelezo', 'xoleterin'], 'string', 'max' => 24],
            [['bulim'], 'string', 'max' => 128],
            [['visit_id'], 'exist', 'skipOnError' => true, 'targetClass' => Visit::className(), 'targetAttribute' => ['visit_id' => 'id']],
            [['laborant_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['laborant_id' => 'id']],
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
            'sana' => 'Sana',
            'palata' => 'Palata',
            'bulim' => 'Bulim',
            'qon_qand' => 'Qon Qand',
            'siyd_qand' => 'Siyd Qand',
            'umum_oqsil' => 'Umum Oqsil',
            'alat' => 'Alat',
            'asat' => 'Asat',
            'mochevina' => 'Mochevina',
            'kreatinin' => 'Kreatinin',
            'bilirubin' => 'Bilirubin',
            'umumiy' => 'Umumiy',
            'boglangan' => 'Boglangan',
            'erkin' => 'Erkin',
            'diastoza' => 'Diastoza',
            'moch_kislota' => 'Moch Kislota',
            'kaliy' => 'Kaliy',
            'kalsiy' => 'Kalsiy',
            'natriy' => 'Natriy',
            'c_reak_belok' => 'C Reak Belok',
            'jelezo' => 'Jelezo',
            'xoleterin' => 'Xoleterin',
            'laborant_id' => 'Laborant ID',
            'direction' => 'Direction',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVisit()
    {
        return $this->hasOne(Visit::className(), ['id' => 'visit_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLaborant()
    {
        return $this->hasOne(User::className(), ['id' => 'laborant_id']);
    }
}
