<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\AniManga $model */

$this->title = $model->Title;
$this->params['breadcrumbs'][] = ['label' => 'Ani Mangas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="ani-manga-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'IdAniManga' => $model->IdAniManga], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'IdAniManga' => $model->IdAniManga], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'IdAniManga',
            'Title',
            'AlternativeTitle',
            'OriginalTitle',
            'Image',
            'Status',
            'ReleaseDate',
            'Rating',
            'Description:ntext',
            'AniManga',
            'Code',
            'API_Id',
        ],
    ]) ?>

</div>
