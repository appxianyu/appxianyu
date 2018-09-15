 @include('layouts.qt._header') @show @include('layouts.qt._top') @show
<hr>
<h1 style="margin-left: 150px">
            购物车 
        </h1>
<style type="text/css">
table.full {
    width: 80%;
    margin-bottom: 1em;
    margin-left: 120px;
}

body {
    font-size: 14px;
    font-weight: 400;
    line-height: 1em;
    font-family: "proxima_nova_rgregular";
}
</style>
<div class="wrapper">
    <form action="/cart" method="post" novalidate="" class="cart table-wrap">
        <table class="cart-table full table--responsive">
            <thead class="cart__row cart__header-labels" style="width:60px">
                <tr style="background:#eee;">
                    <th class="text-center">
                        勾选商品
                    </th>
                    <th class="text-center">
                        商品详情
                    </th>
                    <th class="text-center">
                        商品价格
                    </th>
                    <th class="text-center">
                        商品移出
                    </th>
                </tr>
            </thead>
            <tbody>
                <form action="" method="get">
                @foreach($gw as $v) @if($v['user_id'] == $users)
                <tr class="cart__row table__section" style="margin-left: 50px">
                    <td data-label="Quantity">
                        <div class="cart-checkbox " style="float:center">
                            <input class="J_CheckBoxItem" type="checkbox" id="gouwuche" name="duo[]" value="goumai" @change = change>

                            <label for="J_CheckBox_616577491345"></label>
                        </div>
                    </td>
                    <td class="product-name" data-label="Product" style="width:400px;">
                        <div class="img_item">
                            <a href="product.html" class="cart__image">
                                        <img src="{{$v['image']}}" width="66px" height="66px" alt="商品图片未获取">
                                        </a>
                        </div>
                        <p class="product-title">
                            <a href="product.html" style="margin-left: 20px">
                                <h6>商品标题：{{$v['title']}}</h6></a>
                        </p>
                        <div class="variant">
                            <small style="margin-left: 20px">成色：{{$v['cheng']}}</small>
                        </div>
                    </td>
                    <td data-label="Price">
                        <span class="h5">
                                    <span class="money">$ {{$v['money']}} .00</span>
                        </span>
                    </td>
                    
                    <td data-label="Total" class="text-center">
                        <div class="td-inner" style="float:center">
                            <a href="/che/{{$v['id']}}" class="btn btn2">移除</a>
                        </div>
                    </td>
                    @endif @endforeach
                </tr>

            </tbody>
        </table>
        <div class="grid cart__row" style="">
            <div class="grid__item text-right one-third small--one-whole" style="padding-right: 120px;float:right">
                <p>
                    <span class="cart__subtotal-title" style="font-size: 20px">金额：{{$v['money']}}</span>
                    <span class="h3 cart__subtotal"><span class="money"></span></span>
                </p>
                <a href="/dingdan" class="btn btn2" value="结算">结算</a>
                <a href="/" class="btn">返回</a>
            </div>
        </div>
    </form>
</div>
<img style="margin-left:600px" src="//gtd.alicdn.com/tps/i2/T1Q2BUXaxFXXXXXXXX-32-32.gif" class="find-similar-loading">
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript"> 

</script>