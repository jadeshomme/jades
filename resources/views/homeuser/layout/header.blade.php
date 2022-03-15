<nav class="navbar navbar-custom navbar-fixed-top navbar-transparent" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="index.html">Jades Homme</a>
      </div>
      <div class="collapse navbar-collapse" id="custom-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Home</a>
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
        {{-- <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Pages</a>
        <ul class="dropdown-menu">
            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">About</a>
            <ul class="dropdown-menu">
                <li><a href="about1.html">About 1</a></li>
                <li><a href="about2.html">About 2</a></li>
                <li><a href="about3.html">About 3</a></li>
                <li><a href="about4.html">About 4</a></li>
                <li><a href="about5.html">About 5</a></li>
            </ul>
            </li>
            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Services</a>
            <ul class="dropdown-menu">
                <li><a href="service1.html">Service 1</a></li>
                <li><a href="service2.html">Service 2</a></li>
                <li><a href="service3.html">Service 3</a></li>
            </ul>
            </li>
            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Pricing</a>
            <ul class="dropdown-menu">
                <li><a href="pricing1.html">Pricing 1</a></li>
                <li><a href="pricing2.html">Pricing 2</a></li>
            </ul>
            </li>
            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Gallery</a>
            <ul class="dropdown-menu">
                <li><a href="gallery_col_2.html">2 Columns</a></li>
                <li><a href="gallery_col_3.html">3 Columns</a></li>
                <li><a href="gallery_col_4.html">4 Columns</a></li>
                <li><a href="gallery_col_6.html">6 Columns</a></li>
            </ul>
            </li>
            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Contact</a>
            <ul class="dropdown-menu">
                <li><a href="contact1.html">Contact 1</a></li>
                <li><a href="contact2.html">Contact 2</a></li>
                <li><a href="contact3.html">Contact 3</a></li>
            </ul>
            </li>
            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Restaurant menu</a>
            <ul class="dropdown-menu">
                <li><a href="restaurant_menu1.html">Menu 2 Columns</a></li>
                <li><a href="restaurant_menu2.html">Menu 3 Columns</a></li>
            </ul>
            </li>
            <li><a href="login_register.html">Login / Register</a></li>
            <li><a href="faq.html">FAQ</a></li>
            <li><a href="404.html">Page 404</a></li>
        </ul>
        </li> --}}

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
        <li class="dropdown"><a class="dropdown-toggle" href="documentation.html" data-toggle="dropdown">Documentation</a>
        <ul class="dropdown-menu">
            <li><a href="documentation.html#contact">Contact Form</a></li>
            <li><a href="documentation.html#reservation">Reservation Form</a></li>
            <li><a href="documentation.html#mailchimp">Mailchimp</a></li>
            <li><a href="documentation.html#gmap">Google Map</a></li>
            <li><a href="documentation.html#plugin">Plugins</a></li>
            <li><a href="documentation.html#changelog">Changelog</a></li>
        </ul>
        </li>
    </ul>
    </div>
</div>
</nav>
