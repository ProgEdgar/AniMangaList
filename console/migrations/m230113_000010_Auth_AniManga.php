<?php

use yii\db\Migration;

/**
 * Class m230113_000010_Auth_AniManga
 */
class m230113_000010_Auth_AniManga extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%auth_animanga}}', [
            'Author_Id' => $this->integer()->notNull(),
            'AniManga_Id' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->addForeignKey('fk_auth_animanga_author', 'auth_animanga', 'Author_Id', 'author', 'IdAuthor');
        $this->addForeignKey('fk_auth_animanga_ani_manga', 'auth_animanga', 'AniManga_Id', 'ani_manga', 'IdAniManga');
        $this->addPrimaryKey('pk_auth_animanga', 'auth_animanga', ['Author_Id','AniManga_Id']);
    }

    public function down()
    {
        $this->dropTable('{{%auth_animanga}}');
    }
}
