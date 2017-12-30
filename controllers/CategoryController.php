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
        $category = Categories::findOne($id);
        return $this->render('index', ['products' => $models, 'category' => $category]);
    }

    public function actionCreate($id)
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        if (!Yii::$app->request->isAjax) {
            return ['code' => 401, 'msg' => 'Ajax请求失败'];
        }

        $model = new Products;
        $post = Yii::$app->request->post();
        
        if ($model->createProducts($post)) {
            $models = Products::find()->all();
            return ['code' => 200, 'msg' => '添加新单品成功', 'data' => $models];
        }
        
        return ['code' => 402, 'msg' => $model->getModelError($model)];
    }

    public function actionDelete($id)
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        if (!Yii::$app->request->isAjax && !Yii::$app->request->isDelete) {
            return ['code' => 401, 'msg' => '请求方法不被允许'];
        }
        return ['id' => $id];
    }
}
