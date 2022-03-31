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
    <div class="main">
        <section class="module bg-dark-60 blog-page-header" data-background="assets/images/blog_bg.jpg">
            <div class="container">
              <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                  <h2 class="module-title font-alt">Tin tức thời trang</h2>
                  <div class="module-subtitle font-serif">Những tin tức mới nhất về Jades Homme sẽ được cập nhập 24/7. Quý khách hàng có thể theo dõi bản tin dưới đây.</div>
                </div>
              </div>
            </div>
          </section>
          <section class="module">
            <div class="container">
              <div class="row">
                <div class="col-sm-4 col-md-3 sidebar">
                  {{-- <div class="widget">
                    <form role="form">
                      <div class="search-box">
                        <input class="form-control" type="text" placeholder="Search..."/>
                        <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
                      </div>
                    </form>
                  </div> --}}

                  <div class="widget">
                    <h5 class="widget-title font-alt">Bài viết liên quan</h5>
                    <ul class="widget-posts">
                        @foreach ($news as $new)
                            <li class="clearfix">
                                <div class="widget-posts-image"><a href="/home/news/post/{{$new->slug}}"><img src="{{asset('/uploads/images/'.$new->img.'')}}" alt="{{$new->name}}"/></a></div>
                                <div class="widget-posts-body"></div>
                                <div class="widget-posts-title"><a href="/home/news/post/{{$new->slug}}">{{$new->name}}</a></div>
                                <div class="widget-posts-meta">{{$new->updated_at}}</div>
                                </div>
                            </li>
                        @endforeach

                    </ul>
                  </div>
                  {{-- <div class="widget">
                    <h5 class="widget-title font-alt">Tag</h5>
                    <div class="tags font-serif"><a href="#" rel="tag">Blog</a><a href="#" rel="tag">Photo</a><a href="#" rel="tag">Video</a><a href="#" rel="tag">Image</a><a href="#" rel="tag">Minimal</a><a href="#" rel="tag">Post</a><a href="#" rel="tag">Theme</a><a href="#" rel="tag">Ideas</a><a href="#" rel="tag">Tags</a><a href="#" rel="tag">Bootstrap</a><a href="#" rel="tag">Popular</a><a href="#" rel="tag">English</a>
                    </div>
                  </div>
                  <div class="widget">
                    <h5 class="widget-title font-alt">Text</h5>The languages only differ in their grammar, their pronunciation and their most common words. Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators.
                  </div>
                  <div class="widget">
                    <h5 class="widget-title font-alt">Recent Comments</h5>
                    <ul class="icon-list">
                      <li>Maria on <a href="#">Designer Desk Essentials</a></li>
                      <li>John on <a href="#">Realistic Business Card Mockup</a></li>
                      <li>Andy on <a href="#">Eco bag Mockup</a></li>
                      <li>Jack on <a href="#">Bottle Mockup</a></li>
                      <li>Mark on <a href="#">Our trip to the Alps</a></li>
                    </ul>
                  </div> --}}
                </div>
                <div class="col-sm-8 col-sm-offset-1 content_news">
                    <p class="news_content">{{$new_detail->content}}</p>
                </div>
              </div>
            </div>
          </section>
        @include('homeuser.layout.footer')
    </div>
@endsection

@section('javascript')
    <script>
        var html  = $('.news_content').text();
        html.outerHTML;
        $('.content_news').html(html);
    </script>
@endsection
