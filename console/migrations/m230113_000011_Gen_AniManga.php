<?php

use yii\db\Migration;

/**
 * Class m230113_000011_Gen_AniManga
 */
class m230113_000011_Gen_AniManga extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%gen_animanga}}', [
            'Genre_Id' => $this->integer()->notNull(),
            'AniManga_Id' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->addForeignKey('fk_gen_animanga_genre', 'gen_animanga', 'Genre_Id', 'genre', 'IdGenre');
        $this->addForeignKey('fk_gen_animanga_ani_manga', 'gen_animanga', 'AniManga_Id', 'ani_manga', 'IdAniManga');
        $this->addPrimaryKey('pk_gen_animanga', 'gen_animanga', ['Genre_Id','AniManga_Id']);
    }

    public function down()
    {
        $this->dropTable('{{%gen_animanga}}');
    }
}
