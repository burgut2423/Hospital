<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_analiz_mochi".
 *
 * @property int $id
 * @property int $visit_id Бемор
 * @property int $sana Сана
 * @property string $muassasa Муассаса
 * @property string $bulim бўлим
 * @property string $palata палата
 * @property string $uchastok Участок
 * @property int $varaqa тиббий варақаси №
 * @property string $miqdori Миқдори
 * @property string $rangi Ранги
 * @property string $tiniqligi Тиниқлиги
 * @property string $nisb_zichligi Нисбий зичлиги
 * @property string $reaksiyasi Реакцияси
 * @property string $oqsil Оқсил
 * @property string $oqsil_gl г/л
 * @property string $oqsil_gp г%
 * @property string $glyukoza Глюкоза
 * @property string $glyukoza_ml ммоль/л
 * @property string $glyukoza_gp г%
 * @property string $keton Кетон таначалари
 * @property string $qon_reak Қонга реакцияси
 * @property string $bilirubin Билирубин
 * @property string $urobilinoidlar Уробилиноидлар
 * @property string $ot_kislota Ўт кислоталари
 * @property string $indikan Индикан
 * @property string $ep_yassi Ясси
 * @property string $ep_utuvchi Ўтувчи
 * @property string $ep_buyrak Буйрак
 * @property string $ep_leykositlar Лейкоцитлар
 * @property string $er_uzgarmagan Ўзгармаган
 * @property string $er_uzgargan Ўзгарган
 * @property string $s_gizlinli Гизлинли(гозайли)
 * @property string $s_donador Донадор
 * @property string $s_mumsimon Мумсимон
 * @property string $s_piteliol Пителиол
 * @property string $s_leykositlar Лейкоцитлар
 * @property string $s_pigmentli Пигментли
 * @property string $s_shilliq Шиллиқ
 * @property string $s_tuzlar Тузлар
 * @property string $s_bakteriyalar Бактериялар
 * @property int $laborant_id Лаборант
 * @property int $direction
 *
 * @property Visit $visit
 * @property User $laborant
 */
class AnalizMochi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_analiz_mochi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['visit_id', 'sana', 'laborant_id', 'direction'], 'required'],
            [['visit_id', 'sana', 'varaqa', 'laborant_id', 'direction'], 'integer'],
            [['muassasa', 'bulim', 'reaksiyasi'], 'string', 'max' => 128],
            [['palata', 'oqsil', 'oqsil_gl', 'oqsil_gp', 'glyukoza', 'glyukoza_ml', 'glyukoza_gp', 'ep_yassi', 'ep_utuvchi', 'ep_buyrak', 'ep_leykositlar', 'er_uzgarmagan', 'er_uzgargan', 's_gizlinli', 's_donador', 's_mumsimon', 's_piteliol', 's_leykositlar', 's_pigmentli', 's_shilliq', 's_tuzlar', 's_bakteriyalar'], 'string', 'max' => 32],
            [['uchastok', 'miqdori', 'rangi', 'tiniqligi', 'nisb_zichligi', 'keton', 'qon_reak', 'bilirubin', 'urobilinoidlar', 'ot_kislota', 'indikan'], 'string', 'max' => 64],
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
            'muassasa' => 'Muassasa',
            'bulim' => 'Bulim',
            'palata' => 'Palata',
            'uchastok' => 'Uchastok',
            'varaqa' => 'Varaqa',
            'miqdori' => 'Miqdori',
            'rangi' => 'Rangi',
            'tiniqligi' => 'Tiniqligi',
            'nisb_zichligi' => 'Nisb Zichligi',
            'reaksiyasi' => 'Reaksiyasi',
            'oqsil' => 'Oqsil',
            'oqsil_gl' => 'Oqsil Gl',
            'oqsil_gp' => 'Oqsil Gp',
            'glyukoza' => 'Glyukoza',
            'glyukoza_ml' => 'Glyukoza Ml',
            'glyukoza_gp' => 'Glyukoza Gp',
            'keton' => 'Keton',
            'qon_reak' => 'Qon Reak',
            'bilirubin' => 'Bilirubin',
            'urobilinoidlar' => 'Urobilinoidlar',
            'ot_kislota' => 'Ot Kislota',
            'indikan' => 'Indikan',
            'ep_yassi' => 'Ep Yassi',
            'ep_utuvchi' => 'Ep Utuvchi',
            'ep_buyrak' => 'Ep Buyrak',
            'ep_leykositlar' => 'Ep Leykositlar',
            'er_uzgarmagan' => 'Er Uzgarmagan',
            'er_uzgargan' => 'Er Uzgargan',
            's_gizlinli' => 'S Gizlinli',
            's_donador' => 'S Donador',
            's_mumsimon' => 'S Mumsimon',
            's_piteliol' => 'S Piteliol',
            's_leykositlar' => 'S Leykositlar',
            's_pigmentli' => 'S Pigmentli',
            's_shilliq' => 'S Shilliq',
            's_tuzlar' => 'S Tuzlar',
            's_bakteriyalar' => 'S Bakteriyalar',
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
