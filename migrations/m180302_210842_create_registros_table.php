<?php

use yii\db\Migration;

/**
 * Handles the creation of table `registros`.
 */
class m180302_210842_create_registros_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('registros', [
            "id_registro" => $this->primaryKey(),
            "id_torneo" => $this->integer()->notNull(),
            "id_equipo" => $this->integer()->notNull(),
            "categoria" => $this->integer()->notNull(),
            "cant_participantes" => $this->integer()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('registros');
    }
}
