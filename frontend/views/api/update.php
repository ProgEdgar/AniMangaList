<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Api $model */

$this->title = 'Update Api: ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Apis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'IdAPI' => $model->IdAPI]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="api-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
