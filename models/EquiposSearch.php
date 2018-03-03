<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Equipos;

/**
 * EquiposSearch represents the model behind the search form of `app\models\Equipos`.
 */
class EquiposSearch extends Equipos
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_equipo', 'admin'], 'integer'],
            [['nombre_equipo', 'shortname_equipo', 'fecha_equipo', 'direccion_equipo', 'email_equipo', 'web_equipo', 'user_equipo', 'password_equipo', 'authkey'], 'safe'],
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
        $query = Equipos::find();

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
            'id_equipo' => $this->id_equipo,
            'fecha_equipo' => $this->fecha_equipo,
            'admin' => $this->admin,
        ]);

        $query->andFilterWhere(['like', 'nombre_equipo', $this->nombre_equipo])
            ->andFilterWhere(['like', 'shortname_equipo', $this->shortname_equipo])
            ->andFilterWhere(['like', 'direccion_equipo', $this->direccion_equipo])
            ->andFilterWhere(['like', 'email_equipo', $this->email_equipo])
            ->andFilterWhere(['like', 'web_equipo', $this->web_equipo])
            ->andFilterWhere(['like', 'user_equipo', $this->user_equipo])
            ->andFilterWhere(['like', 'password_equipo', $this->password_equipo])
            ->andFilterWhere(['like', 'authkey', $this->authkey]);

        return $dataProvider;
    }
}
