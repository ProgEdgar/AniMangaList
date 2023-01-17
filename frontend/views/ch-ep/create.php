<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\ChEp $model */

$this->title = 'Create Ch Ep';
$this->params['breadcrumbs'][] = ['label' => 'Ch Eps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ch-ep-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
