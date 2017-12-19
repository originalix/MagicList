<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class TestController extends Controller
{
    public function actionIndex()
    {
        $this->layout = false;
        return $this->render('index');
    }

    /**
     * ui page: http://www.ui.cn/detail/157232.html
     * html 规范: https://coderlmn.github.io/code-standards/
     */
}
