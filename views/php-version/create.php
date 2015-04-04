<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PhpVersion */

$this->title = 'Create Php Version';
$this->params['breadcrumbs'][] = ['label' => 'Php Versions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="php-version-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
