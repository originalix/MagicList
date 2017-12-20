<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\Response;

class TestController extends Controller
{
    public function actionIndex()
    {
        $this->layout = false;
        return $this->render('index');
    }
    
    public function actionGetid()
    {
        $this->layout = false;
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return [
            'uid' => Yii::$app->user->id,
        ];
    }

    /**
     * ui page: http://www.ui.cn/detail/157232.html
     * html 规范: https://coderlmn.github.io/code-standards/
     * ui: https://uiiiuiii.com/inspiration/161637706.html
     */
}
