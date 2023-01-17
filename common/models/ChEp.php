<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ch_ep".
 *
 * @property int $IdChEp
 * @property string $Name
 * @property float $Number
 * @property string $Uploaded
 * @property int $AniManga_Id
 *
 * @property AniManga $aniManga
 */
class ChEp extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ch_ep';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Name', 'Number', 'Uploaded', 'AniManga_Id'], 'required'],
            [['Number'], 'number'],
            [['Uploaded'], 'safe'],
            [['AniManga_Id'], 'integer'],
            [['Name'], 'string', 'max' => 100],
            [['AniManga_Id'], 'exist', 'skipOnError' => true, 'targetClass' => AniManga::class, 'targetAttribute' => ['AniManga_Id' => 'IdAniManga']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IdChEp' => 'Id Ch Ep',
            'Name' => 'Name',
            'Number' => 'Number',
            'Uploaded' => 'Uploaded',
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
}
