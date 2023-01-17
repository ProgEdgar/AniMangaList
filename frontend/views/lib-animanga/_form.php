<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\LibAnimanga $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="lib-animanga-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Library_Id')->textInput() ?>

    <?= $form->field($model, 'AniManga_Id')->textInput() ?>

    <?= $form->field($model, 'Readed')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
