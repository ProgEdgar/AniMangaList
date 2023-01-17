<?php

use yii\db\Migration;

/**
 * Class m230113_000008_ChEp
 */
class m230113_000008_ChEp extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%ch_ep}}', [
            'IdChEp' => $this->primaryKey(),
            'Name' => $this->string(100)->notNull(),
            'Number' => $this->float(18,2)->notNull(),
            'Uploaded' => $this->date()->notNull(),
            'AniManga_Id' => $this->integer()->notNull(),
        ], $tableOptions);
        
        $this->addForeignKey('fk_ch_ep_ani_manga', 'ch_ep', 'AniManga_Id', 'ani_manga', 'IdAniManga');
    }

    public function down()
    {
        $this->dropTable('{{%ch_ep}}');
    }
}
