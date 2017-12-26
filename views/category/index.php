<?php 
    use yii\bootstrap\ActiveForm;
    use yii\helpers\Html;
    use app\models\Products;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $category->name; ?></title>

    <script>
        !function(e){function t(a){if(i[a])return i[a].exports;var n=i[a]={exports:{},id:a,loaded:!1};return e[a].call(n.exports,n,n.exports,t),n.loaded=!0,n.exports}var i={};return t.m=e,t.c=i,t.p="",t(0)}([function(e,t){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var i=window;t["default"]=i.flex=function(e,t){var a=e||100,n=t||1,r=i.document,o=navigator.userAgent,d=o.match(/Android[\S\s]+AppleWebkit\/(\d{3})/i),l=o.match(/U3\/((\d+|\.){5,})/i),c=l&&parseInt(l[1].split(".").join(""),10)>=80,p=navigator.appVersion.match(/(iphone|ipad|ipod)/gi),s=i.devicePixelRatio||1;p||d&&d[1]>534||c||(s=1);var u=1/s,m=r.querySelector('meta[name="viewport"]');m||(m=r.createElement("meta"),m.setAttribute("name","viewport"),r.head.appendChild(m)),m.setAttribute("content","width=device-width,user-scalable=no,initial-scale="+u+",maximum-scale="+u+",minimum-scale="+u),r.documentElement.style.fontSize=a/2*s*n+"px"},e.exports=t["default"]}]);  flex(100, 1);
    </script>

    <!-- normailze css -->
    <link rel="stylesheet" href="assets/css/normailze.css" />

    <!-- icon-font -->
    <link rel="stylesheet" href="assets/css/iconfont.css">
    <link rel="stylesheet" href="assets/css/l-header.css">
    <link rel="stylesheet" href="assets/css/l-category.css">

</head>

<body class="ml-body">
    <div class="home-container">
        <header class="home-index-bar home-index-bar-nav">
            <div class="header-content">
                <i class="home-calendar iconfont" onclick="window.history.go(-1)">&#xe624;</i>
                <div class="home-title"><?php echo $category->name; ?></div>
                <i class="home-setting iconfont">&#xe600;</i>
            </div>
        </header>

        <div class="category-main">
            <div class="category-list">
                <!-- 循环展示清单类目列表 -->
                <?php foreach( $products as $product ): ?>
                    <!-- row -->
                    <div class="list-content hide" id=<?php echo("list-content" . "$product->id"); ?>>
                        <div href="#" class="list-link">
                            <div class="product-list-icon-block">
                                <i class="product-left-icon iconfont">&#xe67d;</i>
                                <i class="product-center-icon iconfont">&#xe636;</i>
                                <i class="product-right-icon iconfont">&#xe603;</i>
                            </div>
                            <div class="list-title-block product-list-title-block">
                                <div class="product-list-seprate">
                                    <i class="list-name-icon iconfont">&#xe693;</i>
                                    <p class="product-list-title product-name">
                                        <?php echo($product->name); ?>
                                    </p>
                                </div>
                                <div class="product-list-seprate">
                                    <i class="list-name-icon iconfont">&#xe6da;</i>
                                    <p class="product-list-title product-price">
                                        ￥<?php echo($product->price); ?>
                                    </p>
                                </div>
                                <div class="product-list-seprate">
                                    <i class="list-name-icon iconfont">&#xe6f1;</i>
                                    <p class="product-list-title product-count">
                                        <?php echo($product->count); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

                <!-- 编辑cell -->
                <div class="list-content hide">
                        <!-- 尚未编辑 -->
                        <div href="###" class="list-link wait-edit" onclick="category.changeEditState()">
                            <div class="list-icon-block">
                                <i class="list-icon iconfont">&#xe703;</i>
                            </div>
                            <div class="list-title-block">
                                <span class="list-title">
                                    Write your own
                                </span>
                            </div>
                        </div>
                        <!-- 开始编辑 -->
                        <div href="###" class="list-link editing">
                            <div class="list-icon-edit-block">
                                <i class="list-left-icon iconfont" onclick="category.changeEditState()">&#xe625;</i>

                                <i class="list-right-icon iconfont" onclick="category.submitForm(<?php echo $category->id; ?>)">&#xe627;</i>

                            </div>
                            <div class="add-form">
                                <form id="form" method="post" class="form-content">
                                    <div class="input-control">
                                        <i class="form-edit-icon iconfont">&#xe693;</i>
                                        <input type="text" name="name" id="name" class="category-input" placeholder="单品名称">
                                        <hr class="form-separated"></hr>
                                    </div>

                                    <div class="input-control">
                                        <i class="form-edit-icon iconfont">&#xe6da;</i>
                                        <input type="text" name="price" id="price" class="category-input" placeholder="单品单价">
                                        <hr class="form-separated"></hr>
                                    </div>

                                    <div class="input-control">
                                        <i class="form-edit-icon iconfont">&#xe6f1;</i>
                                        <input type="text" name="count" id="count" class="category-input" placeholder="购买数量">
                                        <hr class="form-separated"></hr>
                                    </div>
                                    <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
                                </form>
                            </div>
                        </>
                </div>

            </div>
        </div>
    </div>
</body>
<script src="assets/js/jquery-3.2.1.js"></script>
<script src="assets/js/category.js"></script>
<script src="assets/js/home.js"></script>
<script>
    var category = Category.createNew();
    var home = Home.createNew();
    home.switchIcon(0, <?php echo $category->id; ?>, true);
    $(".list-content").removeClass('hide');
</script>
</html>