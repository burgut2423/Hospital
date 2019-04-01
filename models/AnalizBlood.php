<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_analiz_blood".
 *
 * @property int $id
 * @property int $visit_id Пациент
 * @property string $bulim Отделение
 * @property string $palata Палата
 * @property string $wbc Лейкоциты
 * @property string $lymph Лимфоциты
 * @property string $mid Клетки средних размеров
 * @property string $gran Гранулоциты
 * @property string $lymph_p Процент лимфоцитов
 * @property string $mid_p Процент клеток ср. размеров
 * @property string $gran_p Процент гранулоцитов
 * @property string $pal Палочкоядерные (процент)
 * @property string $seg Сегментоядерные (процент)
 * @property string $eozinofid Эозинофиды (процент)
 * @property string $bazofid Базофиды (процент)
 * @property string $monozit Моноциты (процент)
 * @property string $hgb Гемоглобин
 * @property string $rbc Эритроциты
 * @property string $hct Гематокрит
 * @property string $mcv Средний объем эритроцитов
 * @property string $mch Среднее содержание гемоглобина в эритроците
 * @property string $mchc Средняя концентрация гемоглобина в эритроците
 * @property string $rdwcv (Анизоцитоз эритроцитов)
 * @property string $rdwsd (Анизоцитоз эритроцитов) стандартное отклонение
 * @property string $plt Тромбоциты
 * @property string $mpv Средний объем тромбоцитов
 * @property string $pdw (Анизоцитоз тромбоцитов)
 * @property string $pct Тромбокрит
 * @property string $coe Скорость оседания эритроцитов
 * @property string $morf_erit Морфология эритроцитов
 * @property string $morf_leyk Морфология лейкоцитов
 * @property int $sana Дата
 * @property int $laborant_id Лаборант
 * @property int $direction
 *
 * @property Visit $visit
 * @property User $laborant
 */
class AnalizBlood extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_analiz_blood';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['visit_id', 'sana', 'laborant_id', 'direction'], 'required','message'=>'s'],
            [['visit_id', 'sana', 'laborant_id', 'direction'], 'integer'],
            [['bulim'], 'string', 'max' => 128],
            [['palata', 'wbc', 'lymph', 'mid', 'gran', 'lymph_p', 'mid_p', 'gran_p', 'pal', 'seg', 'eozinofid', 'bazofid', 'monozit', 'hgb', 'rbc', 'hct', 'mcv', 'mch', 'mchc', 'rdwcv', 'rdwsd', 'plt', 'mpv', 'pdw', 'pct', 'coe', 'morf_erit', 'morf_leyk'], 'string', 'max' => 24],
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
            'bulim' => 'Bulim',
            'palata' => 'Palata',
            'wbc' => 'Wbc',
            'lymph' => 'Lymph',
            'mid' => 'Mid',
            'gran' => 'Gran',
            'lymph_p' => 'Lymph P',
            'mid_p' => 'Mid P',
            'gran_p' => 'Gran P',
            'pal' => 'Pal',
            'seg' => 'Seg',
            'eozinofid' => 'Eozinofid',
            'bazofid' => 'Bazofid',
            'monozit' => 'Monozit',
            'hgb' => 'Hgb',
            'rbc' => 'Rbc',
            'hct' => 'Hct',
            'mcv' => 'Mcv',
            'mch' => 'Mch',
            'mchc' => 'Mchc',
            'rdwcv' => 'Rdwcv',
            'rdwsd' => 'Rdwsd',
            'plt' => 'Plt',
            'mpv' => 'Mpv',
            'pdw' => 'Pdw',
            'pct' => 'Pct',
            'coe' => 'Coe',
            'morf_erit' => 'Morf Erit',
            'morf_leyk' => 'Morf Leyk',
            'sana' => 'Sana',
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

    /**
     * @param $id
     * @return Patient
     */
    public  static function getClinetName($id){
         $r  = Visit::findOne(['id'=>$id])->client;
         return $r;
    }
}
