<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%teacher}}`.
 */
class m211117_125711_create_teacher_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{_teacher}}', [
            'id' => $this->primaryKey(),
            'full_name' => $this->string(255)->notNull(),
            'img' => $this->string(255),
            'date_birth' => $this->tinyInteger(),
            'gender' => $this->tinyInteger(1),
            'phone' => $this->string('255'),
            'address' => $this->string(255),
            'status' => $this->tinyInteger(1)->notNull()->defaultValue(1),
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
        $this->dropTable('{{_teacher}}');
    }
}
