<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%room}}`.
 */
class m211027_164025_create_room_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%room}}', [
            'id' => $this->primaryKey(),
            'number_rooms'=> $this->tinyInteger(10)->notNull(),
            'number_of_students'=>$this->tinyInteger(20)->notNull(),
            'room_type'=>$this->string(16)->notNull(),
            'status'=>$this->tinyInteger(1)->notNull()->defaultValue(1)->comment('0 -> False, 1 -> true'),
            'is_deleted' => $this->tinyInteger(1)->notNull()->defaultValue(0),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'created_by' => $this->integer()->notNull(),
            'updated_by' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%room}}');
    }
}
