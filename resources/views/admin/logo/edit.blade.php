@extends('layouts.admin') 
@section('title') logo信息修改 @endsection 
@section('title','logo信息修改') 

@section('content')
<hr>
<div class="tpl-portlet-components">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span class="am-icon-code"></span> logo信息修改
        </div>
    </div>
    <div class="tpl-block">
        <div class="am-g">
            <div class="tpl-form-body tpl-form-line">
                <form class="am-form tpl-form-line-form" method="post" action="/logo/{{$logos['id']}}" enctype="multipart/form-data">
                    <div class="am-form-group">
                        <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">logo名 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="name" value="{{$logos['name']}}" class="tpl-form-input" id="user-name" placeholder="">
                            
                        </div>
                        <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">大类<span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                           <select class="first" data-am-selected="{searchBox: 1}" name="cheng">

                            @foreach($dcate as $v)
                            <option value="0" name="cheng"
                                @if($logos['dcate_id'] == $v['id'])
                                selected
                                @endif 
                            >{{$v['name']}}</option>        
                            @endforeach
                                 
                            </select>

                        </div>


                    </div>
                        </div>
                        <label for="user-name" class="am-u-sm-3 am-form-label" > logo图片<span class="tpl-form-line-small-title"></span></label>
                       <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label"> <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="file" name="image" value="{{$logos['image']}}" class="tpl-form-input" id="user-name" placeholder="">
                           <img src="{{$logos['image']}}" width="100px">
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
@endsection