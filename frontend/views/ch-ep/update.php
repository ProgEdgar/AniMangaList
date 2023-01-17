<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\ChEp $model */

$this->title = 'Update Ch Ep: ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Ch Eps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'IdChEp' => $model->IdChEp]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ch-ep-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
