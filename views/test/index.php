<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<style>
    .bar { 
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
    .bar-nav { 
        top: 0; 
    }

    p.bar-title {
        margin: 10px auto;
        font-size: 18px;
        color: #564f4b;
        text-align: center;
    }
</style>
<body>
    <header class="bar bar-nav">
        <p class="bar-title">购物清单</p>
    </header>
</body>
</html>
