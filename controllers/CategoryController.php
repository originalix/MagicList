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
        return $this->render('index', ['products' => $models, 'category_id' => $id]);
    }

    public function actionCreate($id)
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        if (!Yii::$app->request->isAjax) {
            return ['msg' => 'error'];
        }

        $model = new Products;
        $post = Yii::$app->request->post();
        if ($model->load($post)) {
            return ['msg' => 'load'];
        }
        if ($model->createProducts($post)) {
            return ['msg' => 'success'];
        }
        return ['msg' => 'failure'];
        //     $request = Yii::$app->request;
        //     $name = $request->post('name');
        //     $price = doubleval($request->post('price'));
        //     $count = intval($request->post('count'));
        //     return ['msg' => $name];
    }
}
