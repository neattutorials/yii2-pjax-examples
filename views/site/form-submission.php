<?php
use yii\helpers\Html;
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $stringHash string */
$this->title = 'Yii2 Pjax Form Submission Example';
?>
<div class="site-index">

    <?php Pjax::begin(); ?>
    <?= Html::beginForm(['site/form-submission'], 'post', ['data-pjax' => '', 'class' => 'form-inline']); ?>
        <?= Html::input('text', 'string', Yii::$app->request->post('string'), ['class' => 'form-control']) ?>
        <?= Html::submitButton('Hash String', ['class' => 'btn btn-lg btn-primary', 'name' => 'hash-button']) ?>
    <?= Html::endForm() ?>
    <h3><?= $stringHash ?></h3>
    <?php Pjax::end(); ?>




    <hr />
    <p>
        views\site\form-submission.php:<br>
        <pre style="background:rgba(238,238,238,0.92);color:#000">&lt;?php <span style="color:#33f;font-weight:700">Pjax</span><span style="color:#00f">::</span>begin(); ?>
&lt;?= <span style="color:#33f;font-weight:700">Html</span><span style="color:#00f">::</span>beginForm([<span style="color:#093">'site/form-submission'</span>], <span style="color:#093">'post'</span>, [<span style="color:#093">'data-pjax'</span> <span style="color:#00f">=></span> <span style="color:#093">''</span>, <span style="color:#093">'class'</span> <span style="color:#00f">=></span> <span style="color:#093">'form-inline'</span>]); ?>
    &lt;?= <span style="color:#33f;font-weight:700">Html</span><span style="color:#00f">::</span>input(<span style="color:#093">'text'</span>, <span style="color:#093">'string'</span>, <span style="color:#33f;font-weight:700">Yii</span><span style="color:#00f">::</span>$app<span style="color:#00f">-></span>request<span style="color:#00f">-></span>post(<span style="color:#093">'string'</span>), [<span style="color:#093">'class'</span> <span style="color:#00f">=></span> <span style="color:#093">'form-control'</span>]) ?>
    &lt;?= <span style="color:#33f;font-weight:700">Html</span><span style="color:#00f">::</span>submitButton(<span style="color:#093">'Hash String'</span>, [<span style="color:#093">'class'</span> <span style="color:#00f">=></span> <span style="color:#093">'btn btn-lg btn-primary'</span>, <span style="color:#093">'name'</span> <span style="color:#00f">=></span> <span style="color:#093">'hash-button'</span>]) ?>
&lt;?= <span style="color:#33f;font-weight:700">Html</span><span style="color:#00f">::</span>endForm() ?>
&lt;h3>&lt;?= $stringHash ?>&lt;/h3>
&lt;?php <span style="color:#33f;font-weight:700">Pjax</span><span style="color:#00f">::</span>end(); ?>
</pre>
    <br>
    controllers\SiteController.php:<br>
    <pre style="background:rgba(238,238,238,0.92);color:#000">
<span style="font-weight:700">public </span><span style="font-weight:700">function</span> <span style="color:#ff8000">actionFormSubmission</span>()
{
    $security <span style="color:#00f">=</span> <span style="color:#00f">new</span> <span style="color:#33f;font-weight:700">Security</span>();
    $string <span style="color:#00f">=</span> <span style="color:#33f;font-weight:700">Yii</span><span style="color:#00f">::</span>$app<span style="color:#00f">-></span>request<span style="color:#00f">-></span>post(<span style="color:#093">'string'</span>);
    $stringHash <span style="color:#00f">=</span> <span style="color:#093">''</span>;
<span style="color:#00f">    if</span> (<span style="color:#00f">!</span><span style="color:#33f;font-weight:700">is_null</span>($string)) {
        $stringHash <span style="color:#00f">=</span> $security<span style="color:#00f">-></span>generatePasswordHash($string);
    }
<span style="color:#00f">    return</span> $this<span style="color:#00f">-></span>render(<span style="color:#093">'form-submission'</span>, [
        <span style="color:#093">'stringHash'</span> <span style="color:#00f">=></span> $stringHash,
    ]);
}
</pre>
    </p>

</div>

