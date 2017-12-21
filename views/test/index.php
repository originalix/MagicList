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
    <link rel="stylesheet" href="assets/css/l-index.css">

    <script>!function(e){function t(a){if(i[a])return i[a].exports;var n=i[a]={exports:{},id:a,loaded:!1};return e[a].call(n.exports,n,n.exports,t),n.loaded=!0,n.exports}var i={};return t.m=e,t.c=i,t.p="",t(0)}([function(e,t){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var i=window;t["default"]=i.flex=function(normal,e,t){var a=e||100,n=t||1,r=i.document,o=navigator.userAgent,d=o.match(/Android[\S\s]+AppleWebkit\/(\d{3})/i),l=o.match(/U3\/((\d+|\.){5,})/i),c=l&&parseInt(l[1].split(".").join(""),10)>=80,p=navigator.appVersion.match(/(iphone|ipad|ipod)/gi),s=i.devicePixelRatio||1;p||d&&d[1]>534||c||(s=1);var u=normal?1:1/s,m=r.querySelector('meta[name="viewport"]');m||(m=r.createElement("meta"),m.setAttribute("name","viewport"),r.head.appendChild(m)),m.setAttribute("content","width=device-width,user-scalable=no,initial-scale="+u+",maximum-scale="+u+",minimum-scale="+u),r.documentElement.style.fontSize=normal?"50px": a/2*s*n+"px"},e.exports=t["default"]}]);  flex(false,100, 1);</script>
</head>

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
                        <div class="l-index-lititle"><span>硬装部分</span></div>
                        <div class="l-index-liprice"><span>合计：￥80000</span></div>
                        <div class="l-index-licount"><span>0/1</span></div>
                    </div>
                </li>
                <li>
                    <div class="l-index-list-content">
                        <div class="l-index-lititle"><span>家具柜子</span></div>
                        <div class="l-index-liprice"><span>合计：￥21500</span></div>
                        <div class="l-index-licount"><span>0/1</span></div>
                    </div>
                </li>
                <li>
                    <div class="l-index-list-content">
                        <div class="l-index-lititle"><span>各类家电</span></div>
                        <div class="l-index-liprice"><span>合计：￥50000</span></div>
                        <div class="l-index-licount"><span>0/1</span></div>
                    </div>
                </li>
            </ul>    
        </div>
    </section>
</body>
</html>
