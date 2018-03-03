<?php

use yii\db\Migration;

/**
 * Handles the creation of table `equipos`.
 */
class m180302_204428_create_equipos_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('equipos', [
            "id_equipo" => $this->primaryKey(),
            "nombre_equipo" => $this->string(50)->notNull(),
            "shortname_equipo"=> $this->string(4)->notNull(),
            "fecha_equipo"=> $this->datetime()->notNull(),
            "direccion_equipo"=> $this->string(255)->defaultValue("desconocida"),
            "email_equipo" => $this->string(30)->notNull(),
            "web_equipo"=> $this->string(30)->defaultValue("desconocida"),
            "user_equipo"=> $this->string(30)->notNull(),
            "password_equipo"=> $this->string(30)->notNull(),
            "authkey" => $this->string(10)->notNull(),
            "admin"=> $this->integer()->defaultValue(0)


        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('equipos');
    }
}
