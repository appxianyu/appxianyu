<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>歪秀购物</title>
	<link rel="stylesheet" type="text/css" href="/appindex/css/ui.css">
	<link href="favicon.ico" type="image/x-icon" rel="icon">
	<link href="iTunesArtwork@2x.png" sizes="114x114" rel="apple-touch-icon-precomposed">
</head>
<body style="font-size:12px">

<div class="header">
	<div class="header-background"></div>
	<div class="toolbar statusbar-padding">
		<button class="bar-button back-button" onclick="history.go(-1);" dwz-event-on-click="click"><i class="icon icon-back"></i></button>
		<div class="header-title">
			<div class="title">分类</div>
		</div>
	</div>
</div>


<div id="loading"><img src="/appindex/images/loading.gif" /></div>
<div class="con">

	<aside>
		<div class="menu-left scrollbar-none r-line" id="sidebar">
			<ul>
				@foreach($dcate as $v)
				<li >{{$v['name']}}</li>
				@endforeach
			</ul>
		</div>
	</aside>

	
	
	@foreach($dcate as $v)
	<section class="menu-right padding-all j-content" style="display:none">
		<h5>{{$v['name']}}</h5>
		<ul>
			@foreach($v->xcate as $vv)
			<li class="w-3"><a href="/appxcate?xcate={{$vv['id']}}"></a> <img src="/appindex/images/top9.jpg" /><span>{{$vv['name']}}</span></li>
			@endforeach
		</ul>
	</section>
	@endforeach
</div>

@include('layouts.home._menu')



<script type="text/javascript">
	//设置cookie
	function setCookie(cname, cvalue, exdays) {
		var d = new Date();
		d.setTime(d.getTime() + (exdays*24*60*60*1000));
		var expires = "expires="+d.toUTCString();
		document.cookie = cname + "=" + cvalue + "; " + expires;
	}
	function clearHistroy(){
		setCookie('ECS[keywords]', '', -1);
		document.getElementById("search_histroy").style.visibility = "hidden";
	}
</script>
<script type="text/javascript" src="/appindex/js/class/jquery.min.js"></script>
<script type="text/javascript" src="/appindex/js/class/swiper-3.2.5.min.js"></script>
<script type="text/javascript" src="/appindex/js/class/ectouch.js"></script>
<script type="text/javascript" src="/appindex/js/class/jquery.json.js"></script>
<script type="text/javascript" src="/appindex/js/class/common.js"></script>
<script type="text/javascript">
	$(function($){
		$('#sidebar ul li').click(function(){
			$(this).addClass('active').siblings('li').removeClass('active');
			var index = $(this).index();
			$('.j-content').eq(index).show().siblings('.j-content').hide();
		})
	})
</script>
</body>
</html>