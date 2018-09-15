<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录</title>
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="stylesheet" charset="utf-8" href="/dengru/css/reset.css">
    <link rel="stylesheet" charset="utf-8" href="/dengru/css/reg.css">
</head>
<body>
    <div class="login_header">
        <div class="header_center clearfix">
            <div class="myfl">
                <a href="/"><img src=""/></a>
                <span>欢迎登陆</span>
            </div>
            <div class="myfr">
                <a href="/">返回首页</a><span></span><a href="javascript:;" class="collection_web">收藏网站</a>
            </div>
        </div>
    </div>
    <div class="login_content clearfix">
        <input type="hidden" id="memberType" value="" />
        
        <form class="am-form" method="post" action="/admin/login">
            <input type="hidden" name="memberType" id="parameter" value="1"/>
            <div class="login_box myfr">
                <p class="tabchange clearfix">
                    <span class="myfl sign_select" id="usertype">用户登录</span>
                </p>
                <p class="system_error"></p>
                <input type="text" name="username" class="" id="doc-ipt-email-1" placeholder="用户名">
                <p class="username_error"><span>用户名不能为空!</span></p>
               <input type="password" name="password" class="" id="doc-ipt-pwd-1" placeholder="密码">
                <p class="password_error"><span>密码不能为空!</span></p>
                <p class="forget_password clearfix"><a href="#" class="myfr">忘记密码？</a></p>
                {{csrf_field()}}
                <input type="submit" value="立即登录" class="submit_btn">
               
               
                <p class="entry_mode clearfix">
                    <span class="myfl">你也可以用以下方式登录:</span>
                    <a href="/zhuce" class="myfr">
                        <em></em>
                        <i>快速注册</i>
                    </a>
                </p>
            </div>
        </form>
    </div>
    <div class="login_bottom">Copright&nbsp;&nbsp;ICP17088888号-1 &nbsp;&nbsp;版权所有</div>
</body>
<script type="text/javascript" charset="utf-8" src="/dengru/js/jquery.min.js"></script>
<script type="text/javascript" charset="utf-8" src="/dengru/js/web_method/method.js"></script>
<script type="text/javascript" charset="utf-8" src="/dengru/js/login_register/login.js~v=1"></script>
<<<<<<< HEAD
</html>
=======
</html>

>>>>>>> 13e000c6f9c3f120dcba8e0d0f31972c4a82f1e0
