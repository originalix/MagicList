<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script>
        ! function (e) {
            function t(a) {
                if (i[a]) return i[a].exports;
                var n = i[a] = {
                    exports: {},
                    id: a,
                    loaded: !1
                };
                return e[a].call(n.exports, n, n.exports, t), n.loaded = !0, n.exports
            }
            var i = {};
            return t.m = e, t.c = i, t.p = "", t(0)
        }([function (e, t) {
            "use strict";
            Object.defineProperty(t, "__esModule", {
                value: !0
            });
            var i = window;
            t["default"] = i.flex = function (normal, e, t) {
                var a = e || 100,
                    n = t || 1,
                    r = i.document,
                    o = navigator.userAgent,
                    d = o.match(/Android[\S\s]+AppleWebkit\/(\d{3})/i),
                    l = o.match(/U3\/((\d+|\.){5,})/i),
                    c = l && parseInt(l[1].split(".").join(""), 10) >= 80,
                    p = navigator.appVersion.match(/(iphone|ipad|ipod)/gi),
                    s = i.devicePixelRatio || 1;
                p || d && d[1] > 534 || c || (s = 1);
                var u = normal ? 1 : 1 / s,
                    m = r.querySelector('meta[name="viewport"]');
                m || (m = r.createElement("meta"), m.setAttribute("name", "viewport"), r.head.appendChild(m)),
                    m.setAttribute("content", "width=device-width,user-scalable=no,initial-scale=" + u +
                        ",maximum-scale=" + u + ",minimum-scale=" + u), r.documentElement.style.fontSize =
                    normal ? "50px" : a / 2 * s * n + "px"
            }, e.exports = t["default"]
        }]);
        flex(false, 100, 1);
    </script>

    <style>
        * {
            box-sizing: border-box;
            /* 在X5新内核Blink中，在排版页面的时候，会主动对字体进行放大，会检测页面中的主字体，当某一块字体在我们的判定规则中，认为字号较小，并且是页面中的主要字体，就会采取主动放大的操作。然而这不是我们想要的，可以采取给最大高度解决 */
            max-height: 100000px;
        }

        *:before,
        *:after {
            box-sizing: border-box;
            max-height: 100000px;
        }

        *,
        *:before,
        *:after {
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        }

        html,
        body,
        div,
        span,
        object,
        iframe,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        blockquote,
        pre,
        a,
        abbr,
        address,
        cite,
        code,
        del,
        dfn,
        em,
        img,
        ins,
        kbd,
        q,
        samp,
        small,
        strong,
        sub,
        sup,
        var,
        b,
        i,
        dl,
        dt,
        dd,
        ol,
        ul,
        li,
        fieldset,
        form,
        label,
        legend,
        table,
        caption,
        tbody,
        tfoot,
        thead,
        tr,
        th,
        textarea,
        td {
            border: 0 none;
            font-size: inherit;
            color: inherit;
            margin: 0;
            padding: 0;
            vertical-align: baseline;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-weight: normal;
        }

        em,
        strong {
            font-style: normal;
        }

        ul,
        ol,
        li {
            list-style: none;
        }

        body {
            font-family: "Helvetica Neue", Helvetica, "PingFang SC", "Hiragino Sans GB", "Microsoft YaHei", "\5FAE\8F6F\96C5\9ED1", Arial, sans-serif;
            line-height: 1.5;
            color: #333;
            background-color: #f2f2f2;
            font-size: 0.24rem;
        }

        a {
            text-decoration: none;
        }

        .box {
            position: relative;
            max-width: 10rem;
            margin: 0 auto;
        }

        .navRoot {
            position: fixed;
            z-index: 50;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 1rem;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            border-top: 0.01rem solid #ccc;
            background: #f2f2f2;
        }

        .navLink {
            font-size: 0.42rem;
            -webkit-box-flex: 1;
            -ms-flex: auto;
            flex: auto;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            line-height: 1;
            color: #666;
        }

        .navLink.active {
            color: #1abc9c
        }

        .navLinkIco {
            display: block;
            margin-bottom: 0.1rem;
        }

        .navLinkText {
            display: block;
            line-height: 1;
            font-size: 0.24rem;
        }

        .img-responsive {
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="box">
        <img src="http://temp.im/640x260/444/fff" class="img-responsive">
        <ul style="font-size:0.3rem; padding: 0.2rem">
            <li style="font-size:0.4rem">
                <a href="http://www.jianshu.com/p/985d26b40199">rem布局（进阶版）的一些说明</a>
            </li>
            <li>1，大家先把这个页面在不同设备模式下浏览下，感受下。</li>
            <li>2，一般来说我们的手机端效果图是640px或750px。</li>
            <li>3，对于上图这类需要等屏宽的图片，只需让其宽度设为 100% 即可。</li>
            <li>4，该布局方案要求凡是涉及尺寸的，单位都是rem，比如，height width margin paddint top border-radius 等等。你只需要按照效果图上标注的尺寸布局即可。</li>
        </ul>
        <div class="navRoot">
            <a href="#" class="navLink active">
                <i class="fa fa-home navLinkIco" aria-hidden="true"></i>
                <span class="navLinkText">首页</span>
            </a>
            <a href="#" class="navLink">
                <i class="fa fa-home navLinkIco" aria-hidden="true"></i>
                <span class="navLinkText">好店</span>
            </a>
            <a href="#" class="navLink">
                <i class="fa fa-home navLinkIco" aria-hidden="true"></i>
                <span class="navLinkText">简单</span>
            </a>
            <a href="#" class="navLink">
                <i class="fa fa-home navLinkIco" aria-hidden="true"></i>
                <span class="navLinkText">复杂</span>
            </a>
            <a href="#" class="navLink">
                <i class="fa fa-home navLinkIco" aria-hidden="true"></i>
                <span class="navLinkText">异步</span>
            </a>
        </div>
    </div>
</body>
<!-- 字形图标 -->
<script src="https://use.fontawesome.com/f47f4563cb.js"></script>

</html>