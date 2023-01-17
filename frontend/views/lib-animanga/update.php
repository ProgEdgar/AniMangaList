<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\LibAnimanga $model */

$this->title = 'Update Lib Animanga: ' . $model->Library_Id;
$this->params['breadcrumbs'][] = ['label' => 'Lib Animangas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Library_Id, 'url' => ['view', 'Library_Id' => $model->Library_Id, 'AniManga_Id' => $model->AniManga_Id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lib-animanga-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
