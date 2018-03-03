<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Torneos;

/**
 * TorneosSearch represents the model behind the search form of `app\models\Torneos`.
 */
class TorneosSearch extends Torneos
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_torneo'], 'integer'],
            [['nombre_torneo', 'fecha_torneo'], 'safe'],
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
        $query = Torneos::find();

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
            'id_torneo' => $this->id_torneo,
            'fecha_torneo' => $this->fecha_torneo,
        ]);

        $query->andFilterWhere(['like', 'nombre_torneo', $this->nombre_torneo]);

        return $dataProvider;
    }
}
