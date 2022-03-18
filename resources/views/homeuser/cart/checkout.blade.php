@extends('homeuser.layout.master')
@section('home')
<style>
    a.btn_1, .btn_1 {
        border: none;
        color: #fff;
        background: #004dda;
        outline: none;
        cursor: pointer;
        display: inline-block;
        text-decoration: none;
        padding: 12px 25px;
        color: #fff;
        -moz-transition: all 0.3s ease-in-out;
        -o-transition: all 0.3s ease-in-out;
        -webkit-transition: all 0.3s ease-in-out;
        -ms-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        -ms-border-radius: 3px;
        border-radius: 3px;
        line-height: normal;
    }
    .navbar-custom {
        background-color: rgba(10, 10, 10, 0.9) !important;
    }
    .navbar-transparent {
        padding-bottom: 0px;
        padding-top: 0px;
    }
    /*============================================================================================*/
    /* CHECKOUT PAGE */
    /*============================================================================================*/
    /*-------- 2.6 Checkout --------*/
    .nav-link {
    display: block;
    padding: 0 15px;
    height: 30px;
    font-size: 15px;
    font-size: 0.9375rem;
    color: #444;
    }

    .nav-link:hover, .nav-link:focus {
    text-decoration: none;
    }

    .nav-link.disabled {
    color: #6c757d;
    }

    .nav-tabs {
    border: none;
    border-bottom: 2px solid #dee2e6;
    }

    .nav-tabs .nav-item {
    margin-bottom: -2px;
    }

    .nav-tabs .nav-link {
    border: none;
    }

    .nav-tabs .nav-link.disabled {
    color: #6c757d;
    background-color: transparent;
    border-color: transparent;
    }

    .nav-tabs .nav-link.active,
    .nav-tabs .nav-item.show .nav-link {
    border-bottom: 2px solid #004dda;
    color: #004dda;
    background-color: transparent;
    }

    .tab-content.checkout {
    padding: 15px 0 0 0;
    }
    .tab-content.checkout hr {
    margin: 10px 0;
    }
    .tab-content.checkout .form-group {
    margin-bottom: 10px;
    }
    .tab-content.checkout .nice-select {
    margin-bottom: 0;
    }
    .tab-content.checkout .social_bt {
    margin-bottom: 10px;
    }

    #other_addr_c {
    display: none;
    }

    .step {
    margin-bottom: 30px;
    }
    @media (max-width: 991px) {
    .step {
        margin-bottom: 35px;
    }
    }
    .step h3:before {
    width: 0;
    height: 0;
    border-top: 20px inset transparent;
    border-bottom: 20px inset transparent;
    border-left: 10px solid #f8f8f8;
    position: absolute;
    content: "";
    top: 0;
    left: 0;
    }
    @media (max-width: 767px) {
    .step h3:before {
        border: none;
    }
    }
    .step h3:after {
    width: 0;
    height: 0;
    border-top: 20px inset transparent;
    border-bottom: 20px inset transparent;
    border-left: 10px solid #333;
    position: absolute;
    content: "";
    top: 0;
    right: -10px;
    z-index: 2;
    }
    @media (max-width: 767px) {
    .step h3:after {
        border: none;
    }
    }
    .step.first h3:before, .step.last h3:after {
    border: none;
    }
    .step h3 {
    padding: 10px 12px 10px 20px;
    background: #333;
    position: relative;
    margin-bottom: 15px;
    color: #fff;
    font-size: 16px;
    font-size: 1rem;
    }
    @media (max-width: 767px) {
    .step h3 {
        margin-left: -15px;
        margin-right: -15px;
        padding-left: 15px;
    }
    }
    .step #forgot_pw {
    -webkit-box-shadow: 0px 0px 30px 0px rgba(0, 0, 0, 0.1);
    -moz-box-shadow: 0px 0px 30px 0px rgba(0, 0, 0, 0.1);
    box-shadow: 0px 0px 30px 0px rgba(0, 0, 0, 0.1);
    }

    .payments ul, .shipping ul {
    list-style: none;
    margin: 0 0 30px 0;
    padding: 0;
    }
    .payments ul li, .shipping ul li {
    border-bottom: 1px solid #ededed;
    margin-bottom: 8px;
    }
    .payments ul li a.info, .shipping ul li a.info {
    display: inline-block;
    float: right;
    color: #444;
    }
    .payments ul li a.info:hover, .shipping ul li a.info:hover {
    color: #004dda;
    }
    .payments ul li a.info:after, .shipping ul li a.info:after {
    font-family: 'themify';
    content: "\e718";
    position: relative;
    right: 0;
    top: 0;
    font-size: 15px;
    font-size: 0.9375rem;
    }

    .payment_info figure img {
    height: 20px;
    width: auto;
    }
    .payment_info p {
    font-size: 13px;
    font-size: 0.8125rem;
    }

    .box_general.summary {
    box-shadow: none;
    background-color: #fff;
    padding-bottom: 20px;
    padding: 25px 25px 20px 25px;
    border: 1px solid #ededed;
    }
    .box_general.summary ul {
    list-style: none;
    margin: 0 0 15px 0;
    padding: 0;
    border-bottom: 1px solid #ededed;
    }
    .box_general.summary ul li {
    padding: 0;
    margin: 0 0 15px 0;
    font-weight: 500;
    display: block;
    line-height: 1.3;
    }
    .box_general.summary ul li em {
    font-style: normal;
    float: left;
    width: 70%;
    font-weight: 400;
    }
    .box_general.summary ul li span {
    float: right;
    text-align: right;
    width: 30%;
    font-weight: 700;
    }
    .box_general.summary label.container_check {
    font-size: 12px;
    font-size: 0.75rem;
    }
    .box_general.summary .total {
    font-size: 18px;
    font-size: 1.125rem;
    font-weight: 700;
    border-bottom: none;
    color: red;
    }
    .box_general.summary .total span {
    float: right;
    margin-bottom: 15px;
    }

    #confirm {
    text-align: center;
    background-color: #f8f8f8;
    padding: 150px 15px;
    }
    @media (max-width: 767px) {
    #confirm {
        padding: 60px 15px;
    }
    }

    @-webkit-keyframes checkmark {
    0% {
        stroke-dashoffset: 50px;
    }
    100% {
        stroke-dashoffset: 0;
    }
    }
    @-ms-keyframes checkmark {
    0% {
        stroke-dashoffset: 50px;
    }
    100% {
        stroke-dashoffset: 0;
    }
    }
    @keyframes checkmark {
    0% {
        stroke-dashoffset: 50px;
    }
    100% {
        stroke-dashoffset: 0;
    }
    }
    @-webkit-keyframes checkmark-circle {
    0% {
        stroke-dashoffset: 240px;
    }
    100% {
        stroke-dashoffset: 480px;
    }
    }
    @-ms-keyframes checkmark-circle {
    0% {
        stroke-dashoffset: 240px;
    }
    100% {
        stroke-dashoffset: 480px;
    }
    }
    @keyframes checkmark-circle {
    0% {
        stroke-dashoffset: 240px;
    }
    100% {
        stroke-dashoffset: 480px;
    }
    }
    .inlinesvg .svg svg {
    display: inline;
    }

    .icon--order-success svg path {
    -webkit-animation: checkmark 0.25s ease-in-out 0.7s backwards;
    animation: checkmark 0.25s ease-in-out 0.7s backwards;
    }

    .icon--order-success svg circle {
    -webkit-animation: checkmark-circle 0.6s ease-in-out backwards;
    animation: checkmark-circle 0.6s ease-in-out backwards;
    }
</style>
    @include('elements.show_error')
    <div class="main">
        <section class="module bg-dark-30" data-background="assets/images/section-4.jpg">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h1 class="module-title font-alt mb-0">Thanh toán - Đặt hàng</h1>
              </div>
            </div>
          </div>
        </section>
        <section class="module">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="step first">
                            <h3>1. Địa chỉ nhận hàng</h3>
                        <div class="">
                            <div class="" id="tab_1" role="tabpanel" aria-labelledby="tab_1">
                                <!-- /row -->
                                <div class="row no-gutters">
                                    <div class="col-md-12 form-group">
                                        <div class="province">
                                            <select class="form-control add_bottom_10" name="province" id="province">
                                                    <option value="" selected>Thành phố*</option>
                                                    @foreach ($data_province as $province)
                                                        <option value="{{$province->ProvinceID}}">{{$province->ProvinceName}}</option>
                                                    @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- /row -->
                                <div class="row no-gutters">
                                    <div class="col-md-12 form-group">
                                        <div class="form-group">
                                            <div class="district">
                                                <select class="form-control add_bottom_10" name="district" id="district">
                                                    <option value="" selected>Quận , Huyện*</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col-md-12 form-group">
                                        <div class="form-group">
                                            <div class="custom-select-form ward">
                                                <select class="form-control add_bottom_10" name="ward" id="ward">
                                                    <option value="" selected>Phường , Xã*</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row no-gutters">
                                    <div class="col-md-12 form-group">
                                        <div class="form-group">
                                            <input type="text" class="form-control address" placeholder="Địa chỉ*">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control phone" placeholder="Số điện thoại">
                                </div>



                                <div id="other_addr_c" class="pt-2">

                                </div>
                                <!-- /other_addr_c -->
                                <hr>
                            </div>
                            <!-- /tab_1 -->
                        </div>
                        </div>
                        <!-- /step -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="step middle payments">
                            <h3>2. Phương thức thanh toán</h3>
                                <ul>
                                    @foreach ($get_pay as $pay)
                                        <li>
                                            <label class="container_radio">{{$pay->pay_name}}
                                                <input type="radio" name="payment_methods" id="payment_methods" value="{{$pay->id}}">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                    @endforeach
                                </ul>
                        </div>
                        <!-- /step -->
                    </div>
                    <?php
                        $content = Cart::content();
                    ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="step last">
                            <h3>3. Đơn hàng của bạn</h3>
                        <div class="box_general summary">
                                <ul>
                                    @foreach($content as $v_content)
                                        <li class="clearfix"><em>{{$v_content->qty}}x {{$v_content->name}}</em>  <span>{{number_format($v_content->price*$v_content->qty).' đ'}}</span></li>
                                    @endforeach
                                </ul>
                            <ul>
                                <li class="clearfix"><em><strong>Thành tiền</strong></em>  <span>{{Cart::subtotal().' '.'đ'}}</span></li>
                            </ul>
                            <div class="total clearfix ">Thanh toán <span>{{Cart::subtotal().' '.'đ'}}</span></div>

                            <a href="#" class="btn_1 full-width addOrder">Đặt hàng</a>
                        </div>
                        <!-- /box_general -->
                        </div>
                        <!-- /step -->
                    </div>
                </div>
            </div>
        </section>
        <!-- /row -->
        @include('homeuser.layout.footer')
    </div>
    <!-- /container -->
@endsection
@section('javascript')

<script>
    $(document).on("change","#province",function() {
        Loading.show();
        var province_id = $(this).val();
        console.log(province_id);
        axios({
            method: 'post',
            url: '/home/district',
            data: {
                province_id:province_id,
            }
        }).then(function (response) {
            $("#district").html('');
            $("#district").append(response.data);
        }).catch(function(error) {
            Toastr.error(error.response.data);
        }).finally(function() {
            Loading.hide();
        });
    });
</script>


<script>
    $(document).on("change","#district",function() {
        Loading.show();
        var district_id = $(this).val();

        axios({
            method: 'post',
            url: '/home/ward',
            data: {
                district_id:district_id,
            }
        }).then(function (response) {
            $("#ward").html('');
            $("#ward").append(response.data);
        }).catch(function(error) {
            Toastr.error(error.response.data);
        }).finally(function() {
            Loading.hide();
        });
    });
</script>


<script>
    $(document).on("click",".addOrder",function() {
        Loading.show();
        var address         = $('.address').val();
        var province        = $('#province').val();
        var district        = $('#district').val();
        var ward            = $('#ward').val();
        var payment_methods = $("input[name='payment_methods']:checked").val();
        var phone           = $('.phone').val();

        axios({
            method: 'post',
            url: '/home/addOrder',
            data: {
                province:province,
                district:district,
                ward:ward,
                address:address,
                payment_methods:payment_methods,
                phone:phone
            }
        }).then(function (response) {
            Toastr.success(response.data);
            window.location='/home';
        }).catch(function(error) {
            Toastr.error(error.response.data);
        }).finally(function() {
            Loading.hide();
        });
    });
</script>

@endsection
