<?php

use yii\db\Migration;

/**
 * Class m230113_000009_Lib_AniManga
 */
class m230113_000009_Lib_AniManga extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%lib_animanga}}', [
            'Library_Id' => $this->integer()->notNull(),
            'AniManga_Id' => $this->integer()->notNull(),
            'Readed' => $this->boolean()->notNull()->defaultValue(0),
        ], $tableOptions);

        $this->addForeignKey('fk_lib_animanga_library', 'lib_animanga', 'Library_Id', 'library', 'IdLibrary');
        $this->addForeignKey('fk_lib_animanga_ani_manga', 'lib_animanga', 'AniManga_Id', 'ani_manga', 'IdAniManga');
        $this->addPrimaryKey('pk_lib_animanga', 'lib_animanga', ['Library_Id','Animanga_Id']);
    }

    public function down()
    {
        $this->dropTable('{{%lib_animanga}}');
    }
}
