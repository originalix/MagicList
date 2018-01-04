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

        $model = new Products;
        if ($model->deleteById($id)) {
            $models = Products::find()->all();
            return ['code' => 200, 'msg' => '删除成功', 'data' => $models];
        }

        return ['code' => 402, 'msg' => '删除失败'];
    }

    public function actionUpdate($id)
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        if (!Yii::$app->request->isAjax && !Yii::$app->request->isPut) {
            return ['code' => 401, 'msg' => '请求方法不被允许'];
        }

        $model = Products::findOne($id);
        $params = Yii::$app->request->bodyParams;
        if ($model->edit($params)) {
            $models = Products::find()->all();
            return ['code' => 200, 'msg' => '编辑成功', 'data' => $models];
        }

        return ['code' => 402, 'msg' => '编辑失败'];
    }

    public function actionStatement()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $id = Yii::$app->request->get('id');
        if ( empty($id) ) {
            return ['code' => 418, 'msg' => '生成报表失败'];
        }

        $models = Products::find()
        ->where(['category_id' => $id])
        ->all();

        $sum = 0;
        $total = 0;
        foreach ($models as $model) {
            $sum += $model->price * $model->count;
            $total += $model->count;
        }

        return ['code' => 200, 'price' => $sum, 'total' => $total];
    }
}
