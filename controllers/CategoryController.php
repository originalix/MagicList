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
        $this->layout = "layout";
        $models = Products::find()->where(['category_id' => $id])->orderBy('created_at')->all();
        return $this->render('index', ['products' => $models]);
    }
}
