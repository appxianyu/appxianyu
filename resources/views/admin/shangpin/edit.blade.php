@extends('layouts.admin') 
@section('title') 发表商品列表添加 @endsection 
@section('title','发表商品列表添加') 

@section('content')
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
    <script src="/ueditor/liandong/js/jquery.cxselect.js"></script>

<hr>
<div class="tpl-portlet-components">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span class="am-icon-code"></span> 发表商品列表修改
        </div>
    </div>
    <div class="tpl-block">
        <div class="am-g">
            <div class="tpl-form-body tpl-form-line">
                <form class="am-form tpl-form-line-form" method="post" action="/shangpin/{{$shangpins['id']}}" enctype="multipart/form-data">
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label" > 商品图片<span class="tpl-form-line-small-title"></span></label>
                       <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label"> <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="file" name="image" value="{{$shangpins['image']}}" class="tpl-form-input" id="user-name" placeholder="">
                           <img src="{{$shangpins['image']}}" width="100px">
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">商品简介 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="intro" value="{{$shangpins['intro']}}" class="tpl-form-input" id="user-name" placeholder="">
                            
                        </div>
                    </div>

                     <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">成色 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                           <select class="first" data-am-selected="{searchBox: 1}" name="cheng">


                            <option value="0" name="cheng"
                                @if($shangpins['cheng'] == 0)
                                selected
                                @endif 
                            >全新</option>        
                            <option value="1" name="cheng"
                                 @if($shangpins['cheng'] == 1)
                                selected
                                @endif 

                            >非全新</option>        
                                 
                            </select>

                        </div>


                    </div>


                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">价格 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="money" value="{{$shangpins['money']}}" class="tpl-form-input" id="user-name" placeholder="">
                            
                        </div>
                    </div>

                     <div class="am-form-group">
                         <label for="user-name" class="am-u-sm-3 am-form-label">城市<span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9" id="city_china">
                        <select style="width:60px;float:left" class="province" name="province" id=""></select>
                        <select class="city" style="width:60px;float:left;background:white" name="city" id=""></select>
                        <select class="area" style="width:60px;float:left;background:white" name="area" id=""></select>
                        </div>
                    </div>

                    </div>
					{{csrf_field()}}{{method_field('PUT')}}
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