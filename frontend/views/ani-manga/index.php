<?php

use common\models\AniManga;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Ani Mangas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ani-manga-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ani Manga', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdAniManga',
            'Title',
            'AlternativeTitle',
            'OriginalTitle',
            'Image',
            //'Status',
            //'ReleaseDate',
            //'Rating',
            //'Description:ntext',
            //'AniManga',
            //'Code',
            //'API_Id',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, AniManga $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'IdAniManga' => $model->IdAniManga]);
                 }
            ],
        ],
    ]); ?>


</div>
