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
    
    <link rel="stylesheet" href="assets/css/l-home-index.css">

</head>

<body class="ml-body">
    <div class="home-container">
        <header class="home-index-bar home-index-bar-nav">
            <div class="header-content">
                <i class="home-calendar iconfont">&#xe69d;</i>
                <div class="home-title">Remember Me</div>
                <i class="home-setting iconfont">&#xe600;</i>
            </div>
        </header>

        <div class="home-main">
            <div class="home-list">

                <!-- 循环展示清单类目列表 -->
                <?php foreach( $categories as $category ): ?>
                    <!-- row -->
                    <div class="list-content hide" id=<?php echo("list-content" . "$category->id"); ?>>
                        <a href="<?php echo yii\helpers\Url::to(['category/index', 'id' => $category->id]) ?>" class="list-link">
                            <div class="list-icon-block">
                                <i class="list-icon iconfont"></i>
                            </div>
                            <div class="list-title-block">
                                <span class="list-title">
                                    <?php echo($category->name); ?>
                                </span>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
</body>

<script src="assets/js/jquery-3.2.1.js"></script>
<script src="assets/js/home.js"></script>

<script>

    function changeIcon(id, typeid)
    {
        var home = Home.createNew();
        home.switchIcon(id, typeid);    
        $(".list-content").removeClass('hide');
    }

    <?php foreach ($categories as $category) : ?>
        var typeid = <?php echo $category->type_id; ?>;
        var id = <?php echo $category->id; ?>;
        changeIcon(id, typeid);
    <?php endforeach; ?>
</script>

</html>