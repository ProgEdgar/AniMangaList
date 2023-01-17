<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\LibAnimanga $model */

$this->title = 'Create Lib Animanga';
$this->params['breadcrumbs'][] = ['label' => 'Lib Animangas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lib-animanga-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
