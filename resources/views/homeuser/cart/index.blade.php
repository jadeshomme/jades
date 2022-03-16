@extends('homeuser.layout.master')
@section('home')
<style>
    .navbar-custom {
        background-color: rgba(10, 10, 10, 0.9) !important;
    }
    .navbar-transparent {
        padding-bottom: 0px;
        padding-top: 0px;
    }
</style>

@include('elements.show_error')

<?php
    $content = Cart::content();

?>
<div class="main">
    <section class="module">
        <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
            <h1 class="module-title font-alt">Chi tiết giỏ hàng</h1>
            </div>
        </div>
        <hr class="divider-w pt-20">
        <div class="row">
            <div class="col-sm-12">
            <table class="table table-striped table-border checkout-table">
                <tbody>
                <tr>
                    <th class="hidden-xs">Ảnh</th>
                    <th>Sản phẩm</th>
                    <th class="hidden-xs">Giá tiền</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    <th>Xoá</th>
                </tr>
                @foreach($content as $v_content)
                    <tr>
                        <td class="hidden-xs"><a href="#"><img src="{{asset('/uploads/images/'.$v_content->options->image.'')}}" alt="Accessories Pack"/></a></td>
                        <td>
                        <h5 class="product-title font-alt">{{$v_content->name}}</h5>
                        </td>
                        <td class="hidden-xs">
                        <h5 class="product-title font-alt">{{number_format($v_content->price).' vnd'}}</h5>
                        </td>
                        <td>
                        <div class="dec button_inc" row-id="{{$v_content->rowId}}">-</div>
                        <input class="form-control qty2" type="number" id="qty_{{$v_content->rowId}}" name="qty" value="{{$v_content->qty}}" max="50" min="1"/>
                        <div class="inc button_inc" row-id="{{$v_content->rowId}}">+</div>
                        </td>
                        <td>
                        <h5 class="product-title font-alt">{{number_format($v_content->price * $v_content->qty).' vnd'}}</h5>
                        </td>
                        <td class="pr-remove"><a type="button" class="delete_cart" data-id="{{$v_content->rowId}}" title="Xoá"><i class="fa fa-times"></i></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
            <div class="form-group">
                <a href="/" class="btn btn-round btn-g" type="button">Tiếp tục mua sản phẩm</a>
            </div>
            </div>
            <div class="col-sm-3">
            <div class="form-group">
                {{-- <input class="form-control" type="text" id="" name="" placeholder="Coupon code"/> --}}
            </div>
            </div>
            <div class="col-sm-3 col-sm-offset-3">
            <div class="form-group">
                {{-- <button class="btn btn-block btn-round btn-d pull-right" type="submit">Update Cart</button> --}}
            </div>
            </div>
        </div>
        <hr class="divider-w">
        @if (count($content)>0)
            <div class="row mt-70">
                <div class="col-sm-5 col-sm-offset-7">
                <div class="shop-Cart-totalbox">
                    <h4 class="font-alt">Giá trị đơn hàng</h4>
                    <table class="table table-striped table-border checkout-table">
                    <tbody>
                        <tr>
                        <th>Tổng giá trị đơn hàng :</th>
                        <td>{{Cart::subtotal().' '.'vnd'}}</td>
                        </tr>
                        <tr class="shop-Cart-totalprice">
                        <th>Thanh toán :</th>
                        <td>{{Cart::subtotal().' '.'vnd'}}</td>
                        </tr>
                    </tbody>
                    </table>
                    <a href="/home/checkout" class="btn btn-lg btn-block btn-round btn-d" type="button">Thanh Toán</a>
                </div>
                </div>
            </div>
        @endif
        </div>
    </section>
    @include('homeuser.layout.footer')

</div>


@endsection
@section('javascript')
    <script>
        $(document).on("click",".delete_cart",function() {
            let id = $(this).attr('data-id');
            $.confirm({
                title: 'Xác nhận xoá',
                content: '<p style="color:red;">Bạn có chắc chắn muốn xoá không?</p>',
                buttons: {
                    'Có': {
                        action: function () {
                            Loading.show();
                            axios({
                                method: 'post',
                                url: '/home/delete-cart',
                                data: {
                                    id:id,
                                }
                            }).then(function (response) {
                                Toastr.success(response.data);
                                location.reload();
                            }).catch(function(error) {
                                Toastr.error(error.response.data);
                            }).finally(function() {
                                Loading.hide();
                            });
                        }
                    },
                    'Không':{
                        action: function () {

                        }
                    }

                }
            });

        });
    </script>


<script>
    $(document).on("click",".dec",function() {
        Loading.show();
        var id  = $(this).attr('row-id');
        var qty = $('#qty_'+id+'').val();
        axios({
            method: 'post',
            url: '/home/update-cart',
            data: {
                id:id,
                qty:qty
            }
        }).then(function (response) {
            Toastr.success(response.data);
            location.reload();
        }).catch(function(error) {
            Toastr.error(error.response.data);
        }).finally(function() {
            Loading.hide();
        });
    });
</script>

<script>
    $(document).on("click",".inc",function() {
        Loading.show();
        var id  = $(this).attr('row-id');
        var qty = $('#qty_'+id+'').val();
        axios({
            method: 'post',
            url: '/home/update-cart',
            data: {
                id:id,
                qty:qty
            }
        }).then(function (response) {
            Toastr.success(response.data);
            // location.reload();
        }).catch(function(error) {
            Toastr.error(error.response.data);
        }).finally(function() {
            Loading.hide();
        });
    });
</script>
@endsection
