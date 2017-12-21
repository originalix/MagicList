<?php

namespace app\controllers;

use Yii;
use app\models\User;

class HomeController
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
