<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AnalizBioximya;

/**
 * AnalizBioximyaSearch represents the model behind the search form of `app\models\AnalizBioximya`.
 */
class AnalizBioximyaSearch extends AnalizBioximya
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'visit_id', 'sana', 'laborant_id', 'direction'], 'integer'],
            [['palata', 'bulim', 'qon_qand', 'siyd_qand', 'umum_oqsil', 'alat', 'asat', 'mochevina', 'kreatinin', 'bilirubin', 'umumiy', 'boglangan', 'erkin', 'diastoza', 'moch_kislota', 'kaliy', 'kalsiy', 'natriy', 'c_reak_belok', 'jelezo', 'xoleterin'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = AnalizBioximya::find();

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
            'visit_id' => $this->visit_id,
            'sana' => $this->sana,
            'laborant_id' => $this->laborant_id,
            'direction' => $this->direction,
        ]);

        $query->andFilterWhere(['like', 'palata', $this->palata])
            ->andFilterWhere(['like', 'bulim', $this->bulim])
            ->andFilterWhere(['like', 'qon_qand', $this->qon_qand])
            ->andFilterWhere(['like', 'siyd_qand', $this->siyd_qand])
            ->andFilterWhere(['like', 'umum_oqsil', $this->umum_oqsil])
            ->andFilterWhere(['like', 'alat', $this->alat])
            ->andFilterWhere(['like', 'asat', $this->asat])
            ->andFilterWhere(['like', 'mochevina', $this->mochevina])
            ->andFilterWhere(['like', 'kreatinin', $this->kreatinin])
            ->andFilterWhere(['like', 'bilirubin', $this->bilirubin])
            ->andFilterWhere(['like', 'umumiy', $this->umumiy])
            ->andFilterWhere(['like', 'boglangan', $this->boglangan])
            ->andFilterWhere(['like', 'erkin', $this->erkin])
            ->andFilterWhere(['like', 'diastoza', $this->diastoza])
            ->andFilterWhere(['like', 'moch_kislota', $this->moch_kislota])
            ->andFilterWhere(['like', 'kaliy', $this->kaliy])
            ->andFilterWhere(['like', 'kalsiy', $this->kalsiy])
            ->andFilterWhere(['like', 'natriy', $this->natriy])
            ->andFilterWhere(['like', 'c_reak_belok', $this->c_reak_belok])
            ->andFilterWhere(['like', 'jelezo', $this->jelezo])
            ->andFilterWhere(['like', 'xoleterin', $this->xoleterin]);

        return $dataProvider;
    }
}
