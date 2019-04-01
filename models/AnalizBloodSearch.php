<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AnalizBlood;

/**
 * AnalizBloodSearch represents the model behind the search form of `app\models\AnalizBlood`.
 */
class AnalizBloodSearch extends AnalizBlood
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'visit_id', 'sana', 'laborant_id', 'direction'], 'integer'],
            [['bulim', 'palata', 'wbc', 'lymph', 'mid', 'gran', 'lymph_p', 'mid_p', 'gran_p', 'pal', 'seg', 'eozinofid', 'bazofid', 'monozit', 'hgb', 'rbc', 'hct', 'mcv', 'mch', 'mchc', 'rdwcv', 'rdwsd', 'plt', 'mpv', 'pdw', 'pct', 'coe', 'morf_erit', 'morf_leyk'], 'safe'],
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
        $query = AnalizBlood::find();

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

        $query->andFilterWhere(['like', 'bulim', $this->bulim])
            ->andFilterWhere(['like', 'palata', $this->palata])
            ->andFilterWhere(['like', 'wbc', $this->wbc])
            ->andFilterWhere(['like', 'lymph', $this->lymph])
            ->andFilterWhere(['like', 'mid', $this->mid])
            ->andFilterWhere(['like', 'gran', $this->gran])
            ->andFilterWhere(['like', 'lymph_p', $this->lymph_p])
            ->andFilterWhere(['like', 'mid_p', $this->mid_p])
            ->andFilterWhere(['like', 'gran_p', $this->gran_p])
            ->andFilterWhere(['like', 'pal', $this->pal])
            ->andFilterWhere(['like', 'seg', $this->seg])
            ->andFilterWhere(['like', 'eozinofid', $this->eozinofid])
            ->andFilterWhere(['like', 'bazofid', $this->bazofid])
            ->andFilterWhere(['like', 'monozit', $this->monozit])
            ->andFilterWhere(['like', 'hgb', $this->hgb])
            ->andFilterWhere(['like', 'rbc', $this->rbc])
            ->andFilterWhere(['like', 'hct', $this->hct])
            ->andFilterWhere(['like', 'mcv', $this->mcv])
            ->andFilterWhere(['like', 'mch', $this->mch])
            ->andFilterWhere(['like', 'mchc', $this->mchc])
            ->andFilterWhere(['like', 'rdwcv', $this->rdwcv])
            ->andFilterWhere(['like', 'rdwsd', $this->rdwsd])
            ->andFilterWhere(['like', 'plt', $this->plt])
            ->andFilterWhere(['like', 'mpv', $this->mpv])
            ->andFilterWhere(['like', 'pdw', $this->pdw])
            ->andFilterWhere(['like', 'pct', $this->pct])
            ->andFilterWhere(['like', 'coe', $this->coe])
            ->andFilterWhere(['like', 'morf_erit', $this->morf_erit])
            ->andFilterWhere(['like', 'morf_leyk', $this->morf_leyk]);

        return $dataProvider;
    }
}
