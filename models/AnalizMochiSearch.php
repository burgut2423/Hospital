<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AnalizMochi;

/**
 * AnalizMochiSearch represents the model behind the search form of `app\models\AnalizMochi`.
 */
class AnalizMochiSearch extends AnalizMochi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'visit_id', 'sana', 'varaqa', 'laborant_id', 'direction'], 'integer'],
            [['muassasa', 'bulim', 'palata', 'uchastok', 'miqdori', 'rangi', 'tiniqligi', 'nisb_zichligi', 'reaksiyasi', 'oqsil', 'oqsil_gl', 'oqsil_gp', 'glyukoza', 'glyukoza_ml', 'glyukoza_gp', 'keton', 'qon_reak', 'bilirubin', 'urobilinoidlar', 'ot_kislota', 'indikan', 'ep_yassi', 'ep_utuvchi', 'ep_buyrak', 'ep_leykositlar', 'er_uzgarmagan', 'er_uzgargan', 's_gizlinli', 's_donador', 's_mumsimon', 's_piteliol', 's_leykositlar', 's_pigmentli', 's_shilliq', 's_tuzlar', 's_bakteriyalar'], 'safe'],
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
        $query = AnalizMochi::find();

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
            'varaqa' => $this->varaqa,
            'laborant_id' => $this->laborant_id,
            'direction' => $this->direction,
        ]);

        $query->andFilterWhere(['like', 'muassasa', $this->muassasa])
            ->andFilterWhere(['like', 'bulim', $this->bulim])
            ->andFilterWhere(['like', 'palata', $this->palata])
            ->andFilterWhere(['like', 'uchastok', $this->uchastok])
            ->andFilterWhere(['like', 'miqdori', $this->miqdori])
            ->andFilterWhere(['like', 'rangi', $this->rangi])
            ->andFilterWhere(['like', 'tiniqligi', $this->tiniqligi])
            ->andFilterWhere(['like', 'nisb_zichligi', $this->nisb_zichligi])
            ->andFilterWhere(['like', 'reaksiyasi', $this->reaksiyasi])
            ->andFilterWhere(['like', 'oqsil', $this->oqsil])
            ->andFilterWhere(['like', 'oqsil_gl', $this->oqsil_gl])
            ->andFilterWhere(['like', 'oqsil_gp', $this->oqsil_gp])
            ->andFilterWhere(['like', 'glyukoza', $this->glyukoza])
            ->andFilterWhere(['like', 'glyukoza_ml', $this->glyukoza_ml])
            ->andFilterWhere(['like', 'glyukoza_gp', $this->glyukoza_gp])
            ->andFilterWhere(['like', 'keton', $this->keton])
            ->andFilterWhere(['like', 'qon_reak', $this->qon_reak])
            ->andFilterWhere(['like', 'bilirubin', $this->bilirubin])
            ->andFilterWhere(['like', 'urobilinoidlar', $this->urobilinoidlar])
            ->andFilterWhere(['like', 'ot_kislota', $this->ot_kislota])
            ->andFilterWhere(['like', 'indikan', $this->indikan])
            ->andFilterWhere(['like', 'ep_yassi', $this->ep_yassi])
            ->andFilterWhere(['like', 'ep_utuvchi', $this->ep_utuvchi])
            ->andFilterWhere(['like', 'ep_buyrak', $this->ep_buyrak])
            ->andFilterWhere(['like', 'ep_leykositlar', $this->ep_leykositlar])
            ->andFilterWhere(['like', 'er_uzgarmagan', $this->er_uzgarmagan])
            ->andFilterWhere(['like', 'er_uzgargan', $this->er_uzgargan])
            ->andFilterWhere(['like', 's_gizlinli', $this->s_gizlinli])
            ->andFilterWhere(['like', 's_donador', $this->s_donador])
            ->andFilterWhere(['like', 's_mumsimon', $this->s_mumsimon])
            ->andFilterWhere(['like', 's_piteliol', $this->s_piteliol])
            ->andFilterWhere(['like', 's_leykositlar', $this->s_leykositlar])
            ->andFilterWhere(['like', 's_pigmentli', $this->s_pigmentli])
            ->andFilterWhere(['like', 's_shilliq', $this->s_shilliq])
            ->andFilterWhere(['like', 's_tuzlar', $this->s_tuzlar])
            ->andFilterWhere(['like', 's_bakteriyalar', $this->s_bakteriyalar]);

        return $dataProvider;
    }
}
