<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\LibAnimanga $model */

$this->title = $model->Library_Id;
$this->params['breadcrumbs'][] = ['label' => 'Lib Animangas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="lib-animanga-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Library_Id' => $model->Library_Id, 'AniManga_Id' => $model->AniManga_Id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Library_Id' => $model->Library_Id, 'AniManga_Id' => $model->AniManga_Id], [
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
            'Library_Id',
            'AniManga_Id',
            'Readed',
        ],
    ]) ?>

</div>
