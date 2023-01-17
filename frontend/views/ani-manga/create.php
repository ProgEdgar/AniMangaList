<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\AniManga $model */

$this->title = 'Create Ani Manga';
$this->params['breadcrumbs'][] = ['label' => 'Ani Mangas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ani-manga-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
