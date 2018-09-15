@extends('layouts.admin')
@section('title') 用户修改 @endsection 
@section('title','用户修改') 

@section('content')
<hr>
<div class="tpl-portlet-components">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span class="am-icon-code"></span> 用户修改
        </div>
    </div>
    <div class="tpl-block">
        <div class="am-g">
            <div class="tpl-form-body tpl-form-line">
                <form class="am-form tpl-form-line-form" method="post" action="/user/{{$user['id']}}" enctype="multipart/form-data">
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">用 户 名 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="username" class="tpl-form-input" id="user-name" placeholder="" value="{{$user['username']}}">
                            <small>请填写标题文字6-20位字母数字下划线</small>
                        </div>
                    </div>
                    
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">邮  箱  <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="email" name="email" class="tpl-form-input" id="user-name" placeholder="" value="{{$user['email']}}">
                            <small>输入您的邮箱地址</small>
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">头  像  <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="file" name="pic" class="tpl-form-input" id="user-name" placeholder="" value="{{$user['pic']}}">
                            <small>上传您的头像</small>
                        </div>
                    </div>
                    
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">姓 名  <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="name" class="tpl-form-input" id="user-name" placeholder="" value="{{$user['name']}}">
                            <small>输入您的个人姓名</small>
                        </div>
                    </div>
                    
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">身份证号 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="number" name="sfenz" class="tpl-form-input" id="user-name" placeholder="" value="{{$user['sfenz']}}">
                            <small>请填写18位合法的身份证号</small>
                        </div>
                    </div>


                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">手 机 号 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="number" name="phone" class="tpl-form-input" id="user-name" placeholder="" value="{{$user['phone']}}">
                            <small>请填写您的手机号</small>
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">权限 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            
                            <input type="radio" name="oradmin" class="tpl-form-input" id="user-name" placeholder="" value="0" 
                                 @if($user['oradmin'] == 0)
                                    checked 
                                 @endif>普通用户
                            
                            <input type="radio" name="oradmin" class="tpl-form-input" id="user-name" placeholder="" value="1"
                              @if($user['oradmin'] == 1)
                                checked 
                                @endif>管理员
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
@endsection