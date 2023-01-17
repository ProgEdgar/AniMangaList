<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "library".
 *
 * @property int $IdLibrary
 * @property string $Name
 * @property int $User_Id
 *
 * @property AniManga[] $aniMangas
 * @property LibAnimanga[] $libAnimangas
 * @property User $user
 */
class Library extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'library';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Name', 'User_Id'], 'required'],
            [['User_Id'], 'integer'],
            [['Name'], 'string', 'max' => 255],
            [['User_Id'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['User_Id' => 'IdUser']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IdLibrary' => 'Id Library',
            'Name' => 'Name',
            'User_Id' => 'User ID',
        ];
    }

    /**
     * Gets query for [[AniMangas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAniMangas()
    {
        return $this->hasMany(AniManga::class, ['IdAniManga' => 'AniManga_Id'])->viaTable('lib_animanga', ['Library_Id' => 'IdLibrary']);
    }

    /**
     * Gets query for [[LibAnimangas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLibAnimangas()
    {
        return $this->hasMany(LibAnimanga::class, ['Library_Id' => 'IdLibrary']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::class, ['IdUser' => 'User_Id']);
    }
}
