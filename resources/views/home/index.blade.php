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
	<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
	 <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.bootcss.com/holder/2.9.4/holder.min.js"></script>
 
</head>
<body>

<div class="aui-container">
	<div class="aui-page">
		<!-- 头部 begin-->
		<div class="header">
			<div class="aui-header-bg" style="background:#ff5a5f;"></div>
			<div class="toolbar statusbar-padding" style="min-height:50px">
				<button class="bar-button back-button"><i class="icon icon-sao"></i></button>
				<div class="header-title" style="height:50px; padding:0 50px">
					<div class="title aui-title-input"><input type="text" placeholder="秋季新品"></div>
				</div>
				<a href="news.html">
					<button class="icon aui-icon-mag"></button>
				</a>
			</div>
		</div>
		<div style="height:50px" ></div>
		<!-- 头部 End-->
		<!-- 首页轮播 begin -->
				<div class="aui-banner-content" style="width:412px;height:200px;margin-right:0px">
	        <div id="carousel-example-generic" class="carousel slide aui-banner-content" data-ride="carousel" >
	            <!-- Indicators -->
	            <ol class="carousel-indicators">
	                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
	                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
	            </ol>
	            <!-- Wrapper for slides -->
	            <div class="carousel-inner" role="listbox" style="width:412px;height:200px">
	                <div class="item active">
	                    <img src="{{$peizhi['pic1']}}" alt="狐狸王董事会.自小组成立以来团结合作,互利共赢共同营造美好的未来">
	                    <div class="carousel-caption">
	                    </div>
	                </div>
	                <div class="item">
	                    <img src="{{$peizhi['pic2']}}" width="872" height="400" alt="...">
	                    <div class="carousel-caption">
	                    </div>
	                </div>
	                <div class="item">
	                    <img src="{{$peizhi['pic3']}}" width="872" height="400" alt="...">
	                    <div class="carousel-caption">
	                    </div>
	                </div>
	            </div>
	            <!-- Controls -->
	            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	                <span class="sr-only">Previous</span>
	            </a>
	            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	                <span class="sr-only">Next</span>
	            </a>
	        </div>
	    </div>
		<!-- 首页轮播 end -->
		<!-- 分类切换 begin -->
		<div class="" id="container" >
			<div id="main" style="transition-timing-function: cubic-bezier(0.1, 0.57, 0.1, 1); transition-duration: 0ms; transform: translate(0px, 0px) translateZ(0px);">
				<div id="scroller">
					<section class="slider" style="margin:0  auto; width:100%">
						<div class="swiper-container swiper-container2 swiper-container-horizontal">
							<div class="swiper-wrapper tuangouwidth" style="transition-duration: 0ms; transform: translate3d( 0px, 0px);">
								<div class="swiper-slide swiper-slide-duplicate " >
									<ul class="icon-list">
										<li class="icon">
											<a href="bag.html">
												<span class="icon-circle"><img src="/appindex/js/ba/img/icon-tuan.png"></span>
												<span class="icon-desc">红包</span>
											</a>
										</li>
										<li class="icon">
											<a href="#">
												<span class="icon-circle"><img src="/appindex/js/ba/img/icon-tuan1.png"></span>
												<span class="icon-desc">签到</span>
											</a>
										</li>
										<li class="icon">
											<a href="new-pd.html">
												<span class="icon-circle"><img src="/appindex/js/ba/img/icon-tuan2.png"></span>
												<span class="icon-desc">新品</span>
											</a>
										</li>
										<li class="icon">
											<a href="#">
												<span class="icon-circle"><img src="/appindex/js/ba/img/icon-tuan3.png"></span>
												<span class="icon-desc">团购</span>
											</a>
										</li>
										<li class="icon">
											<a href="classs.html">
												<span class="icon-circle"><img src="/appindex/js/ba/img/icon-tuan4.png"></span>
												<span class="icon-desc">分类</span>
											</a>
										</li>
										<li class="icon">
											<a href="life.html">
												<span class="icon-circle"><img src="/appindex/js/ba/img/icon-tuan5.png"></span>
												<span class="icon-desc">生活</span>
											</a>
										</li>
										<li class="icon">
											<a href="#">
												<span class="icon-circle"><img src="/appindex/js/ba/img/icon-tuan6.png"></span>
												<span class="icon-desc">秀秀</span>
											</a>
										</li>
										<li class="icon">
											<a href="#">
												<span class="icon-circle"><img src="/appindex/js/ba/img/icon-tuan7.png"></span>
												<span class="icon-desc">达人</span>
											</a>
										</li>
									</ul>
								</div>
								
							</div>
							<!--<div class="swiper-pagination swiper-pagination2 ">-->
								<!--<span class="swiper-pagination-bullet "></span>-->
								<!--<span class="swiper-pagination-bullet "></span>-->
							<!--</div>-->
						</div>
					</section>
				</div>
			</div>
		</div>
		<!-- 分类切换 end -->
		<div class="devider t-line"></div>
		<div class="b-line" style="position:relative"></div>

		<div class="aui-title-h">
			<h2>大牌热卖</h2>
		</div>
		<div class="aui-flex">
			
			@foreach($logos as $v)
			<div class="aui-flex-item aui-flex-items">
		<span>
			<a href="#"><img style="width:100px;height:100px" src="{{$v['image']}}"></a>
		</span>
				<a href="#" class="aui-flex-box">热潮时代</a>
			</div>
			@endforeach
		</div>
		<div class="aui-title-h">
			<h2>新品必购</h2>
		</div>
		<div class="aui-flex">
		@foreach($xpbg as $v)
			<div class="aui-flex-item aui-flex-items1">
		<span>
			<img style="width:120px;height:100px" src="{{$v['image']}}">
		</span>
			</div>
		@endforeach
		</div>
		<div class="aui-title-h">
			<h2>新品上架</h2>
		</div>
		
		
		
		@foreach($shangpin as $v)
		<div class="aui-flex" style="float:left;">
			
			<div class="aui-flex-item aui-flex-items1 aui-flex-items2">
		<span>
			<img src="{{$v['image']}}">
		</span>
				<a href="#" class="aui-flex-box">
					<h2>{{$v['title']}}</h2>
					<em>{{$v['money']}}</em>
				</a>
			</div>
		</div>
		@endforeach
		<div style="height:44px"></div>
		<div class="tab-bar tab-bottom">
			<a class="tab-button active" href="index.html"><i class="tab-button-icon icon icon-home"></i><span class="tab-button-txt">首页</span></a>
			<a class="tab-button cached" href="life.html"><i class="tab-button-icon icon icon-exhibition" ></i><span class="tab-button-txt">生活</span></a>
			<a class="tab-button cached" href="classs.html"><i class="tab-button-icon icon icon-service" ></i><span class="tab-button-txt">分类</span></a>
			<a class="tab-button cached" href="car.html"><i class="tab-button-icon icon icon-car"></i><span class="tab-button-txt">购物车</span></a>
			<a class="tab-button cached" href="me.html"><i class="tab-button-icon icon icon-my" ></i><span class="tab-button-txt">我的</span></a>
		</div>
	</div>
</div>


<script type="text/javascript" src="/appindex/js/pd/jquery-1.9.1.min./appindex/js"></script>
<script type="text/javascript" src="/appindex/js/pd/aui-touchSlide./appindex/js"></script>

<script>
	var index = -1;
		var timer = null;

		$('#dots li').mouseover(function(){
			//清除定时器
			clearInterval(timer);
			//修改图片的显示的内容
			index  = $(this).index();
			//显示当前索引的图片和点
			show(index);
		}).mouseout(function(){
			// 启动定时器
			autoRun();
		});

		//自动变化
		function autoRun() {
			timer = setInterval(function(){
				index++;
				//显示当前索引对应 图片和点
				show(index);
				//判断
				if(index >= $('#images li').length-1) {
					index = -1;
				}
			}, 2000);
		}
		//显示当前索引对应图片和点
		function show(index) {
			//0    0
			//1    -450
			//2    -900
			//3    -1350
			//n    -n*450  

			//点样式发生改变
			$('#dots li').removeClass('active');
			$('#dots li').eq(index).addClass('active');
			//切换图片
			// $('#images').css('left', '-'+index*450+'px');
			$('#images').animate({left: '-'+index*450+'px'}, 1000)
		}
		autoRun();

</script>
<script src="/appindex/js/ba/aui-scroll./appindex/js" type="text/javascript" charset="utf-8"></script>
<script src="/appindex/js/ba/aui-index./appindex/js" type="text/javascript" charset="utf-8"></script>
<script src="/appindex/js/ba/aui-swipe./appindex/js" type="text/javascript" charset="utf-8"></script>

</body>
</html>