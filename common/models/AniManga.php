<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ani_manga".
 *
 * @property int $IdAniManga
 * @property string $Title
 * @property string $AlternativeTitle
 * @property string $OriginalTitle
 * @property string|null $Image
 * @property int $Status
 * @property string $ReleaseDate
 * @property float|null $Rating
 * @property string|null $Description
 * @property int $AniManga
 * @property int $Code
 * @property int $API_Id
 *
 * @property Api $aPI
 * @property AuthAnimanga[] $authAnimangas
 * @property Author[] $authors
 * @property ChEp[] $chEps
 * @property GenAnimanga[] $genAnimangas
 * @property Genre[] $genres
 * @property LibAnimanga[] $libAnimangas
 * @property Library[] $libraries
 */
class AniManga extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ani_manga';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Title', 'AlternativeTitle', 'OriginalTitle', 'ReleaseDate', 'Code', 'API_Id'], 'required'],
            [['Status', 'AniManga', 'Code', 'API_Id'], 'integer'],
            [['ReleaseDate'], 'safe'],
            [['Rating'], 'number'],
            [['Description'], 'string'],
            [['Title', 'AlternativeTitle', 'OriginalTitle'], 'string', 'max' => 100],
            [['Image'], 'string', 'max' => 50],
            [['API_Id'], 'exist', 'skipOnError' => true, 'targetClass' => Api::class, 'targetAttribute' => ['API_Id' => 'IdAPI']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IdAniManga' => 'Id Ani Manga',
            'Title' => 'Title',
            'AlternativeTitle' => 'Alternative Title',
            'OriginalTitle' => 'Original Title',
            'Image' => 'Image',
            'Status' => 'Status',
            'ReleaseDate' => 'Release Date',
            'Rating' => 'Rating',
            'Description' => 'Description',
            'AniManga' => 'Ani Manga',
            'Code' => 'Code',
            'API_Id' => 'Api ID',
        ];
    }

    /**
     * Gets query for [[API]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAPI()
    {
        return $this->hasOne(Api::class, ['IdAPI' => 'API_Id']);
    }

    /**
     * Gets query for [[AuthAnimangas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAuthAnimangas()
    {
        return $this->hasMany(AuthAnimanga::class, ['AniManga_Id' => 'IdAniManga']);
    }

    /**
     * Gets query for [[Authors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAuthors()
    {
        return $this->hasMany(Author::class, ['IdAuthor' => 'Author_Id'])->viaTable('auth_animanga', ['AniManga_Id' => 'IdAniManga']);
    }

    /**
     * Gets query for [[ChEps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getChEps()
    {
        return $this->hasMany(ChEp::class, ['AniManga_Id' => 'IdAniManga']);
    }

    /**
     * Gets query for [[GenAnimangas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGenAnimangas()
    {
        return $this->hasMany(GenAnimanga::class, ['AniManga_Id' => 'IdAniManga']);
    }

    /**
     * Gets query for [[Genres]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGenres()
    {
        return $this->hasMany(Genre::class, ['IdGenre' => 'Genre_Id'])->viaTable('gen_animanga', ['AniManga_Id' => 'IdAniManga']);
    }

    /**
     * Gets query for [[LibAnimangas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLibAnimangas()
    {
        return $this->hasMany(LibAnimanga::class, ['AniManga_Id' => 'IdAniManga']);
    }

    /**
     * Gets query for [[Libraries]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLibraries()
    {
        return $this->hasMany(Library::class, ['IdLibrary' => 'Library_Id'])->viaTable('lib_animanga', ['AniManga_Id' => 'IdAniManga']);
    }
}
