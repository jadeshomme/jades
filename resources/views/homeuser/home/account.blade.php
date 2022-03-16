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
        <section class="module bg-dark-30" data-background="assets/images/section-4.jpg">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h1 class="module-title font-alt mb-0">Đăng nhập - Đăng ký</h1>
              </div>
            </div>
          </div>
        </section>
        <section class="module">
          <div class="container">
            <div class="row">
              <div class="col-sm-5 col-sm-offset-1 mb-sm-40">
                <h4 class="font-alt">Đăng nhập</h4>
                <hr class="divider-w mb-10">
                <form class="form">
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email_login" placeholder="Email*"/>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" name="password" id="password_login" placeholder="Mật khẩu*"/>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-round btn-b login" type="button" value="Đăng nhập">Đăng nhập</button>
                  </div>
                  {{-- <div class="form-group"><a href="">Forgot Password?</a></div> --}}
                </form>
              </div>
              <div class="col-sm-5">
                <h4 class="font-alt">Đăng ký</h4>
                <hr class="divider-w mb-10">
                <form class="form">
                  <div class="form-group">
                    <input class="form-control" id="E-mail" type="text" name="email" placeholder="Email"/>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="username" type="text" name="username" placeholder="Username"/>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="password" type="password" name="password" placeholder="Password"/>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="re-password" type="password" name="re-password" placeholder="Re-enter Password"/>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-block btn-round btn-b">Register</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>
        @include('homeuser.layout.footer')
    </div>
@endsection

@section('javascript')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<script>
    $(document).on("click",".province .option",function() {
        Loading.show();
        var province_id = $(this).attr('data-value');

        axios({
            method: 'post',
            url: '/home/district',
            data: {
                province_id:province_id,
            }
        }).then(function (response) {
            $(".district ul").html('');
            $(".district ul").append(response.data);
        }).catch(function(error) {
            Toastr.error(error.response.data);
        }).finally(function() {
            Loading.hide();
        });
    });
</script>


<script>
    $(document).on("click",".district .option",function() {
        Loading.show();
        var district_id = $(this).attr('data-value');

        axios({
            method: 'post',
            url: '/home/ward',
            data: {
                district_id:district_id,
            }
        }).then(function (response) {
            $(".ward ul").html('');
            $(".ward ul").append(response.data);
        }).catch(function(error) {
            Toastr.error(error.response.data);
        }).finally(function() {
            Loading.hide();
        });
    });
</script>

<script>
    $(document).on("click",".register",function() {
        Loading.show();
        var email     = $('#email_2').val();
        var password  = $('#password_in_2').val();
        var full_name = $('.full_name').val();
        var address   = $('.address').val();
        var phone     = $('.phone').val();
        var province  = $('.province ul .selected').attr('data-value');
        var district  = $('.district ul .selected').attr('data-value');
        var ward      = $('.ward ul .selected').attr('data-value');

        axios({
            method: 'post',
            url: '/home/register',
            data: {
                email:email,
                password:password,
                full_name:full_name,
                address:address,
                phone:phone,
                province:province,
                district:district,
                ward:ward
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
    $(document).on("click",".login",function() {
        Loading.show();
        var email     = $('#email_login').val();
        var password  = $('#password_login').val();
        axios({
            method: 'post',
            url: '/home/login',
            data: {
                email:email,
                password:password
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
