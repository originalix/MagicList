<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Remember Me</title>

    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <script>
        (function (doc, win) {
            var docEl = doc.documentElement,
                resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
                recalc = function () {
                    var clientWidth = docEl.clientWidth;
                    if (!clientWidth) return;
                    if (clientWidth >= 640) {
                        docEl.style.fontSize = '100px';
                    } else {
                        docEl.style.fontSize = 100 * (clientWidth / 640) + 'px';
                    }
                };

            if (!doc.addEventListener) return;
            win.addEventListener(resizeEvt, recalc, false);
            doc.addEventListener('DOMContentLoaded', recalc, false);
        })(document, window);
    </script>

    <!-- normailze css -->
    <link rel="stylesheet" href="assets/css/normailze.css" />

    <!-- Amaze UI CSS -->
    <!-- <link rel="stylesheet" href="assets/css/amazeui.css"> -->
    <!-- <link rel="stylesheet" href="assets/css/amazeui.flat.css">  -->
    <link rel="stylesheet" href="assets/css/l-home-index.css">
    <!-- icon-font -->
    <link rel="stylesheet" href="assets/css/iconfont.css">

</head>

<body>
    <section class="home-index box">
        <header class="home-index-bar home-index-bar-nav">
            <img class="home-index-portrait" src="http://www.047258.com/Uploads/Editor/2016-10-18/14762726301049405.jpg" alt="">
            <span>username</span>
            <i class="iconfont">&#xe62d;</i>
        </header>
        <div class="home-index-main">
            <div class="test">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione culpa incidunt nulla ipsam repellendus qui, libero perferendis delectus aspernatur officiis iure mollitia in voluptas dolor maiores sapiente, voluptatibus sed voluptatem.
            </div>
        </div>
    </section>
</body>

</html>