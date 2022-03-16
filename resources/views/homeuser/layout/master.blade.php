<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title>jadeshomme</title>

    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('/pageuser/images/favicons/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('/pageuser/images/favicons/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('/pageuser/images/favicons/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('/pageuser/images/favicons/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('/pageuser/images/favicons/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('/pageuser/images/favicons/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('/pageuser/images/favicons/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('/pageuser/images/favicons/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('/pageuser/images/favicons/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('/pageuser/images/favicons/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('/pageuser/images/favicons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('/pageuser/images/favicons/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/pageuser/images/favicons/favicon-16x16.png')}}">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{asset('/pageuser/images/favicons/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">
    <!--
    Stylesheets
    =============================================

    -->
    <!-- Default stylesheets-->
    <link href="{{asset('/pageuser/lib/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Template specific stylesheets-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="{{asset('/pageuser/lib/animate.css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('/pageuser/lib/components-font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('/pageuser/lib/et-line-font/et-line-font.css')}}" rel="stylesheet">
    <link href="{{asset('/pageuser/lib/flexslider/flexslider.css')}}" rel="stylesheet">
    <link href="{{asset('/pageuser/lib/owl.carousel/dist/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('/pageuser/lib/owl.carousel/dist/assets/owl.theme.default.min.css')}}" rel="stylesheet">
    <link href="{{asset('/pageuser/lib/magnific-popup/dist/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('/pageuser/lib/simple-text-rotator/simpletextrotator.css')}}" rel="stylesheet">
    <!-- Main stylesheet and color file-->
    <link href="{{asset('/pageuser/css/style.css')}}" rel="stylesheet">
    <link id="color-scheme" href="{{asset('/pageuser/css/colors/default.css')}}" rel="stylesheet">

	<!-- SPECIFIC CSS -->
    @yield('link')

    <!-- YOUR CUSTOM CSS -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">


    <style>
        header.version_1 .main_header {
            background-color: #ffffff;
        }
        header.version_1 .main-menu > ul > li > a {
            color: #000000;
        }
        header.version_1 .main_header a.phone_top {
            color: #000000;
        }
    </style>
</head>

<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    @include('elements.loading')
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v13.0&appId=626607088332555&autoLogAppEvents=1" nonce="0TVi6bkr"></script>
    <main>
        <div class="page-loader">
          <div class="loader">Loading...</div>
        </div>

        @include('homeuser.layout.header')

        @yield('home')

        <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    </main>

    <script src="{{asset('/pageuser/lib/jquery/dist/jquery.js')}}"></script>
    <script src="{{asset('/pageuser/lib/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/pageuser/lib/wow/dist/wow.js')}}"></script>
    <script src="{{asset('/pageuser/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js')}}"></script>
    <script src="{{asset('/pageuser/lib/isotope/dist/isotope.pkgd.js')}}"></script>
    <script src="{{asset('/pageuser/lib/imagesloaded/imagesloaded.pkgd.js')}}"></script>
    <script src="{{asset('/pageuser/lib/flexslider/jquery.flexslider.js')}}"></script>
    <script src="{{asset('/pageuser/lib/owl.carousel/dist/owl.carousel.min.js')}}"></script>
    <script src="{{asset('/pageuser/lib/smoothscroll.js')}}"></script>
    <script src="{{asset('/pageuser/lib/magnific-popup/dist/jquery.magnific-popup.js')}}"></script>
    <script src="{{asset('/pageuser/lib/simple-text-rotator/jquery.simple-text-rotator.min.js')}}"></script>
    <script src="{{asset('/pageuser/js/plugins.js')}}"></script>
    <script src="{{asset('/pageuser/js/main.js')}}"></script>

	<!-- SPECIFIC SCRIPTS -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    @include('elements.toastr')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    @yield('javascript')

    <script>
        $(document).on("click",".deleteCart",function() {
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
    <script lang="javascript">var __vnp = {code : 6752,key:'', secret : 'c5ff0fd2b489c23b849a58544d02e246'};(function() {var ga = document.createElement('script');ga.type = 'text/javascript';ga.async=true; ga.defer=true;ga.src = '//core.vchat.vn/code/tracking.js';var s = document.getElementsByTagName('script');s[0].parentNode.insertBefore(ga, s[0]);})();</script>
</body>
</html>
