<?php

use yii\db\Migration;

/**
 * Class m230113_000007_Library
 */
class m230113_000007_Library extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%library}}', [
            'IdLibrary' => $this->primaryKey(),
            'Name' => $this->string()->notNull(),
            'User_Id' => $this->integer()->notNull(),
        ], $tableOptions);
        
        $this->addForeignKey('fk_library_api', 'library', 'User_Id', 'user', 'IdUser');
    }

    public function down()
    {
        $this->dropTable('{{%library}}');
    }
}
