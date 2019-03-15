<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Kassal;

/**
 * KassalSearch represents the model behind the search form about `app\models\Kassal`.
 */
class KassalSearch extends Kassal
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['fish', 'tugsanasi', 'jinsi', 'yashashjoyi', 'tuman', 'shaxar', 'qishloq', 'kucha', 'uy', 'xona', 'telefon', 'doimiyaysh', 'vaqtincha', 'oyishish', 'roysanasi', 'chiqishsababi', 'dispanserbog', 'ayanashumuasasa', 'boshqa', 'tashkilotniomi', 'qonguruxi', 'rezuz'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Kassal::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'fish', $this->fish])
            ->andFilterWhere(['like', 'tugsanasi', $this->tugsanasi])
            ->andFilterWhere(['like', 'jinsi', $this->jinsi])
            ->andFilterWhere(['like', 'yashashjoyi', $this->yashashjoyi])
            ->andFilterWhere(['like', 'tuman', $this->tuman])
            ->andFilterWhere(['like', 'shaxar', $this->shaxar])
            ->andFilterWhere(['like', 'qishloq', $this->qishloq])
            ->andFilterWhere(['like', 'kucha', $this->kucha])
            ->andFilterWhere(['like', 'uy', $this->uy])
            ->andFilterWhere(['like', 'xona', $this->xona])
            ->andFilterWhere(['like', 'telefon', $this->telefon])
            ->andFilterWhere(['like', 'doimiyaysh', $this->doimiyaysh])
            ->andFilterWhere(['like', 'vaqtincha', $this->vaqtincha])
            ->andFilterWhere(['like', 'oyishish', $this->oyishish])
            ->andFilterWhere(['like', 'roysanasi', $this->roysanasi])
            ->andFilterWhere(['like', 'chiqishsababi', $this->chiqishsababi])
            ->andFilterWhere(['like', 'dispanserbog', $this->dispanserbog])
            ->andFilterWhere(['like', 'ayanashumuasasa', $this->ayanashumuasasa])
            ->andFilterWhere(['like', 'boshqa', $this->boshqa])
            ->andFilterWhere(['like', 'tashkilotniomi', $this->tashkilotniomi])
            ->andFilterWhere(['like', 'qonguruxi', $this->qonguruxi])
            ->andFilterWhere(['like', 'rezuz', $this->rezuz]);

        return $dataProvider;
    }
}
