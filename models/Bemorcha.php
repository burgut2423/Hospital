<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bemor".
 *
 * @property integer $id
 * @property string $fish
 * @property string $tugsanasi
 * @property string $jinsi
 * @property string $yashashjoyi
 * @property string $tuman
 * @property string $shaxar
 * @property string $qishloq
 * @property string $ko'cha
 * @property string $uy
 * @property string $xona
 * @property string $telefon
 * @property string $doimiyaysh
 * @property string $vaqtincha
 * @property string $oyishish
 * @property string $roysanasi
 * @property string $chiqishsababi
 * @property string $dispanserbog
 * @property string $ayanashumuasasa
 * @property string $boshqa
 * @property string $tashkilotniomi
 * @property string $qonguruxi
 * @property string $rezuz
 */
class Bemorcha extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bemor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fish', 'tugsanasi', 'jinsi', 'yashashjoyi', 'tuman', 'shaxar', 'qishloq', 'ko'cha', 'uy', 'xona', 'telefon', 'doimiyaysh', 'vaqtincha', 'oyishish', 'roysanasi', 'chiqishsababi', 'dispanserbog', 'ayanashumuasasa', 'boshqa', 'tashkilotniomi', 'qonguruxi', 'rezuz'], 'required'],
            [['fish', 'tugsanasi', 'jinsi', 'yashashjoyi', 'tuman', 'shaxar', 'qishloq', 'ko'cha', 'uy', 'xona', 'telefon', 'doimiyaysh', 'vaqtincha', 'oyishish', 'roysanasi', 'chiqishsababi', 'dispanserbog', 'ayanashumuasasa', 'boshqa', 'tashkilotniomi', 'qonguruxi', 'rezuz'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fish' => 'Fish',
            'tugsanasi' => 'Tugsanasi',
            'jinsi' => 'Jinsi',
            'yashashjoyi' => 'Yashashjoyi',
            'tuman' => 'Tuman',
            'shaxar' => 'Shaxar',
            'qishloq' => 'Qishloq',
            'ko'cha' => 'Ko\'cha',
            'uy' => 'Uy',
            'xona' => 'Xona',
            'telefon' => 'Telefon',
            'doimiyaysh' => 'Doimiyaysh',
            'vaqtincha' => 'Vaqtincha',
            'oyishish' => 'Oyishish',
            'roysanasi' => 'Roysanasi',
            'chiqishsababi' => 'Chiqishsababi',
            'dispanserbog' => 'Dispanserbog',
            'ayanashumuasasa' => 'Ayanashumuasasa',
            'boshqa' => 'Boshqa',
            'tashkilotniomi' => 'Tashkilotniomi',
            'qonguruxi' => 'Qonguruxi',
            'rezuz' => 'Rezuz',
        ];
    }
}
