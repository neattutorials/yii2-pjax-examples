<?php
use yii\helpers\Html;
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
$this->title = 'Yii2 Pjax enablePushState Example';
?>
<div class="site-index">

<?php Pjax::begin(['enablePushState' => false]); ?>
<?= Html::a('', ['site/upvote'], ['class' => 'btn btn-lg btn-warning glyphicon glyphicon-arrow-up']) ?>
<?= Html::a('', ['site/downvote'], ['class' => 'btn btn-lg btn-primary glyphicon glyphicon-arrow-down']) ?>
<h1><?= Yii::$app->session->get('votes', 0) ?></h1>
<?php Pjax::end(); ?>




    <hr />
    <p>
        views\site\vote.php:<br>
        <pre style="background:rgba(238,238,238,0.92);color:#000">&lt;?php <span style="color:#33f;font-weight:700">Pjax</span><span style="color:#00f">::</span>begin([<span style="color:#093">'enablePushState'</span> <span style="color:#00f">=></span> <span style="color:#9700cc">false</span>]); ?>
&lt;?= <span style="color:#33f;font-weight:700">Html</span><span style="color:#00f">::</span>a(<span style="color:#093">''</span>, [<span style="color:#093">'site/upvote'</span>], [<span style="color:#093">'class'</span> <span style="color:#00f">=></span> <span style="color:#093">'btn btn-lg btn-warning glyphicon glyphicon-arrow-up'</span>]) ?>
&lt;?= <span style="color:#33f;font-weight:700">Html</span><span style="color:#00f">::</span>a(<span style="color:#093">''</span>, [<span style="color:#093">'site/downvote'</span>], [<span style="color:#093">'class'</span> <span style="color:#00f">=></span> <span style="color:#093">'btn btn-lg btn-primary glyphicon glyphicon-arrow-down'</span>]) ?>
&lt;h1>&lt;?= <span style="color:#33f;font-weight:700">Yii</span><span style="color:#00f">::</span>$app<span style="color:#00f">-></span>session<span style="color:#00f">-></span>get(<span style="color:#093">'votes'</span>, <span style="color:#06f">0</span>) ?>&lt;/h1>
&lt;?php <span style="color:#33f;font-weight:700">Pjax</span><span style="color:#00f">::</span>end(); ?>
</pre>
    <br>
    controllers\SiteController.php:<br>
    <pre style="background:rgba(238,238,238,0.92);color:#000">
<span style="font-weight:700">public </span><span style="font-weight:700">function</span> <span style="color:#ff8000">actionVote</span>()
{
<span style="color:#00f">    return</span> $this<span style="color:#00f">-></span>render(<span style="color:#093">'vote'</span>);
}

<span style="font-weight:700">public </span><span style="font-weight:700">function</span> <span style="color:#ff8000">actionUpvote</span>()
{
    $votes <span style="color:#00f">=</span> <span style="color:#33f;font-weight:700">Yii</span><span style="color:#00f">::</span>$app<span style="color:#00f">-></span>session<span style="color:#00f">-></span>get(<span style="color:#093">'votes'</span>, <span style="color:#06f">0</span>);
    <span style="color:#33f;font-weight:700">Yii</span><span style="color:#00f">::</span>$app<span style="color:#00f">-></span>session<span style="color:#00f">-></span>set(<span style="color:#093">'votes'</span>, <span style="color:#00f">++</span>$votes);
<span style="color:#00f">    return</span> $this<span style="color:#00f">-></span>renderAjax(<span style="color:#093">'vote'</span>);
}

<span style="font-weight:700">public </span><span style="font-weight:700">function</span> <span style="color:#ff8000">actionDownvote</span>()
{
    $votes <span style="color:#00f">=</span> <span style="color:#33f;font-weight:700">Yii</span><span style="color:#00f">::</span>$app<span style="color:#00f">-></span>session<span style="color:#00f">-></span>get(<span style="color:#093">'votes'</span>, <span style="color:#06f">0</span>);
    <span style="color:#33f;font-weight:700">Yii</span><span style="color:#00f">::</span>$app<span style="color:#00f">-></span>session<span style="color:#00f">-></span>set(<span style="color:#093">'votes'</span>, <span style="color:#00f">--</span>$votes);
<span style="color:#00f">    return</span> $this<span style="color:#00f">-></span>renderAjax(<span style="color:#093">'vote'</span>);
}
</pre>
    </p>

</div>

