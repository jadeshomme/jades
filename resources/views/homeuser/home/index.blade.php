@extends('homeuser.layout.master')
@section('home')
@include('homeuser.layout.slide')
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v13.0&appId=626607088332555&autoLogAppEvents=1" nonce="0TVi6bkr"></script>
<div class="main">
    <section class="module-small">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3">
            <h2 class="module-title font-alt">Sản phẩm bán chạy</h2>
          </div>
        </div>
        @foreach ($get_product as $product_2)
            @if ($product_2->status == 1 && $product_2->collection==2)
                <div class="row multi-columns-row">
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="shop-item">
                    <div class="shop-item-image"><img src="{{asset('/uploads/images/'.$product_2->product_img.'')}}" alt="{{$product_2->product_name}}"/>
                        <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
                    </div>
                    <h4 class="shop-item-title font-alt"><a href="/home/product-detail/{{$product_2->id}}">{{$product_2->product_name}}</a></h4>{{number_format($product_2->price_sale,0,'','.')}}đ
                    </div>
                </div>
            @endif
        @endforeach

    </div>
    <div class="row mt-30">
        <div class="col-sm-12 align-center"><a class="btn btn-b btn-round" href="#">Toàn bộ sản phẩm</a></div>
    </div>
    </div>
</section>
<section class="module module-video bg-dark-30" data-background="">
    <div class="container">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
        {{-- <h2 class="module-title font-alt mb-0">Be inspired. Get ahead of trends.</h2> --}}
        </div>
    </div>
    </div>
    <div class="video-player" data-property="{videoURL:'https://www.youtube.com/watch?v=D0_JszR9cuA', containment:'.module-video', startAt:0, mute:true, autoPlay:true, loop:true, opacity:1, showControls:false, showYTLogo:false, vol:25}"></div>
</section>
<section class="module">
    <div class="container">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
        <h2 class="module-title font-alt">Sản phẩm mới</h2>
        <div class="module-subtitle font-serif">Thời trang rất quan trọng, nó khiến cuộc sống này trở nên tốt đẹp hơn. Và cũng giống như những điều tuyệt vời khác, thời trang xứng đáng được bạn đầu tư công sức chăm chút cẩn thận.</div>
        </div>
    </div>
    <div class="row">
        <div class="owl-carousel text-center" data-items="5" data-pagination="false" data-navigation="false">
            @foreach ($get_product as $product_1)
                @if ($product_1->status == 1 && $product_1->collection==1)
                    <div class="owl-item">
                        <div class="col-sm-12">
                        <div class="ex-product"><a href="/home/product-detail/{{$product_1->id}}"><img src="{{asset('/uploads/images/'.$product_1->product_img.'')}}" alt="{{$product_1->product_name}}"/></a>
                            <h4 class="shop-item-title font-alt"><a href="/home/product-detail/{{$product_1->id}}">{{$product_1->product_name}}</a></h4>{{number_format($product_1->unit_price,0,'','.')}}đ
                        </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
    </div>
</section>
<hr class="divider-w">
{{-- <section class="module" id="news">
    <div class="container">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
        <h2 class="module-title font-alt">Our News</h2>
        </div>
    </div>
    <div class="row multi-columns-row post-columns wo-border">
        <div class="col-sm-6 col-md-4 col-lg-4">
        <div class="post mb-40">
            <div class="post-header font-alt">
            <h2 class="post-title"><a href="#">Receipt of the new collection</a></h2>
            </div>
            <div class="post-entry">
            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
            </div>
            <div class="post-more"><a class="more-link" href="#">Read more</a></div>
        </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
        <div class="post mb-40">
            <div class="post-header font-alt">
            <h2 class="post-title"><a href="#">Sale of summer season</a></h2>
            </div>
            <div class="post-entry">
            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
            </div>
            <div class="post-more"><a class="more-link" href="#">Read more</a></div>
        </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
        <div class="post mb-40">
            <div class="post-header font-alt">
            <h2 class="post-title"><a href="#">New lookbook</a></h2>
            </div>
            <div class="post-entry">
            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
            </div>
            <div class="post-more"><a class="more-link" href="#">Read more</a></div>
        </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
        <div class="post mb-40">
            <div class="post-header font-alt">
            <h2 class="post-title"><a href="#">Receipt of the new collection</a></h2>
            </div>
            <div class="post-entry">
            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
            </div>
            <div class="post-more"><a class="more-link" href="#">Read more</a></div>
        </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
        <div class="post mb-40">
            <div class="post-header font-alt">
            <h2 class="post-title"><a href="#">Sale of summer season</a></h2>
            </div>
            <div class="post-entry">
            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
            </div>
            <div class="post-more"><a class="more-link" href="#">Read more</a></div>
        </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
        <div class="post mb-40">
            <div class="post-header font-alt">
            <h2 class="post-title"><a href="#">New lookbook</a></h2>
            </div>
            <div class="post-entry">
            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
            </div>
            <div class="post-more"><a class="more-link" href="#">Read more</a></div>
        </div>
        </div>
    </div>
    </div>
</section> --}}
<hr class="divider-w">
<section class="module-small">
    <div class="container">
    <div class="row client">
        <div class="owl-carousel text-center" data-items="6" data-pagination="false" data-navigation="false">
        <div class="owl-item">
            <div class="col-sm-12">
            <div class="client-logo"><img src="{{asset('/uploads/images/trong suốt(đen)-01.png')}}" alt="Client Logo"/></div>
            </div>
        </div>
        <div class="owl-item">
            <div class="col-sm-12">
            <div class="client-logo"><img src="{{asset('/uploads/images/trong suốt(đen)-01.png')}}" alt="Client Logo"/></div>
            </div>
        </div>
        <div class="owl-item">
            <div class="col-sm-12">
            <div class="client-logo"><img src="{{asset('/uploads/images/trong suốt(đen)-01.png')}}" alt="Client Logo"/></div>
            </div>
        </div>
        <div class="owl-item">
            <div class="col-sm-12">
            <div class="client-logo"><img src="{{asset('/uploads/images/trong suốt(đen)-01.png')}}" alt="Client Logo"/></div>
            </div>
        </div>
        <div class="owl-item">
            <div class="col-sm-12">
            <div class="client-logo"><img src="{{asset('/uploads/images/trong suốt(đen)-01.png')}}" alt="Client Logo"/></div>
            </div>
        </div>
        <div class="owl-item">
            <div class="col-sm-12">
            <div class="client-logo"><img src="{{asset('/uploads/images/trong suốt(đen)-01.png')}}" alt="Client Logo"/></div>
            </div>
        </div>
        <div class="owl-item">
            <div class="col-sm-12">
            <div class="client-logo"><img src="{{asset('/uploads/images/trong suốt(đen)-01.png')}}" alt="Client Logo"/></div>
            </div>
        </div>
        <div class="owl-item">
            <div class="col-sm-12">
            <div class="client-logo"><img src="{{asset('/uploads/images/trong suốt(đen)-01.png')}}" alt="Client Logo"/></div>
            </div>
        </div>
        <div class="owl-item">
            <div class="col-sm-12">
            <div class="client-logo"><img src="{{asset('/uploads/images/trong suốt(đen)-01.png')}}" alt="Client Logo"/></div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<div class="module-small bg-dark">
    <div class="container">
    <div class="row">
        <div class="col-sm-3">
        <div class="widget">
            <h5 class="widget-title font-alt">Thông tin chung</h5>
            <p>CÔNG TY TNHH JADES HOMME.</p>
            <p>SĐT: 083 993 7777</p>Địa chỉ: 107B Tôn Đức Thắng - Đống Đa - Hà Nội
            <p>Email:<a href="#">somecompany@example.com</a></p>
        </div>
        </div>
        <div class="col-sm-3">
        <div class="widget">
            <h5 class="widget-title font-alt">Chăm sóc khách hàng</h5>
            <ul class="icon-list">
            <li><a href="#">Hướng dẫn mua hàng</a></li>
            <li><a href="#">Chính sách đổi trả</a></li>
            <li><a href="#">Chính sách bảo hành</a></li>
            </ul>
        </div>
        </div>
        <div class="col-sm-3">
        <div class="widget">
            <h5 class="widget-title font-alt">Danh mục sản phẩm</h5>
            <ul class="icon-list">
            <li><a href="#">Áo</a></li>
            <li><a href="#">Quần</a></li>
            <li><a href="#">Phụ kiện</a></li>
            </ul>
        </div>
        </div>
        <div class="col-sm-3">
        <div class="widget">
            <h5 class="widget-title font-alt">Liên kết</h5>
            <ul class="widget-posts">
            <li class="clearfix">
                <div class="fb-page" data-href="https://www.facebook.com/JadesHomme" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/JadesHomme" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/JadesHomme">JadesHomme</a></blockquote></div>
            </li>
            </ul>
        </div>
        </div>
    </div>
    </div>
</div>
<hr class="divider-d">
<footer class="footer bg-dark">
    <div class="container">
    <div class="row">
        <div class="col-sm-6">
        <p class="copyright font-alt">&copy; 2022&nbsp;<a href="index.html">Thiết kế, xây dựng website cho doanh nghiệp</a>,
             Liên hệ : 0969690331</p>
        </div>
        <div class="col-sm-6">
        <div class="footer-social-links"><a href="https://www.facebook.com/JadesHomme">
            <i class="fa fa-facebook"></i></a>
            {{-- <a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i> --}}
            </a>
        </div>
        </div>
    </div>
    </div>
</footer>
</div>
@endsection


