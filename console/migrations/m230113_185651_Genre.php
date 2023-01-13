<?php

use yii\db\Migration;

/**
 * Class m230113_185651_Genre
 */
class m230113_185651_Genre extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230113_185651_Genre cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230113_185651_Genre cannot be reverted.\n";

        return false;
    }
    */
}
