@extends('layouts.admin') 
@section('title') 网站配置 @endsection 
@section('title','网站配置') 

@section('content')
<hr>
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="/ueditor/lang/zh-cn/zh-cn.js"></script>
<div class="tpl-portlet-components">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span class="am-icon-code"></span> 网站配置
        </div>
    </div>
    <div class="tpl-block">
        <div class="am-g">
            <div class="tpl-form-body tpl-form-line">
                <form class="am-form tpl-form-line-form" method="post" action="/wzpz/{{$peizhi['id']}}" enctype="multipart/form-data">
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label"> 网站标题 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="title" class="tpl-form-input" value="{{$peizhi['title']}}" id="user-name" placeholder="">

                        </div>
                    </div>
                   <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label"> 网站logo <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="file" name="logo" class="tpl-form-input" id="user-name" placeholder="" value="{{$peizhi['logo']}}">
                            <img src="{{$peizhi['logo']}}" width="100">
                        </div>
                    </div>
                     <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label"> 轮播1  <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="file" name="pic1" class="tpl-form-input" id="user-name" placeholder="" value="{{$peizhi['pic1']}}">
                            <img src="{{$peizhi['pic1']}}" width="100">
                        </div>
                    </div>
                     <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label"> 轮播2  <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="file" name="pic2" class="tpl-form-input" id="user-name" placeholder="" value="{{$peizhi['pic2']}}">
                            <img src="{{$peizhi['pic2']}}" width="100">
                        </div>
                    </div>
                     <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label"> 轮播3  <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="file" name="pic3" class="tpl-form-input" id="user-name" placeholder="" value="{{$peizhi['pic3']}}">
                            <img src="{{$peizhi['pic3']}}" width="100">
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
@endsection