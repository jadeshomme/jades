<nav class="navbar navbar-custom navbar-fixed-top navbar-transparent" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="/">Jades Homme</a>
      </div>
      <div class="collapse navbar-collapse" id="custom-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown"><a class="dropdown-toggle" href="/" data-toggle="dropdown">Home</a>
            <ul class="dropdown-menu">
              <li><a href="/home">Trang chủ</a></li>
            </ul>
        </li>
        <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Sản phẩm</a>


        @foreach ($get_category as $category)
            <ul class="dropdown-menu">
                <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">{{$category->category_name}}</a>
                <ul class="dropdown-menu">
                    @foreach ($get_product as $product)
                        @if ($category->id == $product->category_id)
                            <li><a href="/home/product-detail/{{$product->id}}">{{$product->product_name}}</a></li>
                        @endif
                    @endforeach
                </ul>
                </li>
            </ul>
        @endforeach
        </li>
        <!--li.dropdown.navbar-cart-->
        <!--    a.dropdown-toggle(href='#', data-toggle='dropdown')-->
        <!--        span.icon-basket-->
        <!--        |-->
        <!--        span.cart-item-number 2-->
        <!--    ul.dropdown-menu.cart-list(role='menu')-->
        <!--        li-->
        <!--            .navbar-cart-item.clearfix-->
        <!--                .navbar-cart-img-->
        <!--                    a(href='#')-->
        <!--                        img(src='assets/images/shop/product-9.jpg', alt='')-->
        <!--                .navbar-cart-title-->
        <!--                    a(href='#') Short striped sweater-->
        <!--                    |-->
        <!--                    span.cart-amount 2 &times; $119.00-->
        <!--                    br-->
        <!--                    |-->
        <!--                    strong.cart-amount $238.00-->
        <!--        li-->
        <!--            .navbar-cart-item.clearfix-->
        <!--                .navbar-cart-img-->
        <!--                    a(href='#')-->
        <!--                        img(src='assets/images/shop/product-10.jpg', alt='')-->
        <!--                .navbar-cart-title-->
        <!--                    a(href='#') Colored jewel rings-->
        <!--                    |-->
        <!--                    span.cart-amount 2 &times; $119.00-->
        <!--                    br-->
        <!--                    |-->
        <!--                    strong.cart-amount $238.00-->
        <!--        li-->
        <!--            .clearfix-->
        <!--                .cart-sub-totle-->
        <!--                    strong Total: $476.00-->
        <!--        li-->
        <!--            .clearfix-->
        <!--                a.btn.btn-block.btn-round.btn-font-w(type='submit') Checkout-->
        <!--li.dropdown-->
        <!--    a.dropdown-toggle(href='#', data-toggle='dropdown') Search-->
        <!--    ul.dropdown-menu(role='menu')-->
        <!--        li-->
        <!--            .dropdown-search-->
        <!--                form(role='form')-->
        <!--                    input.form-control(type='text', placeholder='Search...')-->
        <!--                    |-->
        <!--                    button.search-btn(type='submit')-->
        <!--                        i.fa.fa-search-->
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Liên hệ</a>
        <ul class="dropdown-menu">
            <li><a href="/home/contact">Liên hệ với chúng tôi</a></li>
        </ul>
        </li>

        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-user"></i>
        </a>
        <ul class="dropdown-menu">
            @if ($userHome)
                <li><a href="/home/profile">Thông tin cá nhân</a></li>
                <li><a href="/home/order/show">Đơn hàng của tôi</a></li>
                <li><a href="/home/logout">Đăng xuất</a></li>
            @else
                <li><a href="/home/account">Đăng nhập hoặc đăng ký</a></li>
            @endif
        </ul>
        </li>

        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-shopping-cart"></i>
        </a>
        <ul class="dropdown-menu">
            <li><a href="/home/show-cart">Xem giỏ hàng</a></li>
        </ul>
        </li>
    </ul>
    </div>
</div>
</nav>
