<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Api $model */

$this->title = 'Create Api';
$this->params['breadcrumbs'][] = ['label' => 'Apis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="api-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
