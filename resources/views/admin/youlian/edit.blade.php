@extends('layouts.admin') 
@section('title') 友情链接添加 @endsection 
@section('title','友情链接添加') 

@section('content')
<hr>
<div class="tpl-portlet-components">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span class="am-icon-code"></span> 友情链接添加
        </div>
    </div>
    <div class="tpl-block">
        <div class="am-g">
            <div class="tpl-form-body tpl-form-line">
                <form class="am-form tpl-form-line-form" method="post" action="/youlian/{{$youlians['id']}}">
                   
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">链接名称<span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="name" class="tpl-form-input" id="user-name" placeholder="{{$youlians['name']}}">
                        </div>
                    </div>  

                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">链接地址<span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="url" class="tpl-form-input" id="user-name" placeholder="{{$youlians['url']}}">
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