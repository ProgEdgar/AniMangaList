<?php

use yii\db\Migration;

/**
 * Class m230113_000003_API
 */
class m230113_000003_API extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%api}}', [
            'IdAPI' => $this->primaryKey(),
            'Name' => $this->string(50)->notNull(),
            'Link' => $this->string()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%api}}');
    }
}
