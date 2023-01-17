<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\GenAnimanga $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="gen-animanga-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Genre_Id')->textInput() ?>

    <?= $form->field($model, 'AniManga_Id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
