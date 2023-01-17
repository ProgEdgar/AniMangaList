<?php

use yii\db\Migration;

class m230113_000001_User extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%user}}', [
            'IdUser' => $this->primaryKey(),
            'Username' => $this->string()->notNull()->unique(),
            'Email' => $this->string()->notNull()->unique(),
            'Gender' => "ENUM('F','M','U') NOT NULL",
            'Image' => $this->string(50),

            'auth_key' => $this->string(100)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),

            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => 'DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL',
            'updated_at' => 'DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP NOT NULL',
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%user}}');
    }
}
