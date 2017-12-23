<?php

namespace app\controllers;

use Yii;
use yii\web\Response;
use app\models\User;

class HomeController extends BaseController
{
    public function actionIndex()
    {
        $this->layout = false;
        return $this->render('index');
    }
}
