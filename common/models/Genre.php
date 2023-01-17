<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "genre".
 *
 * @property int $IdGenre
 * @property string $Name
 *
 * @property AniManga[] $aniMangas
 * @property GenAnimanga[] $genAnimangas
 */
class Genre extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'genre';
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
            'IdGenre' => 'Id Genre',
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
        return $this->hasMany(AniManga::class, ['IdAniManga' => 'AniManga_Id'])->viaTable('gen_animanga', ['Genre_Id' => 'IdGenre']);
    }

    /**
     * Gets query for [[GenAnimangas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGenAnimangas()
    {
        return $this->hasMany(GenAnimanga::class, ['Genre_Id' => 'IdGenre']);
    }
}
