<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PhpVersion */

$this->title = 'Update Php Version: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Php Versions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="php-version-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
