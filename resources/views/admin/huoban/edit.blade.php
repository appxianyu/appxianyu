合作@extends('layouts.admin') @section('title') 合作修改 @endsection @section('title','合作修改') @section('content')
<hr>
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.all.min.js">
</script>
<script type="text/javascript" charset="utf-8" src="/ueditor/lang/zh-cn/zh-cn.js"></script>
<div class="tpl-portlet-components">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span class="am-icon-code"></span> 合作修改
        </div>
    </div>
    <div class="tpl-block">
        <div class="am-g">
            <div class="tpl-form-body tpl-form-line">
                <form class="am-form tpl-form-line-form" method="post" action="/huoban/{{$huobans['id']}}" enctype="multipart/form-data">
                    
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">公司名称 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="name" class="tpl-form-input" id="user-name" placeholder="" value="{{$huobans['name']}}">
                        </div>
                    </div>
                   
                    <div class="am-form-group">
                        <label class="am-u-sm-3 am-form-label">商品简介</label>
                        <div class="am-u-sm-9">
                            <textarea class="" name="intro" rows="5">{{$huobans['intro']}}</textarea>
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-weibo" class="am-u-sm-3 am-form-label">公司logo </label>
                        <div class="am-u-sm-9">
                            <div class="am-form-group am-form-file">
                                <div class="tpl-form-file-img">
                                </div>
                                <button type="button" class="am-btn am-btn-danger am-btn-sm">
                                    <i class="am-icon-cloud-upload"></i> 添加logo</button>
                                <input id="doc-form-file" type="file" name="logo" value="{{$huobans['logo']}}">
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">url <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="url" class="tpl-form-input" id="user-name" placeholder="" value="{{$huobans['url']}}">
                        </div>
                    </div>
                    {{csrf_field()}}{{method_field('PUT')}}
                    <div class="am-form-group">
                        <div class="am-u-sm-9 am-u-sm-push-3">
                            <button class="am-btn am-btn-primary tpl-btn-bg-color-success ">提交</button>
                        </div>
                    </div>
                </form>
                <script>
                var ue = UE.getEditor('editor');
                </script>
            </div>
        </div>
    </div>
</div>
@endsection