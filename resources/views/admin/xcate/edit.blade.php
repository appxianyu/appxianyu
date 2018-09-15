@extends('layouts.admin') 
@section('title') 二级分类修改 @endsection 
@section('title','二级分类修改') 

@section('content')
<hr>
<div class="tpl-portlet-components">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span class="am-icon-code"></span> 二级分类修改
        </div>
    </div>
    <div class="tpl-block">
        <div class="am-g">
            <div class="tpl-form-body tpl-form-line">
                <form class="am-form tpl-form-line-form" method="post" action="/xcate/{{$xcate['id']}}">
                     <div class="am-form-group">
         <label for="user-phone" class="am-u-sm-3 am-form-label">选择分类<span class="tpl-form-line-small-title">Author</span></label>
           <div class="am-u-sm-9">
                <select data-am-selected="{searchBox: 1}" style="display: none;" name="dcate_id">
                    @foreach($dcates as $v)
                        <option  value="{{$v['id']}}"
                            @if($xcate['dcate_id'] == $v['id'])
                                selected
                            @endif 
                        >{{$v['name']}}</option>
                    @endforeach
                  </select>
             </div>
     </div>
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">用户名 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="name" value="{{$xcate['name']}}" class="tpl-form-input" id="user-name" placeholder="">
                            <small>请填写标题文字6-20位字母数字下划线</small>
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