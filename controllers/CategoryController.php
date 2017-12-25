<?php

namespace app\controllers;

use Yii;
use yii\web\Response;
use app\models\User;
use app\models\Products;
use app\models\Categories;

class CategoryController extends BaseController
{
    public function actionIndex($id)
    {
        if (Yii::$app->request->isPost) {
            \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            return ['msg' => 'success'];
        }
        $this->layout = false;
        $models = Products::find()->where(['category_id' => $id])->orderBy('created_at')->all();
        return $this->render('index', ['products' => $models]);
    }

    public function actionCreate($id)
    {
        if (Yii::$app->request->isPost) {
            \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            return ['msg' => 'success'];
        }
    }
}
