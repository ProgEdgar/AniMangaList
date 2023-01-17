<?php

use yii\db\Migration;

/**
 * Class m230113_185651_Genre
 */
class m230113_000005_Genre extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%genre}}', [
            'IdGenre' => $this->primaryKey(),
            'Name' => $this->string()->notNull(),
        ], $tableOptions);
        
    }

    public function down()
    {
        $this->dropTable('{{%genre}}');
    }
}
