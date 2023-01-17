<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "lib_animanga".
 *
 * @property int $Library_Id
 * @property int $AniManga_Id
 * @property int $Readed
 *
 * @property AniManga $aniManga
 * @property Library $library
 */
class LibAnimanga extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lib_animanga';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Library_Id', 'AniManga_Id'], 'required'],
            [['Library_Id', 'AniManga_Id', 'Readed'], 'integer'],
            [['Library_Id', 'AniManga_Id'], 'unique', 'targetAttribute' => ['Library_Id', 'AniManga_Id']],
            [['AniManga_Id'], 'exist', 'skipOnError' => true, 'targetClass' => AniManga::class, 'targetAttribute' => ['AniManga_Id' => 'IdAniManga']],
            [['Library_Id'], 'exist', 'skipOnError' => true, 'targetClass' => Library::class, 'targetAttribute' => ['Library_Id' => 'IdLibrary']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Library_Id' => 'Library ID',
            'AniManga_Id' => 'Ani Manga ID',
            'Readed' => 'Readed',
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
     * Gets query for [[Library]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLibrary()
    {
        return $this->hasOne(Library::class, ['IdLibrary' => 'Library_Id']);
    }
}
