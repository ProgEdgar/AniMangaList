<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Library $model */

$this->title = 'Update Library: ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Libraries', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'IdLibrary' => $model->IdLibrary]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="library-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
