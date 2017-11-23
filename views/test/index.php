<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- normailze css -->
    <link rel="stylesheet" href="assets/css/normailze.css" />

    <!-- Amaze UI CSS -->
    <link rel="stylesheet" href="assets/css/amazeui.css">
    <link rel="stylesheet" href="assets/css/amazeui.flat.css">
</head>

<style>
    .l-index-bar { 
        position: fixed; 
        right: 0; 
        left: 0; 
        z-index: 10;
        height: 44px; 
        padding-right: 10px; 
        padding-left: 10px; 
        background-color: #f5f5f5; 
        border-bottom: 1px solid #dddddd; 
        -webkit-backface-visibility: hidden; 
        backface-visibility: hidden; 
    } 
    .l-index-bar-nav { 
        top: 0; 
    }

    h1.l-index-bar-title {
        margin: 10px auto;
        text-align: center;
        font-size: 18px;
        color: #564f4b;
    }
    
    .l-index-main {
        position: relative;
        top: 44px;
        right: 0;
        left: 0;
    }
    
    .l-index-list-content {
        display: block;
    }

    .am-list {
        margin-top: 0;
        margin-bottom: 0;
        padding-left: 0;
    }

    .am-list > li {
         list-style-type: none;
    }
</style>
<body>
    <section class="l-index">
        <!-- 头部导航栏 -->
        <header class="l-index-bar l-index-bar-nav">
            <h1 class="l-index-bar-title">装修清单</h1>
        </header>
        <!-- 中间清单列表 --> 
        <div class="l-index-main">
            <ul class="am-list">
                <li>
                    <div class="l-index-list-content">
                        <div class="l-index-lititle"><span>耗材</span></div>
                        <div class="l-index-licount"><span>0/1</span></div>
                        <div class="l-index-liprice"><span>合计：￥50000</span></div>
                    </div>
                </li>
            </ul>    
        </div>
    </section>
</body>
</html>
