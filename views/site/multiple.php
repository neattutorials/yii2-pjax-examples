<?php
use yii\helpers\Html;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $randomString string */
/* @var $randomKey string */
$this->title = 'Yii2 Pjax Multiple Example';
?>
<div class="site-index">
    <div class="row">
<div class="col-sm-12 col-md-6">
    <?php Pjax::begin(); ?>
    <?= Html::a("Generate Random String", ['site/multiple'], ['class' => 'btn btn-lg btn-primary']) ?>
    <h3><?= $randomString ?></h3>
    <?php Pjax::end(); ?>
</div>

<div class="col-sm-12 col-md-6">
    <?php Pjax::begin(); ?>
    <?= Html::a("Generate Random Key", ['site/multiple'], ['class' => 'btn btn-lg btn-primary']) ?>
    <h3><?= $randomKey ?><h3>
    <?php Pjax::end(); ?>
</div>

    </div>



    <hr />
    <p>
        views\site\multiple.php:<br>
        <pre style="background:rgba(238,238,238,0.92);color:#000">&lt;div class="col-sm-12 col-md-6">
    &lt;?php <span style="color:#33f;font-weight:700">Pjax</span><span style="color:#00f">::</span>begin(); ?>
    &lt;?= <span style="color:#33f;font-weight:700">Html</span><span style="color:#00f">::</span>a(<span style="color:#093">"Generate Random String"</span>, [<span style="color:#093">'site/multiple'</span>], [<span style="color:#093">'class'</span> <span style="color:#00f">=></span> <span style="color:#093">'btn btn-lg btn-primary'</span>]) ?>
    &lt;h3>&lt;?= $randomString ?>&lt;/h3>
    &lt;?php <span style="color:#33f;font-weight:700">Pjax</span><span style="color:#00f">::</span>end(); ?>
&lt;/div>

&lt;div class="col-sm-12 col-md-6">
    &lt;?php <span style="color:#33f;font-weight:700">Pjax</span><span style="color:#00f">::</span>begin(); ?>
    &lt;?= <span style="color:#33f;font-weight:700">Html</span><span style="color:#00f">::</span>a(<span style="color:#093">"Generate Random Key"</span>, [<span style="color:#093">'site/multiple'</span>], [<span style="color:#093">'class'</span> <span style="color:#00f">=></span> <span style="color:#093">'btn btn-lg btn-primary'</span>]) ?>
    &lt;h3>&lt;?= $randomKey ?>&lt;h3>
    &lt;?php <span style="color:#33f;font-weight:700">Pjax</span><span style="color:#00f">::</span>end(); ?>
&lt;/div>
</pre>
    <br>
    controllers\SiteController.php:<br>
    <pre style="background:rgba(238,238,238,0.92);color:#000">
<span style="font-weight:700">public </span><span style="font-weight:700">function</span> <span style="color:#ff8000">actionMultiple</span>()
{
    $security <span style="color:#00f">=</span> <span style="color:#00f">new</span> <span style="color:#33f;font-weight:700">Security</span>();
    $randomString <span style="color:#00f">=</span> $security<span style="color:#00f">-></span>generateRandomString();
    $randomKey <span style="color:#00f">=</span> $security<span style="color:#00f">-></span>generateRandomKey();
<span style="color:#00f">    return</span> $this<span style="color:#00f">-></span>response(<span style="color:#093">'multiple'</span>, [
        <span style="color:#093">'randomString'</span> <span style="color:#00f">=></span> $randomString,
        <span style="color:#093">'randomKey'</span> <span style="color:#00f">=></span> $randomKey,
    ]);
}

<span style="font-weight:700">public </span><span style="font-weight:700">function</span> <span style="color:#ff8000">response</span>($view, $params)
{
<span style="color:#00f">    if</span> (<span style="color:#33f;font-weight:700">Yii</span><span style="color:#00f">::</span>$app<span style="color:#00f">-></span>request<span style="color:#00f">-></span>isPjax) {
<span style="color:#00f">        return</span> $this<span style="color:#00f">-></span>renderAjax($view, $params);
    }
<span style="color:#00f">    return</span> $this<span style="color:#00f">-></span>render($view, $params);
}
</pre>
    </p>

</div>

