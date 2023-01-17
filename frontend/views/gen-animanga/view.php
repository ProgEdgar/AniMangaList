<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\GenAnimanga $model */

$this->title = $model->Genre_Id;
$this->params['breadcrumbs'][] = ['label' => 'Gen Animangas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="gen-animanga-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Genre_Id' => $model->Genre_Id, 'AniManga_Id' => $model->AniManga_Id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Genre_Id' => $model->Genre_Id, 'AniManga_Id' => $model->AniManga_Id], [
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
            'Genre_Id',
            'AniManga_Id',
        ],
    ]) ?>

</div>
