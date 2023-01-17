<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Genre $model */

$this->title = 'Update Genre: ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Genres', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'IdGenre' => $model->IdGenre]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="genre-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
