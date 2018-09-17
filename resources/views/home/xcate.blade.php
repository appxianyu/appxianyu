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
		<div class="header">
	<div class="header-background"></div>
	<div class="toolbar statusbar-padding">
		<button class="bar-button back-button" onclick="history.go(-1);" dwz-event-on-click="click"><i class="icon icon-back"></i></button>
		<div class="header-title">
			<div class="title">新品上架</div>
			</div>
		</div>
	</div>

		<div class="aui-title-h">
			<h2>新品上架</h2>
		</div>
		@foreach($xxcate as $v)
			@foreach($v->shangpin as $vv)
		<div class="" style="float:left" >
			<div class="aui-flex-item aui-flex-items1 aui-flex-items2">
		<span>
			<img src="{{$vv['image']}}" style="width:170px">
		</span>
				<a href="#" class="aui-flex-box">
					
					<em>￥{{$vv['money']}}</em>
				</a>
			</div>
		</div>
		@endforeach
		@endforeach
		
		
		<div style="height:44px"></div>
		@include('layouts.home._menu')
	</div>
</div>


<script type="text/javascript" src="/appindex/js/pd/jquery-1.9.1.min./appindex/js"></script>
<script type="text/javascript" src="/appindex/js/pd/aui-touchSlide./appindex/js"></script>
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
<script src="/appindex/js/ba/aui-scroll./appindex/js" type="text/javascript" charset="utf-8"></script>
<script src="/appindex/js/ba/aui-index./appindex/js" type="text/javascript" charset="utf-8"></script>
<script src="/appindex/js/ba/aui-swipe./appindex/js" type="text/javascript" charset="utf-8"></script>

</body>
</html>