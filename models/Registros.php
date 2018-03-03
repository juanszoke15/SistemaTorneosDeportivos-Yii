<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "registros".
 *
 * @property int $id_registro
 * @property int $id_torneo
 * @property int $id_equipo
 * @property int $categoria
 * @property int $cant_participantes
 */
class Registros extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'registros';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_torneo', 'id_equipo', 'categoria', 'cant_participantes'], 'required'],
            [['id_torneo', 'id_equipo', 'categoria', 'cant_participantes'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_registro' => 'Id Registro',
            'id_torneo' => 'Id Torneo',
            'id_equipo' => 'Id Equipo',
            'categoria' => 'Categoria',
            'cant_participantes' => 'Cant Participantes',
        ];
    }

     public function getTorneo()
    {
        return $this->hasOne(Torneos::className(), ['id_torneo' => 'id_torneo']);
    }
}
