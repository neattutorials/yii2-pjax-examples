<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PhpVersion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="php-version-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'branch')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'version')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'release_date')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
