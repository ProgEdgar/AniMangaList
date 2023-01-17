<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\AuthAnimanga $model */

$this->title = 'Update Auth Animanga: ' . $model->Author_Id;
$this->params['breadcrumbs'][] = ['label' => 'Auth Animangas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Author_Id, 'url' => ['view', 'Author_Id' => $model->Author_Id, 'AniManga_Id' => $model->AniManga_Id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="auth-animanga-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
