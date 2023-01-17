<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\AuthAnimanga $model */

$this->title = 'Create Auth Animanga';
$this->params['breadcrumbs'][] = ['label' => 'Auth Animangas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auth-animanga-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
