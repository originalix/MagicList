<?php

namespace app\controllers;

use Yii;
use yii\web\Response;
use app\models\User;
use yii\filters\auth\QueryParamAuth;

class HomeController extends BaseController
{
    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['authenticator'] = [
            'class' => QueryParamAuth::className(),
        ];

        return $behaviors;
    }

    public function actionIndex()
    {
        $this->layout = false;
        return $this->render('index');
    }
}
