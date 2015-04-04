<?php
use yii\helpers\Html;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $response string */
$this->title = 'Yii2 Pjax Date/Time Example';
?>
<div class="site-index">
    <?php Pjax::begin(); ?>
    <?= Html::a("Show Time", ['site/time'], ['class' => 'btn btn-lg btn-primary']) ?>
    <?= Html::a("Show Date", ['site/date'], ['class' => 'btn btn-lg btn-success']) ?>
    <h1>It's: <?= $response ?></h1>
    <?php Pjax::end(); ?>



    <hr />
    <p>
        views\site\time-date.php:<br>
        <pre style="background:rgba(238,238,238,0.92);color:#000">&lt;?php <span style="color:#33f;font-weight:700">Pjax</span><span style="color:#00f">::</span>begin(); ?>
&lt;?= <span style="color:#33f;font-weight:700">Html</span><span style="color:#00f">::</span>a(<span style="color:#093">"Show Time"</span>, [<span style="color:#093">'site/time'</span>], [<span style="color:#093">'class'</span> <span style="color:#00f">=></span> <span style="color:#093">'btn btn-lg btn-primary'</span>]) ?>
&lt;?= <span style="color:#33f;font-weight:700">Html</span><span style="color:#00f">::</span>a(<span style="color:#093">"Show Date"</span>, [<span style="color:#093">'site/date'</span>], [<span style="color:#093">'class'</span> <span style="color:#00f">=></span> <span style="color:#093">'btn btn-lg btn-success'</span>]) ?>
&lt;h1>It's: &lt;?= $response ?>&lt;/h1>
&lt;?php <span style="color:#33f;font-weight:700">Pjax</span><span style="color:#00f">::</span>end(); ?>
</pre>
    <br>
    controllers\SiteController.php:<br>
    <pre style="background:rgba(238,238,238,0.92);color:#000">
<span style="font-weight:700">public </span><span style="font-weight:700">function</span> <span style="color:#ff8000">actionTime</span>()
{
<span style="color:#00f">    return</span> $this<span style="color:#00f">-></span>response(<span style="color:#093">'time-date'</span>, [<span style="color:#093">'response'</span> <span style="color:#00f">=></span> <span style="color:#33f;font-weight:700">date</span>(<span style="color:#093">'H:i:s'</span>)]);
}

<span style="font-weight:700">public </span><span style="font-weight:700">function</span> <span style="color:#ff8000">actionDate</span>()
{
<span style="color:#00f">    return</span> $this<span style="color:#00f">-></span>response(<span style="color:#093">'time-date'</span>, [<span style="color:#093">'response'</span> <span style="color:#00f">=></span> <span style="color:#33f;font-weight:700">date</span>(<span style="color:#093">'Y-M-d'</span>)]);
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

