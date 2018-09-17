@extends('layouts.admin') @section('title') 广告添加 @endsection @section('title','广告填') @section('content')
<hr>
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.all.min.js">
</script>
<script type="text/javascript" charset="utf-8" src="/ueditor/lang/zh-cn/zh-cn.js"></script>
<div class="tpl-portlet-components">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span class="am-icon-code"></span> 广告添加
        </div>
    </div>
    <div class="tpl-block">
        <div class="am-g">
            <div class="tpl-form-body tpl-form-line">
                <form class="am-form tpl-form-line-form" method="post" action="/guanggao" enctype="multipart/form-data">
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">发布ID <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="user_id" class="tpl-form-input" id="user-name" placeholder="">
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-phone" class="am-u-sm-3 am-form-label">选择分类<span class="tpl-form-line-small-title">Author</span></label>
                        <div class="am-u-sm-9">
                            <select data-am-selected="{searchBox: 1}" style="display: none;" name="xxcate_id">
                                @foreach($xxcate as $v)
                                <option value="{{$v['id']}}">{{$v['name']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                   
                    <div class="am-form-group">
                        <label for="user-weibo" class="am-u-sm-3 am-form-label">商品图片 </label>
                        <div class="am-u-sm-9">
                            <div class="am-form-group am-form-file">
                                <div class="tpl-form-file-img">
                                </div>
                                <button type="button" class="am-btn am-btn-danger am-btn-sm">
                                    <i class="am-icon-cloud-upload"></i> 添加封面图片</button>
                                <input id="doc-form-file" type="file" name="image">
                            </div>
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">商品成色 <span class="tpl-form-line-small-title"></span></label>
                        <select data-am-selected="{searchBox: 1}" name="cheng" style="display: none;">
                                <option value="1">全新</option>
                                <option value="0">非全新</option>
                             </select>
                    </div>
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">价格 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="money" class="tpl-form-input" id="user-name" placeholder="">
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">标题 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="title" class="tpl-form-input" id="user-name" placeholder="">
                        </div>
                    </div>
                     <div class="am-form-group">
                        <label class="am-u-sm-3 am-form-label">内容</label>
                        <div class="am-u-sm-9">
                            <script id="editor" type="text/plain" name="intro" style="width:100%;height:350px;"></script>
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">所在地 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="quyu" class="tpl-form-input" id="user-name" placeholder="">
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">排序 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="orby" class="tpl-form-input" id="user-name" placeholder="">
                        </div>
                    </div>
                    {{csrf_field()}}
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