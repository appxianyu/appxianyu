@extends('layouts.admin') 
@section('title') 拍卖添加 @endsection 
@section('title','拍卖添加') 

@section('content')
<hr>



<div class="tpl-portlet-components">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span class="am-icon-code"></span> 拍卖添加
        </div>
    </div>
    <div class="tpl-block">
        <div class="am-g">
            <div class="tpl-form-body tpl-form-line">
                <form class="am-form tpl-form-line-form" method="post" action="/paimai/{{$paimai['id']}}" enctype="multipart/form-data">
                    <div class="am-form-group">
                        <label for="user-weibo" class="am-u-sm-3 am-form-label">商品图片</label>
                        <div class="am-u-sm-9">
                            <div class="am-form-group am-form-file">
                                <div class="tpl-form-file-img">
                                </div>
                                <button type="button" class="am-btn am-btn-danger am-btn-sm">
                                    <i class="am-icon-cloud-upload"></i> 添加拍卖图片</button>
                                <input id="doc-form-file" type="file" name="image">
                            </div>
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">简介: <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <textarea class="tpl-form-input" name="intro" >{{$paimai['intro']}}</textarea>
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-phone" class="am-u-sm-3 am-form-label">成色</label>
                        <div class="am-u-sm-9">
                            <select data-am-selected="{searchBox: 1}" name="cheng" style="display: none;">
                                <option value="0" @if($paimai['cheng'] == 0) selected @endif>非全新</option>
                                <option value="1" @if($paimai['cheng'] == 1) selected @endif>全新</option>
                             </select>

                        </div>
                    </div>
                    
                    
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">起拍价格<span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="money" class="tpl-form-input" id="user-name" placeholder="" value="{{$paimai['money']}}">
                        </div>
                    </div> 

                   

                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">加价幅度<span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="jmoney" class="tpl-form-input" id="user-name" placeholder="" value="{{$paimai['jmoney']}}">
                        </div>
                    </div>

                    
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">开拍时间<span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input style="width:100px;background:white;" type="text" name="opentime" id="pickdatestart"  value="{{$paimai['opentime']}}">
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">结束时间<span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input style="width:100px;background:white;" type="text" name="overtime" id="pickdatestop"  value="{{$paimai['overtime']}}">
                        </div>
                    </div>

                    {{csrf_field()}}
                    {{method_field('PUT')}}
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
@endsection