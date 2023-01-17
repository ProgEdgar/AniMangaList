<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "auth_animanga".
 *
 * @property int $Author_Id
 * @property int $AniManga_Id
 *
 * @property AniManga $aniManga
 * @property Author $author
 */
class AuthAnimanga extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'auth_animanga';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Author_Id', 'AniManga_Id'], 'required'],
            [['Author_Id', 'AniManga_Id'], 'integer'],
            [['Author_Id', 'AniManga_Id'], 'unique', 'targetAttribute' => ['Author_Id', 'AniManga_Id']],
            [['AniManga_Id'], 'exist', 'skipOnError' => true, 'targetClass' => AniManga::class, 'targetAttribute' => ['AniManga_Id' => 'IdAniManga']],
            [['Author_Id'], 'exist', 'skipOnError' => true, 'targetClass' => Author::class, 'targetAttribute' => ['Author_Id' => 'IdAuthor']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Author_Id' => 'Author ID',
            'AniManga_Id' => 'Ani Manga ID',
        ];
    }

    /**
     * Gets query for [[AniManga]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAniManga()
    {
        return $this->hasOne(AniManga::class, ['IdAniManga' => 'AniManga_Id']);
    }

    /**
     * Gets query for [[Author]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(Author::class, ['IdAuthor' => 'Author_Id']);
    }
}
