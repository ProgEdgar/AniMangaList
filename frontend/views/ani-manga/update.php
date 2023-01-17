<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\AniManga $model */

$this->title = 'Update Ani Manga: ' . $model->Title;
$this->params['breadcrumbs'][] = ['label' => 'Ani Mangas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Title, 'url' => ['view', 'IdAniManga' => $model->IdAniManga]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ani-manga-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
