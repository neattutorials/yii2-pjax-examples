<?php
use yii\helpers\Html;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $time string */
$this->title = 'Yii2 Pjax Refresh Button';

$script = <<< JS
$(document).ready(function() {
    setInterval(function(){ $("#refreshButton").click(); }, 3000);
});
JS;
$this->registerJs($script);
?>

<div class="site-index">
    <?php Pjax::begin(); ?>
    <?= Html::a("Refresh", ['site/auto-refresh'], ['class' => 'btn btn-lg btn-primary', 'id' => 'refreshButton']) ?>
    <h1>Current time: <?= $time ?></h1>
    <?php Pjax::end(); ?>



    <hr />
    <p>
        views\site\auto-refresh.php:<br>
    <pre style="background:rgba(238,238,238,0.92);color:#000">&lt;?php
$script <span style="color:#00f">=</span> <span style="color:#093">&lt;&lt;&lt; <span style="color:#00f">JS</span>
$(document).ready(function() {
    setInterval(function(){ $("#refreshButton").click(); }, 3000);
});
<span style="color:#00f">JS</span></span>;
$this<span style="color:#00f">-></span>registerJs($script);
?>
</pre>
        <pre style="background:rgba(238,238,238,0.92);color:#000">&lt;?php <span style="color:#33f;font-weight:700">Pjax</span><span style="color:#00f">::</span>begin(); ?>
&lt;?= <span style="color:#33f;font-weight:700">Html</span><span style="color:#00f">::</span>a(<span style="color:#093">"Refresh"</span>, [<span style="color:#093">'site/auto-refresh'</span>], [<span style="color:#093">'class'</span> <span style="color:#00f">=></span> <span style="color:#093">'btn btn-lg btn-primary'</span>, <span style="color:#093">'id'</span> <span style="color:#00f">=></span> <span style="color:#093">'refreshButton'</span>]) ?>
<span style="color:#03c">&lt;<span style="font-weight:700">h1</span>></span>Current time: &lt;?= $time ?><span style="color:#03c">&lt;/<span style="font-weight:700">h1</span>></span>
&lt;?php <span style="color:#33f;font-weight:700">Pjax</span><span style="color:#00f">::</span>end(); ?>
</pre>
    <br>
    controllers\SiteController.php:<br>
    <pre style="background:rgba(238,238,238,0.92);color:#000">
<span style="font-weight:700">public </span><span style="font-weight:700">function</span> <span style="color:#ff8000">actionAutoRefresh</span>()
{
    $time <span style="color:#00f">=</span> <span style="color:#33f;font-weight:700">date</span>(<span style="color:#093">'H:i:s'</span>);
<span style="color:#00f">    return</span> $this<span style="color:#00f">-></span>render(<span style="color:#093">'auto-refresh'</span>, [<span style="color:#093">'time'</span> <span style="color:#00f">=></span> $time]);
}
</pre>
    </p>

</div>

