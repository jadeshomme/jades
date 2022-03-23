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
    <section class="module" id="contact">
      <div class="container">
        <div class="row">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.210399533412!2d105.83054415091854!3d21.024265785932144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab9c5062807d%3A0xd6ee5c7caaf50b98!2zMTA3IEEgUC4gVMO0biDEkOG7qWMgVGjhuq9uZywgSMOgbmcgQuG7mXQsIMSQ4buRbmcgxJBhLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1648009217154!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        @include('elements.show_error')
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3">
            <h2 class="module-title font-alt">Đăng ký tư vấn</h2>
            <div class="module-subtitle font-serif"></div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-8">
            <form action="{{ route('homePage.contact.create') }}" method="post">
               @csrf
              <div class="form-group">
                <label class="sr-only" for="name">Họ Và Tên</label>
                <input class="form-control" type="text" id="name" name="name" placeholder="Họ tên *" required="required" data-validation-required-message="Please enter your name."/>
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <label class="sr-only" for="email">Số điện thoại</label>
                <input class="form-control" type="text" id="phone" name="phone" placeholder="Số điện thoại *" required="required" data-validation-required-message="Please enter your email address."/>
                <p class="help-block text-danger"></p>
              </div>
              {{-- <div class="form-group">
                <textarea class="form-control" rows="7" id="message" name="message" placeholder="Thông tin cần tư vấn *" required="required" data-validation-required-message="Please enter your message."></textarea>
                <p class="help-block text-danger"></p>
              </div> --}}
              <div class="text-center">
                <button class="btn btn-block btn-round btn-d" type="submit">Đăng ký tư vấn</button>
              </div>
            </form>
          </div>
          <div class="col-sm-4">
            <div class="alt-features-item mt-0">
              <div class="alt-features-icon"><span class="icon-megaphone"></span></div>
              <h3 class="alt-features-title font-alt">Địa chỉ</h3>Jades Homme<br/>107B<br/>Tôn Đức Thắng - Đống Đa - Hà Nội
            </div>
            <div class="alt-features-item mt-xs-60">
              <div class="alt-features-icon"><span class="icon-map"></span></div>
              <h3 class="alt-features-title font-alt">Thông tin</h3>Email:  jadeshomme86@gmail.com<br/>Phone: 083 993 7777
            </div>
          </div>
        </div>
      </div>
    </section>
    @include('homeuser.layout.footer')
  </div>
@endsection
