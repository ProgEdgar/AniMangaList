<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\ChEp $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="ch-ep-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Number')->textInput() ?>

    <?= $form->field($model, 'Uploaded')->textInput() ?>

    <?= $form->field($model, 'AniManga_Id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
