<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\ChEp $model */

$this->title = $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Ch Eps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="ch-ep-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'IdChEp' => $model->IdChEp], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'IdChEp' => $model->IdChEp], [
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
            'IdChEp',
            'Name',
            'Number',
            'Uploaded',
            'AniManga_Id',
        ],
    ]) ?>

</div>
