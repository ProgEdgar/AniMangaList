<?php

use yii\db\Migration;

/**
 * Class m230113_000006_AniManga
 */
class m230113_000006_AniManga extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%ani_manga}}', [
            'IdAniManga' => $this->primaryKey(),
            'Title' => $this->string(100)->notNull(),
            'AlternativeTitle' => $this->string(100)->notNull(),
            'OriginalTitle' => $this->string(100)->notNull(),
            'Image' => $this->string(50),
            'Status' => $this->boolean()->notNull()->defaultValue(0),
            'ReleaseDate' => $this->date()->notNull(),
            'Rating' => $this->float(18,2),
            'Description' => $this->text(),
            'AniManga' => $this->boolean()->notNull()->defaultValue(0),
            'Code' => $this->integer()->notNull(),
            'API_Id' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->addForeignKey('fk_ani_manga_api', 'ani_manga', 'API_Id', 'api', 'IdAPI');
    }

    public function down()
    {
        $this->dropTable('{{%ani_manga}}');
    }
}
