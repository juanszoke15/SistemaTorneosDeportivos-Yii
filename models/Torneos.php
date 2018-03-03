<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "torneos".
 *
 * @property int $id_torneo
 * @property string $nombre_torneo
 * @property string $fecha_torneo
 */
class Torneos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'torneos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_torneo', 'fecha_torneo'], 'required'],
            [['fecha_torneo'], 'safe'],
            [['nombre_torneo'], 'string', 'max' => 60],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_torneo' => 'Id Torneo',
            'nombre_torneo' => Yii::t('app', 'Nombre de Torneo'),
            'fecha_torneo' => 'Fecha Torneo',
        ];
    }

    
}
