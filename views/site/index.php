<?php
use yii\helpers\Html;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $time string */
$this->title = 'Yii2 Pjax Refresh Button';
?>
<div class="site-index">
    <?php Pjax::begin(); ?>
    <?= Html::a("Refresh", ['site/index'], ['class' => 'btn btn-lg btn-primary']) ?>
    <h1>Current time: <?= $time ?></h1>
    <?php Pjax::end(); ?>



    <hr />
    <p>
        views\site\index.php:<br>
        <pre style="background:rgba(238,238,238,0.92);color:#000">&lt;?php <span style="color:#33f;font-weight:700">Pjax</span><span style="color:#00f">::</span>begin(); ?>
&lt;?= <span style="color:#33f;font-weight:700">Html</span><span style="color:#00f">::</span>a(<span style="color:#093">"Refresh"</span>, [<span style="color:#093">'site/index'</span>], [<span style="color:#093">'class'</span> <span style="color:#00f">=></span> <span style="color:#093">'btn btn-lg btn-primary'</span>]);?>
&lt;h1>Current time: &lt;?= $time ?>&lt;/h1>
&lt;?php <span style="color:#33f;font-weight:700">Pjax</span><span style="color:#00f">::</span>end(); ?>
</pre>
    <br>
    controllers\SiteController.php:<br>
    <pre style="background:rgba(238,238,238,0.92);color:#000">
<span style="font-weight:700">public </span><span style="font-weight:700">function</span> <span style="color:#ff8000">actionIndex</span>()
{
    $time <span style="color:#00f">=</span> <span style="color:#33f;font-weight:700">date</span>(<span style="color:#093">'H:i:s'</span>);
<span style="color:#00f">    return</span> $this<span style="color:#00f">-></span>render(<span style="color:#093">'index'</span>, [<span style="color:#093">'time'</span> <span style="color:#00f">=></span> $time]);
}
</pre>
    </p>

</div>

