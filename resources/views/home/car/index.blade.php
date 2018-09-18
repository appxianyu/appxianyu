<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>歪秀购物</title>
	<link rel="stylesheet" type="text/css" href="css/ui.css">
	<link href="favicon.ico" type="image/x-icon" rel="icon">
	<link href="iTunesArtwork@2x.png" sizes="114x114" rel="apple-touch-icon-precomposed">
	<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

<div class="aui-container">
	<div class="aui-page">
		<div class="header">
			<div class="header-background"></div>
			<div class="toolbar statusbar-padding">
				<button class="bar-button back-button" onclick="history.go(-1);" dwz-event-on-click="click"><i class="icon icon-back"></i></button>
				<!--<a class="bar-button" data-href="home.html?dwz_callback=home_render" target="navTab" rel="home"><i class="icon icon-back"></i></a>-->
				<div class="header-title">
					<div class="title">购物车</div>
				</div>
			</div>
		</div>
		<div style="height:50px"></div>
		<div class="main_con">
			<div class="main_con_allchoose ">
				<span class="circle" id="quan"></span>全选 
			</div>
			<div class="main_con_goods">
				<ul>
					@foreach($car as $v)
					@if($v['user_id'] == Session::get('id'))
					<li>
						<section class="aui-crl">
							<span class="circle" aa="{{$v['money']}}" id="sp"></span>
							<img src="{{$v['image']}}">
						</section>
						<div style="width:auto; padding-left:10px">
							<h2>{{$v['title']}}</h2>
							<p class="aui-o">商品成色：{{$v['cheng']}}</p>
							<p class="money"><em class="aui-redd">{{$v['money']}}</em>
							</p>
						</div>
						<a href="/qrsc?shangpin_id={{$v['id']}}"><img src="images/icon-png/delete-icon.png" style="width:60px;height: 60px" /></a>
					</li>
					@endif
					@endforeach
				</ul>
			</div>
		</div>
		<div style="height:1px"></div>
		<!--内容信息 end-->

		<!--结算信息 start-->
		<div class="settlement t-line">
			<div class="settlement_left">
				<font class="zongji">总计：</font>
				<b><font class="money_id" id="qwe" style="color:#ff8746;font-size: 16px"></font></b><br />
			</div>
			<div class="settlement_right">
				<a href="confirm.html">去结算</a>
			</div>
		</div>
		<!--结算信息 end-->

		<!--删除弹窗 start-->
		<div class="del_tc">
			<div class="del_tc_box">
				<div class="del_tc_box_title">
					确认删除此商品？
				</div>
				<div class="del_tc_box_content">
					<input class="cancel" type="button" value="取消" onclick="del_goods_cancel()"/>
					<input class="ok" type="button" value="确认" />
				</div>
			</div>
		</div>
		<!--删除弹窗 end-->
		


		<!--无商品页面 start-->
		<div class="no_goods">
			<img src="images/no_goods_ico.png" />
			<p>购物车里没有东西哦~<br />快去商城逛逛吧！</p>
			<a href="">即刻添置</a>
		</div>
		<!--无商品页面 end-->
	</div>
</div>
	<script type="text/javascript">
			var c = 0;
			$('.circle').click(function(){
				if($(this).css("background-color") == "rgb(191, 57, 42)"){
				var a = $(this).attr('aa');
				var b = parseInt(a);
				var d = c -= b;
				// alert(d);
			}else{
				var a = $(this).attr('aa');
				var b = parseInt(a);
				var d = c += b;
				
			}
			$('#qwe').html(d);
			});

           //全选  
           var zhi = 0;	
           	$('#quan').click(function(){
           		if ($(this).css("background-color") == "rgba(0, 0, 0, 0)") {
				$(".aui-redd").each(function(){
    				zhi += parseInt($(this).html());
  				});
  				$('#qwe').html(zhi);
  			}else{
  				$(".aui-redd").each(function(){
    				zhi -= parseInt($(this).html());
  				});
  				$('#qwe').html(zhi);
  			}
			});
			
           

		</script>

<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/car/car-js.js"></script>
<script type="text/javascript" src="js/car/car-mi.js"></script>
</body>
</html>