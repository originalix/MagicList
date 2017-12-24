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
    <title>Remember Me</title>

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
                <i class="home-calendar iconfont">&#xe624;</i>
                <div class="home-title">Remember Me</div>
                <i class="home-setting iconfont">&#xe600;</i>
            </div>
        </header>

        <div class="category-main">
            <div class="category-list">

                <!-- row -->
                <div class="list-content hide">
                        <a href="#" class="list-link">
                            <div class="list-icon-block">
                                <i class="list-icon iconfont">&#xe703;</i>
                            </div>
                            <div class="list-title-block">
                                <span class="list-title">
                                    Write your own
                                </span>
                            </div>
                        </a>
                </div>

                <!-- row -->
                <div class="list-content hide">
                        <a href="#" class="list-link">
                            <div class="list-icon-edit-block">
                                <i class="list-left-icon iconfont">&#xe625;</i>

                                <i class="list-right-icon iconfont">&#xe627;</i>

                            </div>

                            <form id="form" method="post">
                                <input type="text" name="name" id="name" class="category-input">
                            </form>
                            <button onclick="getName()">点我点我</button>
                        </a>
                </div>

            </div>
        </div>
    </div>
</body>
<script src="assets/js/jquery-3.2.1.js"></script>
<script>
    function getName()
    {
        var name = $("#name").val();
        console.log('name = ' + name);
    }
</script>
</html>