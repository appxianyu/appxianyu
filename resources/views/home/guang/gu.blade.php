<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>歪秀购物</title>
	<link rel="stylesheet" type="text/css" href="/appindex/css/ui.css">
	<link href="favicon.ico" type="image/x-icon" rel="icon">
	<link href="iTunesArtwork@2x.png" sizes="114x114" rel="apple-touch-icon-precomposed">
</head>
<body>


<div class="aui-container">
	<div class="aui-page">
		<!-- 头部 begin-->
		<div class="header">
			<div class="header-background"></div>
			<div class="toolbar statusbar-padding">
				<button class="bar-button back-button" onclick="history.go(-1);" dwz-event-on-click="click"><i class="icon icon-back"></i></button>
				<!--<a class="bar-button" data-href="home.html?dwz_callback=home_render" target="navTab" rel="home"><i class="icon icon-back"></i></a>-->
				<div class="header-title">
					<div class="title">爱生活</div>
				</div>
			</div>
		</div>
		<div style="height:44px"></div>
		<!-- 头部 End-->

		<!-- 内容 -->
		@foreach($huodong as $v)
		<div class="aui-content-text">
			<a href="/guo/{{$v['id']}}"><div class="aui-content-title">
				<h2>{{$v['title']}}</h2>
			</div></a>
			<div class="my-car-thumbnail my-car-thumbnail-l"><img src="{{$v['image']}}"></div>
			<div class="aui-content-p my-car-thumbnail my-car-thumbnail-l">
				<p>{!!$v['content']!!}</p>
			</div>
			<div class="aui-coll-s b-line">
				<div class="aui-coll-l"><i class="aui-icon-zan"></i>点赞</div>
				<div class="aui-coll-f"><i class="aui-icon-shi"></i>分享</div>
			</div>
			<div class="devider b-line"></div>
		</div>
		@endforeach
		

		<div style="height:49px"></div>
		<div class="tab-bar tab-bottom">
			<a class="tab-button " href="index.html"><i class="tab-button-icon icon icon-home"></i><span class="tab-button-txt">首页</span></a>
			<a class="tab-button active" href="life.html"><i class="tab-button-icon icon icon-exhibition" ></i><span class="tab-button-txt">生活</span></a>
			<a class="tab-button cached" href="classs.html"><i class="tab-button-icon icon icon-service" ></i><span class="tab-button-txt">分类</span></a>
			<a class="tab-button cached" href="car.html"><i class="tab-button-icon icon icon-car"></i><span class="tab-button-txt">购物车</span></a>
			<a class="tab-button cached" href="me.html"><i class="tab-button-icon icon icon-my"></i><span class="tab-button-txt">我的</span></a>
		</div>
	</div>
</div>


<script type="text/javascript" src="js/pd/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/pd/aui-touchSlide.js"></script>
<script>
	/*banner首页轮播*/
	TouchSlide({
		slideCell : "#focus",
		titCell : ".hd ul", // 开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
		mainCell : ".bd ul",
		effect : "leftLoop",
		autoPlay : true, // 自动播放
		autoPage : true, // 自动分页
		delayTime: 200, // 毫秒；切换效果持续时间（执行一次效果用多少毫秒）
		interTime: 5000, // 毫秒；自动运行间隔（隔多少毫秒后执行下一个效果）
		switchLoad : "_src" // 切换加载，真实图片路径为"_src"
	});
</script>
<script src="js/ba/aui-scroll.js" type="text/javascript" charset="utf-8"></script>
<script src="js/ba/aui-index.js" type="text/javascript" charset="utf-8"></script>
<script src="js/ba/aui-swipe.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>