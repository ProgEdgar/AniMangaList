<?php

use yii\db\Migration;

/**
 * Class m230113_185629_User
 */
class m230113_185629_User extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if($this->db->driveName === "mysql") {
            $tableOptions = "CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB";
        }

        $this->createTable('{{user}}', [
            'IdUser' => $this->primaryKey(),
            'Username' => $this->string(50)->notNull(),
            'Image' => $this->string(100),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{user}}');
    }
}
