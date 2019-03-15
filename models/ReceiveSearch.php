<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Receive;

/**
 * ReceiveSearch represents the model behind the search form about `app\models\Receive`.
 */
class ReceiveSearch extends Receive
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'visit_id', 'yurak_qis_soni', 'puls', 'receive_time', 'doctor_id', 'direction'], 'integer'],
            [['complaint', 'amnesis_norby', 'ahvol', 'eye_status', 'auskultatsiya', 'xirillash', 'arterial_bosim_ong', 'arterial_bosim_chap', 'fibrilyatsiya', 'shovqin', 'tili', 'qorni', 'jigar', 'taloq', 'astsit', 'disease', 'disease_level', 'asorat', 'yuldosh', 'tavsiya', 'receive_state'], 'safe'],
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
        $query = Receive::find();

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
            'yurak_qis_soni' => $this->yurak_qis_soni,
            'puls' => $this->puls,
            'receive_time' => $this->receive_time,
            'doctor_id' => $this->doctor_id,
            'direction' => $this->direction,
        ]);

        $query->andFilterWhere(['like', 'complaint', $this->complaint])
            ->andFilterWhere(['like', 'amnesis_norby', $this->amnesis_norby])
            ->andFilterWhere(['like', 'ahvol', $this->ahvol])
            ->andFilterWhere(['like', 'eye_status', $this->eye_status])
            ->andFilterWhere(['like', 'auskultatsiya', $this->auskultatsiya])
            ->andFilterWhere(['like', 'xirillash', $this->xirillash])
            ->andFilterWhere(['like', 'arterial_bosim_ong', $this->arterial_bosim_ong])
            ->andFilterWhere(['like', 'arterial_bosim_chap', $this->arterial_bosim_chap])
            ->andFilterWhere(['like', 'fibrilyatsiya', $this->fibrilyatsiya])
            ->andFilterWhere(['like', 'shovqin', $this->shovqin])
            ->andFilterWhere(['like', 'tili', $this->tili])
            ->andFilterWhere(['like', 'qorni', $this->qorni])
            ->andFilterWhere(['like', 'jigar', $this->jigar])
            ->andFilterWhere(['like', 'taloq', $this->taloq])
            ->andFilterWhere(['like', 'astsit', $this->astsit])
            ->andFilterWhere(['like', 'disease', $this->disease])
            ->andFilterWhere(['like', 'disease_level', $this->disease_level])
            ->andFilterWhere(['like', 'asorat', $this->asorat])
            ->andFilterWhere(['like', 'yuldosh', $this->yuldosh])
            ->andFilterWhere(['like', 'tavsiya', $this->tavsiya])
            ->andFilterWhere(['like', 'receive_state', $this->receive_state]);

        return $dataProvider;
    }
}
