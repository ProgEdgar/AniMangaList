<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "author".
 *
 * @property int $IdAuthor
 * @property string $Name
 *
 * @property AniManga[] $aniMangas
 * @property AuthAnimanga[] $authAnimangas
 */
class Author extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'author';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Name'], 'required'],
            [['Name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IdAuthor' => 'Id Author',
            'Name' => 'Name',
        ];
    }

    /**
     * Gets query for [[AniMangas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAniMangas()
    {
        return $this->hasMany(AniManga::class, ['IdAniManga' => 'AniManga_Id'])->viaTable('auth_animanga', ['Author_Id' => 'IdAuthor']);
    }

    /**
     * Gets query for [[AuthAnimangas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAuthAnimangas()
    {
        return $this->hasMany(AuthAnimanga::class, ['Author_Id' => 'IdAuthor']);
    }
}
