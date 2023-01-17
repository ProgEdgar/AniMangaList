<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\GenAnimanga $model */

$this->title = 'Update Gen Animanga: ' . $model->Genre_Id;
$this->params['breadcrumbs'][] = ['label' => 'Gen Animangas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Genre_Id, 'url' => ['view', 'Genre_Id' => $model->Genre_Id, 'AniManga_Id' => $model->AniManga_Id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="gen-animanga-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
