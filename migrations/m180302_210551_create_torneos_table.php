<?php

use yii\db\Migration;

/**
 * Handles the creation of table `torneos`.
 */
class m180302_210551_create_torneos_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('torneos', [
            "id_torneo" => $this->primaryKey(),
            "nombre_torneo"=> $this->string(60)->notNull(),
            "fecha_torneo" => $this->datetime()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('torneos');
    }
}
