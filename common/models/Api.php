<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "api".
 *
 * @property int $IdAPI
 * @property string $Name
 * @property string $Link
 *
 * @property AniManga[] $aniMangas
 */
class Api extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'api';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Name', 'Link'], 'required'],
            [['Name'], 'string', 'max' => 50],
            [['Link'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IdAPI' => 'Id Api',
            'Name' => 'Name',
            'Link' => 'Link',
        ];
    }

    /**
     * Gets query for [[AniMangas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAniMangas()
    {
        return $this->hasMany(AniManga::class, ['API_Id' => 'IdAPI']);
    }
}
