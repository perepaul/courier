<!DOCTYPE html>
<html>
    
<!-- Mirrored from event-theme.com/themes/GO-Courier/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 Apr 2020 12:51:42 GMT -->
<head>
        <title>Oversea Link Delivery</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="{{asset('css/front/app.css')}}">

        <!--[if lt IE 9]>
        <script src="assets/plugins/iesupport/html5shiv.js"></script>
        <script src="assets/plugins/iesupport/respond.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css" integrity="sha512-O03ntXoVqaGUTAeAmvQ2YSzkCvclZEcPQu1eqloPaHfJ5RuNGiS4l+3duaidD801P50J28EHyonCV06CUlTSag==" crossorigin="anonymous" />
    </head>
    <body id="home">
        <!-- Preloader -->
        <div id="preloader">

            <div class="small1">
                <div class="small ball smallball1"></div>
                <div class="small ball smallball2"></div>
                <div class="small ball smallball3"></div>
                <div class="small ball smallball4"></div>
            </div>


            <div class="small2">
                <div class="small ball smallball5"></div>
                <div class="small ball smallball6"></div>
                <div class="small ball smallball7"></div>
                <div class="small ball smallball8"></div>
            </div>

            <div class="bigcon">
                <div class="big ball"></div>
            </div>

        </div>	
        <!-- /.Preloader -->	


        <!-- Main Wrapper -->        
        <main class="wrapper">

    <!-- Header -->
    <header class="header-main header-style2">

        <!-- Header Topbar -->
        <!-- <div class="top-bar font2-title1 white-clr">
                    <div class="theme-container container">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <ul class="list-items fs-10">
                                    <li class="active"><a href="#">Privacy</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-sm-12 fs-12">
                                <p class="text-center">  <i class="fa fa-phone"></i> <span class="d-lg-block d-none">Call us now:</span> <span class="theme-clr"> {{config('app.phone')}} </span> </p>
                            </div>
                        </div>
                    </div>
                    <a data-toggle="modal" href="#login-popup" class="sign-in fs-12 theme-clr-bg"> sign in </a>
                </div> -->
        <!-- /.Header Topbar -->

        <!-- Header Logo & Navigation -->
        <nav class="menu-bar font2-title1 white-clr">
            <div class="theme-container container">
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-logo" href="{{url('/')}}">
                            <h5 class=" pt-5 pb-10 effect animated fadeInLeft logo-text">FES<small class="fs-12">ervice</small></h5>

                            <!-- <img src="{{asset('uploads/front/logo/logo-2.png')}}" alt="logo" />  -->
                        </a>
                    </div>
                    <div class="col-md-9 col-sm-9 fs-12">
                        <div id="navbar" class="collapse navbar-collapse no-pad">
                            <ul class="navbar-nav theme-menu">
                                <li class="active">
                                    <a href="#home">Home </a>
                                </li>
                                <li> <a href="#about-us">about</a> </li>
                                <li><a href="#testimonials">Testimonials</a></li>
                                <li><a href="#contact-us">contact </a> </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- /.Header Logo & Navigation -->

    </header>
    <!-- /.Header -->

    <!-- Content Wrapper -->
    @yield('content')
    <!-- /.Content Wrapper -->

    <!-- Footer -->
    <footer>
        <!-- <div class="footer-main pad-120 white-clr">
            <div class="theme-container container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 footer-widget offset-md-3">
                        <a href="#"> <img class="logo" alt="#" src="{{asset('uploads/front/logo/logo-white.png')}}" /> </a>
                    </div>
                    <div class="col-md-3 col-sm-6 footer-widget">
                        <h2 class="title-1 fw-900">quick links</h2>
                        <ul>
                            <li> <a href="#">sitemap</a> </li>
                            <li> <a href="#">pricing</a> </li>
                            <li> <a href="#">payment method</a> </li>
                            <li> <a href="#">support</a> </li>
                        </ul>
                    </div>

                    <div class="col-md-3 col-sm-6 footer-widget">
                        <h2 class="title-1 fw-900">important links</h2>
                        <ul>
                            <li> <a href="#">themeforest</a> </li>
                            <li> <a href="#">envato</a> </li>
                            <li> <a href="#">audiojungle</a> </li>
                            <li> <a href="#">videohibe</a> </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 footer-widget">
                        <h2 class="title-1 fw-900">get in touch</h2>
                        <ul class="social-icons list-inline">
                            <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".20s"> <a href="#" class="fa fa-facebook"></a> </li>
                            <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".25s"> <a href="#" class="fa fa-twitter"></a> </li>
                            <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".30s"> <a href="#" class="fa fa-google-plus"></a> </li>
                            <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".35s"> <a href="#" class="fa fa-linkedin"></a> </li>
                        </ul>
                        <ul class="payment-icons list-inline">
                            <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".25s"> <a href="#"> <img alt="#" src="{{asset('uploads/front/icons/payment-2.png')}}" /> </a> </li>
                            <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".30s"> <a href="#"> <img alt="#" src="{{asset('uploads/front/icons/payment-3.png')}}" /> </a> </li>
                            <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".35s"> <a href="#"> <img alt="#" src="{{asset('uploads/front/icons/payment-4.png')}}" /> </a> </li>
                            <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".20s"> <a href="#"> <img alt="#" src="{{asset('uploads/front/icons/payment-1.png')}}" /> </a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="footer-bottom">
            <div class="theme-container container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <p> First Express Service Inc., © {{date('Y')}}, All rights reserved </p>
                    </div>
                   
                </div>
            </div>
        </div>
    </footer>
    <!-- /.Footer -->


</main>
        <!-- / Main Wrapper -->

        <!-- Top -->
        <div class="to-top theme-clr-bg transition"> <i class="fa fa-angle-up"></i> </div>

        <script src="{{asset('js/front/app.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js" integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA==" crossorigin="anonymous"></script>

            @if($errors->any())
            dd($errors->all());
                @foreach($errors->all() as $error)
                    <script>
                        iziToast.error({
                            title: 'Error',
                            message: '{{$error}}',
                        });
                    </script>
                @endforeach
            @endif

            @if(session()->has('message'))
            <script>
                iziToast.success({
                    title: 'OK',
                    message: '{{session()->get("message")}}',
                });
            </script>
            @endif

    </body>

</html>
