@extends('layouts.admin') @section('title','用户列表') @section('content')
<div class="tpl-portlet-components">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span class="am-icon-code"></span> 列表
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
            	<form action="/paimai" method="get">
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
                                <th class="table-title">商品图</th>
                                <th class="table-title">简介</th>
                                <th class="table-title">成色</th>
                                <th class="table-title">起拍价格</th>
                                <th class="table-title">加价幅度</th>
                                <th class="table-title">开拍时间</th>
                                <th class="table-title">结束时间</th>
                                <th class="table-set">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($paimais as $v) 
                            <tr>
                                <td>
                                    <input type="checkbox">
                                </td>
                                <td>{{$v['id']}}</td>
                                <td class="am-hide-sm-only"><img width="80" src="{{$v['image']}}"></td>
                                <td>{{$v['intro']}}</td>
                                <td>@if($v['cheng'] == 0)非全新
                                     @else
                                    全新 @endif
                                </td>
                                <td>{{$v['money']}}</td>
                                <td>{{$v['jmoney']}}</td>
                                <td>{{$v['opentime']}}</td>
                                <td>{{$v['overtime']}}</td>
                                <td> 
                                    <div class="am-btn-toolbar">
                                       <div class="am-btn-group am-btn-group-xs">
                                        <form action="" method="get">
                                           <a style="float:left" href="/paimai/{{$v['id']}}/edit" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span>编辑</a>
                                        </form></div>                                           
                                         <form style="float:left" action="/paimai/{{$v['id']}}" method="post">
                                           <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o">{{csrf_field()}}
                                           {{method_field('DELETE')}}</span>删除</button>
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
                            {{ $paimais->appends(request()->all())->links() }}
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