<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Library $model */

$this->title = 'Create Library';
$this->params['breadcrumbs'][] = ['label' => 'Libraries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="library-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
