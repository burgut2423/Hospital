<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Query;

/**
 * QuerySearch represents the model behind the search form about `app\models\Query`.
 */
class QuerySearch extends Query
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id',  'user_id', 'add_time', 'reseive_time', 'resive_state', 'end_time'], 'integer'],
            [['visit_id'],'string'],
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
        $query = Query::find();
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
            'user_id' => $this->user_id,
            'add_time' => $this->add_time,
            'reseive_time' => $this->reseive_time,
            'resive_state' => $this->resive_state,
            'end_time' => $this->end_time,
            ]);

        return $dataProvider;
    }
}
