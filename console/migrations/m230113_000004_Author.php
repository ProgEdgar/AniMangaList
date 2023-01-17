<?php

use yii\db\Migration;

/**
 * Class m230113_000004_Author
 */
class m230113_000004_Author extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%author}}', [
            'IdAuthor' => $this->primaryKey(),
            'Name' => $this->string()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%author}}');
    }
}
