<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>歪秀购物</title>
    <link rel="stylesheet" type="text/css" href="/appindex/css/ui.css">
    <link href="/appindex/favicon.ico" type="image/x-icon" rel="icon">
    <link href="iTunesArtwork@2x.png" sizes="114x114" rel="apple-touch-icon-precomposed">
</head>

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
    	  <form action="/zhuce" method="post">
	      <div class="b-line">
	            <input type="text" placeholder="请输入您的用户名，支持手机号" name="username" value="">
                <p class="username_error"></p>
	        </div>
	        <div class="b-line">
	            <input type="password" style="color: #666;" placeholder="请输入您的密码" name="password" class="password" value="" />
                <p class="password_error"></p>
	        </div>
	        <div class="b-line">
	             <input type="password" style="color: #666;" placeholder="请重复您的密码" name="repassword" class="password_again" />
                <p class="password_again_error"></p>
	        </div>
	          
                
	        <div class="aui-login-l"> <button type="submit" class="submit_btn">注册</button> </div>
	            <!-- <a href="me.html">注册</a> -->
	           
	       
	          {{csrf_field()}}
	        <div class="aui-login-wen">
	            <div class="aui-login-wen-a"><a href="/login">去登录</a> </div>
	            <!--<div><a href="#">忘记密码?</a> </div>-->
	        </div>
	        <!--<div class="aui-login-san">-->
	        <!--<div class="aui-login-qq"><a href="#"></a></div>-->
	        <!--<div class="aui-login-wb"><a href="#"></a></div>-->
	        <!--<div class="aui-login-wx"><a href="#"></a></div>-->
	        <!--</div>-->
	       </form>

	    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
        <script>
        /** 

        1. 布局 

        2. 绑定事件 

        获得焦点 

        丧失焦点事件 

        表单提交事件 

        */

        var CUSER = false;

        var CPASS = false;

        var CREPASS = false;

        //用户名 

        $('input[name=username]').focus(function() {

            //边框颜色 

            $(this).addClass('active');

            //提示语显示 

            $(this).next().show().html('输入6~8位字母数字下划线');

        }).blur(function() {

            //移出激活状态的class active 

            $(this).removeClass('active');

            //正则判断 

            var v = $(this).val();

            //声明正则 

            var reg = /^\w{6,8}$/;

            //判断 

            if (!reg.test(v)) {

                //边框 

                $(this).addClass('error');

                //文字提醒 

                $(this).next().html('<span style="color:red">格式不正确</span>').show();

                CUSER = false;

            } else {

                var input = $(this);

                //发送 AJAX 请求检测用户名是否已经存在 

                // $.post('./check-user-exists.php', {username: v}, function(data){ 

                // }) 

                $.ajax({

                    url: '/check-user-exists.php',

                    type: 'post',

                    data: { username: v },

                    success: function(data) {

                        if (data != '1') {

                            //边框 

                            input.addClass('error');

                            //文字提醒 

                            input.next().html('<span style="color:red">该用户名太受欢迎, 请换一个!!</span>').show();

                            CUSER = false;

                        } else {

                            input.removeClass('error');

                            input.next().html('<span style="color:green;font-size:16px;font-weight:bold">&nbsp;&nbsp;√</span>').show();

                            CUSER = true;

                        }

                    },

                    async: false

                })

            }

        })

          
        //密码 

        $('input[name=password]').focus(function() {

            //边框颜色 

            $(this).addClass('active');

            //提示语显示 

            $(this).next().show().html('6~20非空白字符');

        }).blur(function() {

            $(this).removeClass('active');

            //获取用户的输入值 

            var v = $(this).val();

            //正则 

            var reg = /^\S{6,20}$/;

            if (!reg.test(v)) {

                //边框 

                $(this).addClass('error');

                //文字提醒 

                $(this).next().html('<span style="color:red">格式不正确</span>').show();

                CPASS = false;

            } else {

                //边框 

                $(this).removeClass('error');

                //文字提醒 

                $(this).next().html('<span style="color:green;font-size:16px;font-weight:bold">&nbsp;&nbsp;√</span>').show();

                CPASS = true;

            }

        })

        //确认密码 

        $('input[name=repassword]').focus(function() {

            //边框颜色 

            $(this).addClass('active');

            //提示语显示 

            $(this).next().show().html('再次输入密码');

        }).blur(function() {

            $(this).removeClass('active');

            //获取用户的输入值 

            var v = $(this).val();

            if (v != $('input[name=password]').val()) {

                //边框 

                $(this).addClass('error');

                //文字提醒 

                $(this).next().html('<span style="color:red">两次密码不一致</span>').show();

                CREPASS = false;

            } else {

                //边框 

                $(this).removeClass('error');

                //文字提醒 

                $(this).next().html('<span style="color:green;font-size:16px;font-weight:bold">&nbsp;&nbsp;√</span>').show();

                CREPASS = true;

            }

        })

        //表单的提交事件 

        $('form').submit(function() {

            //触发错误提醒 

            $('input').trigger('blur');

            console.log(CUSER);

            //判断输入值是否都正确 

            if (CUSER && CPASS && CREPASS) {

                return true;

            } else {

                return false;

            }

        });
        </script>
    </div>
    <script src="/appindex/js/css3/49f8daee.vendors.js"></script>
    <script src="/appindex/js/css3/26f2fc0d.index.js"></script>
</body>

</html>