<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>歪秀购物</title>
    <link rel="stylesheet" type="text/css" href="/appindex/css/ui.css">
    <link href="/appindex/favicon.ico" type="image/x-icon" rel="icon">
    <link href="/appindex/iTunesArtwork@2x.png" sizes="114x114" rel="apple-touch-icon-precomposed">
</head>
<style type="text/css">
.dot {
    animation: sploosh 2.5s cubic-bezier(0.165, 0.84, 0.44, 1);
}

.dot2 {
    animation: sploosh2 2.5s cubic-bezier(0.165, 0.84, 0.44, 2);
}

.dot3 {
    animation: sploosh3 2.5s cubic-bezier(0.165, 0.84, 0.44, 3);
}

.dot,
.dot2,
.dot3 {
    height: 20px;
    width: 100%;
    font-size: 40px;
    color: #fff;
    text-align: center;
    border-radius: 100% 100% 0 0;
    position: absolute;
    z-index: 10;
    animation-iteration-count: 3;
    -webkit-animation-iteration-count: 3;
    /* Safari 和 Chrome */
    background: transparent;
}

@keyframes sploosh {
    0% {
        box-shadow: 0 0 0 10px rgba(255, 220, 1, 0.7);
        background: rgba(255, 220, 1, 0.7);
    }
    100% {
        box-shadow: 0 0 0 20px rgba(255, 220, 1, 0);
        background: rgba(255, 220, 1, 0);
    }
}

@keyframes sploosh2 {
    0% {
        box-shadow: 0 0 0 30px rgba(255, 220, 1, 0.7);
        background: rgba(255, 220, 1, 0.7);
    }
    100% {
        box-shadow: 0 0 0 40px rgba(255, 220, 1, 0);
        background: rgba(255, 220, 1, 0.3);
    }
}

@keyframes sploosh3 {
    0% {
        box-shadow: 0 0 0 50px rgba(255, 220, 1, 0.7);
        background: rgba(255, 220, 1, 0.7);
    }
    100% {
        box-shadow: 0 0 0 60px rgba(255, 220, 1, 0);
        background: rgba(255, 220, 1, 1);
    }
}
</style>

<body>
    <div class="header">
        <div class="" style="background:none"></div>
        <div class="toolbar statusbar-padding">
            <button class="bar-button back-button" style="left:-10px" onclick="history.go(-1);" dwz-event-on-click="click"><i class="icon icon-back-s"></i></button>
            <div class="header-title">
                <div class="title"></div>
            </div>
        </div>
    </div>
    <div class="aui-login-ba" style="position:relative; overflow:hidden">
        <span class="aui-login-logo"><img src="/appindex/images/ui-logo/aui-logo.png"></span>
        <canvas id="waves" class="waves" style="position:absolute; bottom:-60px; left:-210px;"></canvas>
    </div>
    
    <div class="aui-logon-con">
    	<form class="am-form" method="post" action="/login">
        <div class="b-line">
            <input type="text" name="username" placeholder="手机号/邮箱/用户名">
        </div>
        <div class="b-line">
            <input type="password" name="password" placeholder="密码">
        </div>
        {{csrf_field()}}
         <input type="submit" value="立即登录" class="aui-login-l">
        <div class="aui-login-wen">
            <div class="aui-login-wen-a"><a href="/zhuce">注册</a></div>
            <div><a href="modify.html">忘记密码?</a> </div>
        </div>
        <div class="aui-login-san">
            <div class="aui-login-qq"><a href="#"></a></div>
            <div class="aui-login-wb"><a href="#"></a></div>
            <div class="aui-login-wx"><a href="#"></a></div>
        </div>
        </form>
    </div>

    
    <script src="/appindex/js/css3/49f8daee.vendors.js"></script>
    <script src="/appindex/js/css3/26f2fc0d.index.js"></script>
</body>

</html>