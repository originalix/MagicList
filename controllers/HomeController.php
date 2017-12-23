<?php

namespace app\controllers;

use Yii;
use yii\web\Response;
use app\models\User;
use app\models\Categories;
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
        $models = Categories::find()->where(['uid' => Yii::$app->user->id])->orderBy('created_at')->all();
        return $this->render('index', ['categories' => $models]);
    }
}
