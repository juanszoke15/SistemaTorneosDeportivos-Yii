<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Registros;

/**
 * RegistrosSearch represents the model behind the search form of `app\models\Registros`.
 */
class RegistrosSearch extends Registros
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_registro', 'id_torneo', 'id_equipo', 'categoria', 'cant_participantes'], 'integer'],
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
        $query = Registros::find();

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
            'id_registro' => $this->id_registro,
            'id_torneo' => $this->id_torneo,
            'id_equipo' => $this->id_equipo,
            'categoria' => $this->categoria,
            'cant_participantes' => $this->cant_participantes,
        ]);

        return $dataProvider;
    }
}
