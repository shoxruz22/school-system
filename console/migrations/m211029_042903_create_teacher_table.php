<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%teacher}}`.
 */
class m211029_042903_create_teacher_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%teacher}}', [
            'id' => $this->primaryKey(),
            'teacher_name'=>$this->string(255)->notNull(),
            'age'=>$this->string(255)->notNull(),
            'phone_number'=>$this->string(255)->notNull(),
            'address'=>$this->string(255)->notNull(),
            'gender'=>$this->string(255)->notNull(),
            'email'=>$this->string(255)->notNull(),
            'subject'=>$this->string(255)->notNull(),
            'status'=>$this->tinyInteger(1)->notNull()->defaultValue(1),
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
        $this->dropTable('{{%teacher}}');
    }
}
