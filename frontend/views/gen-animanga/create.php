<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\GenAnimanga $model */

$this->title = 'Create Gen Animanga';
$this->params['breadcrumbs'][] = ['label' => 'Gen Animangas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gen-animanga-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
