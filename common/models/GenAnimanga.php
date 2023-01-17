<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "gen_animanga".
 *
 * @property int $Genre_Id
 * @property int $AniManga_Id
 *
 * @property AniManga $aniManga
 * @property Genre $genre
 */
class GenAnimanga extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gen_animanga';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Genre_Id', 'AniManga_Id'], 'required'],
            [['Genre_Id', 'AniManga_Id'], 'integer'],
            [['Genre_Id', 'AniManga_Id'], 'unique', 'targetAttribute' => ['Genre_Id', 'AniManga_Id']],
            [['AniManga_Id'], 'exist', 'skipOnError' => true, 'targetClass' => AniManga::class, 'targetAttribute' => ['AniManga_Id' => 'IdAniManga']],
            [['Genre_Id'], 'exist', 'skipOnError' => true, 'targetClass' => Genre::class, 'targetAttribute' => ['Genre_Id' => 'IdGenre']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Genre_Id' => 'Genre ID',
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
     * Gets query for [[Genre]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGenre()
    {
        return $this->hasOne(Genre::class, ['IdGenre' => 'Genre_Id']);
    }
}
