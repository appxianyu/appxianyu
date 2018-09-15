@extends('layouts.admin') 
@section('title') 订单修改 @endsection 
@section('title','订单修改') 

@section('content')
<hr>
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
<script src="/ueditor/liandong/js/jquery.cxselect.js"></script>
<div class="tpl-portlet-components">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span class="am-icon-code"></span> 订单修改
        </div>
    </div>
    <div class="tpl-block">
        <div class="am-g">
            <div class="tpl-form-body tpl-form-line">
                <form class="am-form tpl-form-line-form" method="post" action="/dingdan/{{$dingdan['id']}}">
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">商品图片 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <img src="{{$dingdan['image']}}" width="100">
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">商品标题 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="title" value="{{$dingdan['title']}}" class="tpl-form-input" id="user-name" placeholder="">
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">快递方式 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="radio" name="kuaidi" value="韵达" @if($dingdan['kuaidi']=='韵达')checked @else''@endif>韵达
                            <input type="radio" name="kuaidi" value="圆通" @if($dingdan['kuaidi']=='圆通')checked @else''@endif>圆通
                            <input type="radio" name="kuaidi" value="顺丰" @if($dingdan['kuaidi']=='顺丰')checked @else''@endif>顺丰
                        </div>
                    </div>
                     <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">买家姓名 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="name" value="{{$dingdan->huo['name']}}" class="tpl-form-input" id="user-name" placeholder="">
                        </div>
                    </div>
                   <<div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">收货地址<span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9" id="city_china">
                        <select style="width:60px;float:left" class="province" name="province" id=""></select>
                        <select class="city" style="width:60px;float:left;background:white" name="city" id=""></select>
                        <select class="area" style="width:60px;float:left;background:white" name="area" id=""></select>
                        </div>
                    </div>
                    {{method_field('PUT')}}
					{{csrf_field()}}
                    <div class="am-form-group">
                        <div class="am-u-sm-9 am-u-sm-push-3">
                            <button class="am-btn am-btn-primary tpl-btn-bg-color-success ">提交</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
                        var urlChina = '/ueditor/liandong/js/cityData.min.json';
                        $.cxSelect.defaults.url = urlChina;
                        $('#city_china').cxSelect({
                            selects: ['province', 'city', 'area']
                        });
                    </script>
@endsection