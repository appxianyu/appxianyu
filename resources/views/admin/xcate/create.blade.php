@extends('layouts.admin') 
@section('title') 二级分类添加 @endsection 
@section('title','二级分类添加') 

@section('content')
<hr>
<div class="tpl-portlet-components" >
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span class="am-icon-code">二级分类添加</span> 
        </div>
    </div>
    
    <div class="tpl-block" style="height:700px">
        <div class="am-g">
            <div class="tpl-form-body tpl-form-line">
                <form class="am-form tpl-form-line-form" method="post" action="/xcate">
                    <div class="am-form-group">
                         <label for="user-phone" class="am-u-sm-3 am-form-label">选择分类<span class="tpl-form-line-small-title">Author</span></label>
                            <div class="am-u-sm-9">
                                <select data-am-selected="{searchBox: 1}" style="display: none;" name="dcate_id"  >
                                    @foreach($dcates as $v)
                                        <option value="{{$v['id']}}">{{$v['name']}}</option>
                                    @endforeach
                                  </select>
                             </div>
                     </div>
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">二级分类名 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="name" class="tpl-form-input" id="user-name" placeholder="">                          
                        </div>
                    </div>         
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
