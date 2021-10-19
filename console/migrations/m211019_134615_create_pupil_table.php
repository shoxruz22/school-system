<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%pupil}}`.
 */
class m211019_134615_create_pupil_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%pupil}}', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%pupil}}');
    }
}
