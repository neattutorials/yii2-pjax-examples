<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\base\Security;

class SiteController extends Controller
{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        $time = date('H:i:s');
        if (Yii::$app->request->isPjax) {
            return $this->renderAjax('index', ['time' => $time]);
        }
        return $this->render('index', ['time' => $time]);
    }

    public function actionAutoRefresh()
    {
        $time = date('H:i:s');
        if (Yii::$app->request->isPjax) {
            return $this->renderAjax('auto-refresh', ['time' => $time]);
        }
        return $this->render('auto-refresh', ['time' => $time]);
    }

    public function actionTime()
    {
        return $this->response('time-date', ['response' => date('H:i:s')]);
    }

    public function actionDate()
    {
        return $this->response('time-date', ['response' => date('Y-M-d')]);
    }

    public function actionMultiple()
    {
        $security = new Security();
        $randomString = $security->generateRandomString();
        $randomKey = $security->generateRandomKey();
        return $this->response('multiple', [
            'randomString' => $randomString,
            'randomKey' => $randomKey,
        ]);
    }

    public function actionFormSubmission()
    {
        $security = new Security();
        $string = Yii::$app->request->post('string');
        $stringHash = '';
        if (!is_null($string)) {
            $stringHash = $security->generatePasswordHash($string);
        }
        return $this->response('form-submission', [
            'stringHash' => $stringHash,
        ]);
    }

    public function actionVote()
    {
        return $this->render('vote');
    }

    public function actionUpvote()
    {
        $votes = Yii::$app->session->get('votes', 0);
        Yii::$app->session->set('votes', ++$votes);
        return $this->renderAjax('vote');
    }

    public function actionDownvote()
    {
        $votes = Yii::$app->session->get('votes', 0);
        Yii::$app->session->set('votes', --$votes);
        return $this->renderAjax('vote');
    }

    protected function response($view, $params = [])
    {
        if (Yii::$app->request->isPjax) {
            return $this->renderAjax($view, $params);
        }
        return $this->render($view, $params);
    }
}
