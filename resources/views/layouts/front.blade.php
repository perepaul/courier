<!DOCTYPE html>
<html>

<!-- Mirrored from event-theme.com/themes/GO-Courier/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 Apr 2020 12:51:42 GMT -->

<head>
    <title>{{config('app.name')}}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/front/app.css') }}">

    <!--[if lt IE 9]>
        <script src="assets/plugins/iesupport/html5shiv.js"></script>
        <script src="assets/plugins/iesupport/respond.js"></script>
        <![endif]-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css" integrity="sha512-O03ntXoVqaGUTAeAmvQ2YSzkCvclZEcPQu1eqloPaHfJ5RuNGiS4l+3duaidD801P50J28EHyonCV06CUlTSag==" crossorigin="anonymous" />

    <style>
        .nav-wrapper {
            background-color: transparent;
            color: white;
        }

        .Navbar {
            display: flex;
            padding: 20px 0;
            /* font-family: sans-serif; */
            background-color: transparent;
        }

        .Navbar__Link {
            padding-right: 38px;
            align-self: flex-start;
        }

        .Navbar__Link a {
            color: white;
            cursor: pointer;
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            font-size: 14px;
        }

        .Navbar__Link:not(.Navbar__Link-brand) a:hover,
        .Navbar__Link a.active {
            color: #f5ab35;
            text-decoration: underline;
        }

        .Navbar__Items {
            display: flex;
        }

        .Navbar__Items--right {
            margin-left: auto;
        }

        .Navbar__Link-toggle {
            display: none;
        }

        .Navbar__Link-brand a {
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-weight: 800;
            font-size: 30px;
            line-height: 32px;
            color: #f5ab35;
        }

        @media only screen and (max-width: 768px) {

            .Navbar__Items,
            .Navbar {
                flex-direction: column;
                display: flex;
            }

            .Navbar__Items {
                display: none;
            }

            .Navbar__Items--right {
                margin-left: 0;
            }

            .Navbar__ToggleShow {
                display: flex;
            }


            .Navbar__Link-toggle {
                align-self: flex-end;
                display: initial;
                position: absolute;
                cursor: pointer;
                align-content: center;
            }

            .nav-wrapper {
                background-color: #0C0D0D;
                opacity: 4;
            }
        }
    </style>
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
            <div class="top-bar font2-title1 white-clr">
                <div class="container theme-container">
                    <div style="display: flex; justify-content: space-between; align-items:center">
                        <div class="">
                            <i class="fa fa-phone"></i> <span class="theme-clr"> {{ config('app.phone') }} </span>
                        </div>
                        <div id="g_translate" style="display: inline"></div>
                    </div>
                </div>
                {{-- <a data-toggle="modal" href="#login-popup" class="sign-in fs-12 theme-clr-bg"> sign in </a> --}}
            </div>
            <!-- /.Header Topbar -->

            <!-- Header Logo & Navigation -->
            {{-- <nav class="menu-bar font2-title1 white-clr">
                    <div class="container theme-container">
                        <div class="row">
                            <div class="col-md-3 col-sm-3">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-logo" href="{{ url('/') }}">
            <div class="pt-5 pb-10 effect animated fadeInLeft logo-text">Redline <small class="fs-18"></small></div>
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
            </nav> --}}

            <div class="nav-wrapper">
                <div class="container">
                    <div class="Navbar">
                        <div class="Navbar__Link Navbar__Link-brand">
                            <a>{{config('app.name')}}</a>
                        </div>
                        <div class="Navbar__Link Navbar__Link-toggle">
                            <i class="fa fa-bars"></i>
                        </div>
                        <nav class="Navbar__Items Navbar__Items--right">
                            <div class="Navbar__Link">
                                <a href="{{url('/')}}#home">Home</a>
                            </div>
                            <div class="Navbar__Link">
                                <a href="{{url('/')}}#about-us">About</a>
                            </div>
                            <div class="Navbar__Link">
                                <a href="{{url('/')}}#testimonials">Testimonials</a>
                            </div>
                            <div class="Navbar__Link">
                                <a href="{{url('/')}}#contact-us">Contact</a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- /.Header Logo & Navigation -->

        </header>
        <!-- /.Header -->

        <!-- Content Wrapper -->
        @yield('content')
        <!-- /.Content Wrapper -->

        <!-- Footer -->
        <footer>
            <!-- <div class="footer-main pad-120 white-clr">
            <div class="container theme-container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 footer-widget offset-md-3">
                        <a href="#"> <img class="logo" alt="#" src="{{ asset('uploads/front/logo/logo-white.png') }}" /> </a>
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
                            <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".25s"> <a href="#"> <img alt="#" src="{{ asset('uploads/front/icons/payment-2.png') }}" /> </a> </li>
                            <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".30s"> <a href="#"> <img alt="#" src="{{ asset('uploads/front/icons/payment-3.png') }}" /> </a> </li>
                            <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".35s"> <a href="#"> <img alt="#" src="{{ asset('uploads/front/icons/payment-4.png') }}" /> </a> </li>
                            <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".20s"> <a href="#"> <img alt="#" src="{{ asset('uploads/front/icons/payment-1.png') }}" /> </a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> -->

            <div class="footer-bottom">
                <div class="container theme-container">
                    <div class="d-flex justify-content-between">
                        <div class="">
                            <p> {{config('app.name')}}, © {{ date('Y') }}, All rights reserved </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /.Footer -->


    </main>
    <!-- / Main Wrapper -->

    <!-- Top -->
    <div class="transition to-top theme-clr-bg"> <i class="fa fa-angle-up"></i> </div>

    <script src="{{ asset('js/front/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js" integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA==" crossorigin="anonymous"></script>

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                    pageLanguage: 'en'
                },
                'g_translate'
            );
            // let nodeList = $('#g_translate div div').html();
            // console.log(nodeList)
            $('#g_translate div').contents().filter((_, el) => el.nodeType === 3).remove();
            $('#g_translate div div').siblings().remove();
            // $('#g_translate div').html(nodeList);
        }


        document.querySelector('.Navbar__Link-toggle')
            .addEventListener('click', () => {
                const navs = document.querySelectorAll('.Navbar__Items')
                navs.forEach(nav => nav.classList.toggle('Navbar__ToggleShow'));
            });
    </script>
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    @if ($errors->any())
    {{-- dd($errors->all()); --}}
    @foreach ($errors->all() as $error)
    <script>
        iziToast.error({
            title: 'Error',
            message: '{{ $error }}',
        });
    </script>
    @endforeach
    @endif

    @if (session()->has('message'))
    <script>
        iziToast.success({
            title: 'OK',
            message: "{{ session()->get('message') }}",
        });
    </script>
    @endif


    {!! config('app.chat') !!}

</body>

</html>