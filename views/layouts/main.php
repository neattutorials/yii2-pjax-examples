<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?> - Neat Tutorials</title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>
    <div class="wrap">
        <?php
            NavBar::begin([
                'brandLabel' => 'Yii2 Pjax Examples',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    ['label' => 'Refresh', 'url' => ['/site/index']],
                    ['label' => 'Auto Refresh', 'url' => ['/site/auto-refresh']],
                    ['label' => 'Time/Date', 'url' => ['/site/time']],
                    ['label' => 'Multiple', 'url' => ['/site/multiple']],
                    ['label' => 'Form Submission', 'url' => ['/site/form-submission']],
                    ['label' => 'Vote', 'url' => ['/site/vote']],
                    ['label' => 'GridView', 'url' => ['/php-version/index']],

                ],
            ]);
            NavBar::end();
        ?>

        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p class="pull-left">&copy; <?= Html::a('Neat Tutorials', 'http://blog.neattutorials.com') ?> <?= date('Y') ?></p>
            <p class="pull-right"><?= Yii::powered() ?> <?= Yii::getVersion() ?></p>
        </div>
    </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
