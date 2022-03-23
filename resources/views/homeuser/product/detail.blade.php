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
<div class="main">
    <form action="{{ route('homePage.cart.save') }}" method="post">
        @csrf
        <section class="module">
            <div class="container">
                <input name="productId_hidden" type="hidden" value="{{$get_product->id}}" />
                <div class="row">
                <div class="col-sm-6 mb-sm-40"><a class="gallery" href="{{asset('/uploads/images/'.$get_product->product_img.'')}}"><img src="{{asset('/uploads/images/'.$get_product->product_img.'')}}" alt="Single Product Image"/></a>
                    <ul class="product-gallery">
                    @foreach ($get_product->productImg as $item)
                        <li><a class="gallery" href="{{$item->image}}"></a><img src="{{$item->image}}" alt="Single Product"/></li>
                    @endforeach
                    </ul>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                    <div class="col-sm-12">
                        <h1 class="product-title font-alt">{{$get_product->product_name}}</h1>
                    </div>
                    </div>
                    <div class="row mb-20">
                    <div class="col-sm-12"><span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star-off"></i></span><a class="open-tab section-scroll" href="#reviews"> Mã sản phẩm :{{$get_product->product_code}}</a>
                    </div>
                    </div>
                    <div class="row mb-20">
                    <div class="col-sm-12">
                        <div class="price font-alt"><span class="amount">{{ number_format($get_product->price_sale) }}đ</span></div>
                    </div>
                    </div>
                    <div class="row mb-20">
                    <div class="col-sm-12">
                        <div class="description">
                        <p>{{$get_product->product_description}}</p>
                        </div>
                    </div>
                    </div>
                    <div class="row mb-20">
                    <div class="col-sm-4 mb-sm-20">
                        <input class="form-control input-lg" type="number" name="qty" value="1" max="40" min="1" required="required"/>
                    </div>
                    <div class="col-sm-8"><button type="submit" class="btn btn-lg btn-block btn-round btn-b">Thêm vào giỏ hàng</button></div>
                    </div>
                    <div class="row mb-20">
                    {{-- <div class="col-sm-12">
                        <div class="product_meta">Categories:<a href="#"> Man, </a><a href="#">Clothing, </a><a href="#">T-shirts</a>
                        </div>
                    </div> --}}
                    </div>
                </div>
                </div>
                <div class="row mt-70">
                <div class="col-sm-12">
                    <ul class="nav nav-tabs font-alt" role="tablist">
                    <li class="active"><a href="#description" data-toggle="tab"><span class="icon-tools-2"></span>Chi tiết sản phẩm</a></li>
                    <li><a href="#data-sheet" data-toggle="tab"><span class="icon-tools-2"></span>Thông số</a></li>
                    {{-- <li><a href="#reviews" data-toggle="tab"><span class="icon-tools-2"></span>Reviews (2)</a></li> --}}
                    </ul>
                    <div class="tab-content">
                    <div class="tab-pane active content_product" id="description">
                        <p class="product_content">{{$get_product->product_content}}</p>
                    </div>
                    <div class="tab-pane" id="data-sheet">
                        <table class="table table-striped ds-table table-responsive">
                        <tbody>
                            <tr>
                            <th>Lenght</th>
                            <th>{{$get_product->product_length}}</th>
                            </tr>
                            <tr>
                            <td>Width</td>
                            <td>{{$get_product->product_width}}</td>
                            </tr>
                            <tr>
                            <td>Height</td>
                            <td>{{$get_product->product_height}}</td>
                            </tr>
                            <tr>

                        </tbody>
                        </table>
                    </div>
                    {{-- <div class="tab-pane" id="reviews">
                        <div class="comments reviews">
                        <div class="comment clearfix">
                            <div class="comment-avatar"><img src="" alt="avatar"/></div>
                            <div class="comment-content clearfix">
                            <div class="comment-author font-alt"><a href="#">John Doe</a></div>
                            <div class="comment-body">
                                <p>The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The European languages are members of the same family. Their separate existence is a myth.</p>
                            </div>
                            <div class="comment-meta font-alt">Today, 14:55 -<span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star-off"></i></span>
                            </div>
                            </div>
                        </div>
                        <div class="comment clearfix">
                            <div class="comment-avatar"><img src="" alt="avatar"/></div>
                            <div class="comment-content clearfix">
                            <div class="comment-author font-alt"><a href="#">Mark Stone</a></div>
                            <div class="comment-body">
                                <p>Europe uses the same vocabulary. The European languages are members of the same family. Their separate existence is a myth.</p>
                            </div>
                            <div class="comment-meta font-alt">Today, 14:59 -<span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star-off"></i></span><span><i class="fa fa-star star-off"></i></span>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="comment-form mt-30">
                        <h4 class="comment-form-title font-alt">Add review</h4>
                        <form method="post">
                            <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                <label class="sr-only" for="name">Name</label>
                                <input class="form-control" id="name" type="text" name="name" placeholder="Name"/>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                <label class="sr-only" for="email">Name</label>
                                <input class="form-control" id="email" type="text" name="email" placeholder="E-mail"/>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                <select class="form-control">
                                    <option selected="true" disabled="">Rating</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                <textarea class="form-control" id="" name="" rows="4" placeholder="Review"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <button class="btn btn-round btn-d" type="submit">Submit Review</button>
                            </div>
                            </div>
                        </form>
                        </div>
                    </div> --}}
                    </div>
                </div>
                </div>
            </div>
        </section>
    </form>
    <hr class="divider-w">
    <section class="module-small">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3">
            <h2 class="module-title font-alt">Sản phẩm cùng thể loại</h2>
          </div>
        </div>

        @foreach ($get_product_lq as $product_lq)
            <div class="row multi-columns-row">
                <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="shop-item">
                    <div class="shop-item-image"><img style="width: 263px; height: 296px;" src="{{asset('/uploads/images/'.$product_lq->product_img.'')}}" alt="{{$product_lq->product_name}}"/>
                        <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Thêm giỏ hàng</span></a></div>
                    </div>
                    <h4 class="shop-item-title font-alt"><a href="/home/product-detail/{{$product_lq->id}}">{{$product_lq->product_name}}</a></h4>{{number_format($product_lq->unit_price,0,'','.')}}đ
                </div>
            </div>
        @endforeach

        </div>
      </div>
    </section>
    <hr class="divider-w">
    @include('homeuser.layout.footer')
  </div>
@endsection
@section('javascript')
    <!-- BK JS -->
    <script src="https://pc.baokim.vn/js/bk_plus_v2.popup.js"></script>
    <!-- END BK JS -->
    <script src="{{asset('/pageuser/js/carousel_with_thumbs.js')}}"></script>
    <script>
        var id = '{{$get_product->product_code}}';
        var meta = {"product": {"id": id}};
    </script>
    <script>
        var html  = $('.product_content').text();
        html.outerHTML;
        $('.content_product').html(html);
    </script>
@endsection
