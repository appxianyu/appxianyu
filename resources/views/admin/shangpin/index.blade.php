@extends('layouts.admin') @section('title','发表商品列表') @section('content')
<div class="tpl-portlet-components">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span class="am-icon-code"></span> 发表商品添加列表
        </div>
        <div class="tpl-portlet-input tpl-fz-ml">
            <div class="portlet-input input-small input-inline">
                <div class="input-icon right">
                    <i class="am-icon-search"></i>
                    <input type="text" class="form-control form-control-solid" placeholder="搜索..."> </div>
                </div>
            </div>
        </div>
        <div class="tpl-block">
            <div class="am-g">
                <div class="am-u-sm-12 am-u-md-6">
                    <div class="am-btn-toolbar">
                        <div class="am-btn-group am-btn-group-xs">
                            <button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增</button>
                            <button type="button" class="am-btn am-btn-default am-btn-danger"><span class="am-icon-trash-o"></span> 删除</button>
                        </div>
                    </div>
                </div>

                <div class="am-u-sm-12 am-u-md-3">
                   <form action="/shangpin" method="get" enctype="multipart/form-data">
                    <div class="am-input-group am-input-group-sm">
                        <input type="text" name="keywords" class="am-form-field" value="{{request()->keywords}}">
                        <span class="am-input-group-btn">
                         <button class="am-btn  am-btn-default am-btn-success tpl-am-btn-success am-icon-search"></button>
                     </span>
                 </div>
             </form>
         </div>
     </div>
     <div class="am-g">
        <div class="am-u-sm-12">
            <form class="am-form">
                <table class="am-table am-table-striped am-table-hover table-main">
                    <thead>
                        <tr>
                            <th class="table-check">
                                <input type="checkbox" class="tpl-table-fz-check">
                            </th>
                            <th class="table-id">ID</th>
                            <!-- <th class="table-title">用户名</th> -->
                            <th class="table-title">图片</th>
                            <th class="table-title">商品简介</th>
                            <th class="table-title">成色</th>
                            <th class="table-title">小小类</th>
                            <th class="table-title">用户名</th>
                           

                            <th class="table-title">价格</th>
                            <th class="table-title">所在地</th>
                             <th class="table-title">是否交易</th>
                            <th class="table-set">操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($shangpins as $v)
                        <tr>
                            <td>
                                <input type="checkbox">
                            </td>
                            <td>{{$v['id']}}</td>
                            <td>
                                <img src="{{$v['image']}}" width="70px" height="70px"> 
                            </td>
                            <td>{{$v['intro']}}</td>
                            
                            <td>
                                @if($v['cheng'] == 0)
                                全新
                                @else
                                非全新
                                @endif


                            </td>
                            
                            <td class="am-hide-sm-only">{{$v->xxcate['name']}}</td>
                            <td>
                                    @if($v->user)
                                {{$v->user->username}}
                                    @endif
                            </td>
                            <td>{{$v['money']}}</td>
                            <td>{{$v['quyu']}}</td>
                            <td>
                                @if($v['orlogin'] == 0)
                                没有交易
                                @endif
                            </td>
                            <td>
                                <div class="am-btn-toolbar">
                                    <div class="am-btn-group am-btn-group-xs">
                                        <form action="" method="get">

                                            <a style="float:left" href="/shangpin/{{$v['id']}}/edit" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</a>
                                        </form>

                                    </div>
                                    <form style="float:left" action="/shangpin/{{$v['id']}}" method="post">
                                        {{csrf_field()}}{{method_field('DELETE')}}
                                        <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" value=""><span class="am-icon-trash-o"></span> 删除</button>
                                    </div></form>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <style>
                    .pagination{
                      padding-left: 0;
                      margin: 1.5rem 0;
                      list-style: none;
                      color: #999;
                      text-align: left;
                      padding: 0;
                  }

                  .pagination li{
                     display: inline-block;
                 }

                 .pagination li a, .pagination li span{
                     color: #23abf0;
                     border-radius: 3px;
                     padding: 6px 12px;
                     position: relative;
                     display: block;
                     text-decoration: none;
                     line-height: 1.2;
                     background-color: #fff;
                     border: 1px solid #ddd;
                     border-radius: 0;
                     margin-bottom: 5px;
                     margin-right: 5px;
                 }

                 .pagination .active span{
                     color: #23abf0;
                     border-radius: 3px;
                     padding: 6px 12px;
                     position: relative;
                     display: block;
                     text-decoration: none;
                     line-height: 1.2;
                     background-color: #fff;
                     border: 1px solid #ddd;
                     border-radius: 0;
                     margin-bottom: 5px;
                     margin-right: 5px;
                     background: #23abf0;
                     color: #fff;
                     border: 1px solid #23abf0;
                     padding: 6px 12px;
                 }
             </style>
             <div class="am-cf">
                <div class="am-fr">
                    {{ $shangpins->appends(request()->all())->links() }}
                </div>
            </div>
            <hr>
        </form>
    </div>
</div>
</div>
<div class="tpl-alert"></div>
</div>
@endsection