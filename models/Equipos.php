<?php

namespace app\models;

use Yii;
use app\models\User;
/**
 * This is the model class for table "equipos".
 *
 * @property int $id_equipo
 * @property string $nombre_equipo
 * @property string $shortname_equipo
 * @property string $fecha_equipo
 * @property string $direccion_equipo
 * @property string $email_equipo
 * @property string $web_equipo
 * @property string $user_equipo
 * @property string $password_equipo
 * @property string $authkey
 * @property int $admin
 */
class Equipos extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'equipos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_equipo', 'shortname_equipo', 'fecha_equipo', 'email_equipo', 'user_equipo', 'password_equipo', 'authkey'], 'required'],
            [['fecha_equipo'], 'safe'],
            [['admin'], 'integer'],
            [['nombre_equipo'], 'string', 'max' => 50],
            [['shortname_equipo'], 'string', 'max' => 4],
            [['direccion_equipo'], 'string', 'max' => 255],
            [['email_equipo', 'web_equipo', 'user_equipo', 'password_equipo'], 'string', 'max' => 30],
            [['authkey'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_equipo' => 'Id Equipo',
            'nombre_equipo' =>Yii::t('app', 'Nombre de Equipo'),
            'shortname_equipo' => 'Shortname Equipo',
            'fecha_equipo' => 'Fecha Equipo',
            'direccion_equipo' => 'Direccion Equipo',
            'email_equipo' => 'Email Equipo',
            'web_equipo' => 'Web Equipo',
            'user_equipo' => 'User Equipo',
            'password_equipo' => 'Password Equipo',
            'authkey' => 'Authkey',
            'admin' => 'Admin',
        ];
    }

    public function getAuthKey(){
        return $this->authkey;
    }

    public function getId(){
        return $this->id_equipo;
    }

    public function getName(){
        return $this->nombre_equipo;
    }

    public function validateAuthKey($authkey){
        return $this->authkey === $authkey;
    }

    public static function findIdentity($id){
        return self::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null){
            throw new \yii\base\NotSupportedException();
    }

    public static function findByUsername($username){
        return self::findOne(['user_equipo' => $username ]);
    }

    public function validatePassword($Password){
        return $this->password_equipo === $Password;
    }
}
