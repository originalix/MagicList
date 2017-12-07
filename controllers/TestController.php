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

    public function actionComment()
    {
        $this->layout = false;
        return $this->render('comment');
    }

    

}
