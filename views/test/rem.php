<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Remember Me</title>

    <!-- <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"> -->
    <script>
        !function(e){function t(a){if(i[a])return i[a].exports;var n=i[a]={exports:{},id:a,loaded:!1};return e[a].call(n.exports,n,n.exports,t),n.loaded=!0,n.exports}var i={};return t.m=e,t.c=i,t.p="",t(0)}([function(e,t){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var i=window;t["default"]=i.flex=function(e,t){var a=e||100,n=t||1,r=i.document,o=navigator.userAgent,d=o.match(/Android[\S\s]+AppleWebkit\/(\d{3})/i),l=o.match(/U3\/((\d+|\.){5,})/i),c=l&&parseInt(l[1].split(".").join(""),10)>=80,p=navigator.appVersion.match(/(iphone|ipad|ipod)/gi),s=i.devicePixelRatio||1;p||d&&d[1]>534||c||(s=1);var u=1/s,m=r.querySelector('meta[name="viewport"]');m||(m=r.createElement("meta"),m.setAttribute("name","viewport"),r.head.appendChild(m)),m.setAttribute("content","width=device-width,user-scalable=no,initial-scale="+u+",maximum-scale="+u+",minimum-scale="+u),r.documentElement.style.fontSize=a/2*s*n+"px"},e.exports=t["default"]}]);  flex(100, 1);
    </script>

    <!-- normailze css -->
    <link rel="stylesheet" href="../assets/css/normailze.css" />

    <!-- Amaze UI CSS -->
    <!-- <link rel="stylesheet" href="assets/css/amazeui.css"> -->
    <!-- <link rel="stylesheet" href="assets/css/amazeui.flat.css">  -->
    <link rel="stylesheet" href="../assets/css/l-test-rem.css">
    <!-- icon-font -->
    <link rel="stylesheet" href="../assets/css/iconfont.css">

</head>

<body>
    <section class="home-index box">
        <header class="home-index-bar home-index-bar-nav">
            <img class="home-index-portrait" src="http://cms-bucket.nosdn.127.net/e76028c29cb64592868934c3b2e69f7720170516111348.jpeg?imageView&thumbnail=550x0" alt="">
            <span>username</span>
            <i class="iconfont">&#xe62d;</i>
        </header>
        <div class="home-index-main">
            <div class="test">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione culpa incidunt nulla ipsam repellendus qui, libero perferendis
                delectus aspernatur officiis iure mollitia in voluptas dolor maiores sapiente, voluptatibus sed voluptatem.
            </div>
        </div>
    </section>
</body>

</html>