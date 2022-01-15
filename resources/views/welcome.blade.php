<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Buliten Factory & Industry HTML-5 Template | Homepage</title>
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/slick.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--Color Switcher Mockup-->
    <link href="css/color-switcher-design.css" rel="stylesheet">
    <!--Color Themes-->
    <link id="theme-color-file" href="css/color-themes/default-theme.css" rel="stylesheet">

    <link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">


    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
     @yield('css')

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body class="hidden-bar-wrapper">

    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>

        <!-- Main Header-->
        <header class="main-header">

            <!--Header Top-->
            <div class="header-top">
                <div class="auto-container">
                    <div class="clearfix">
                        <!--Top Left-->
                        <div class="top-left">
                            <ul>
                                <li><span style="font-size:20px" class="icon fas fa-map-marker-alt"></span>    {{ $contact_item->address }}</li>
                            </ul>
                        </div>
                        <!--Top Right-->
                        <div class="top-right">

                            <!--Social Box-->
                            <ul class="social-box">
                                <li><a href="{{ $contact_item->facebook }}"><span class="fab fa-facebook-f"></span></a></li>
                                <li><a href="{{ $contact_item->youtube }}"><span class="fab fa-youtube"></span></a></li>
                                <li><a href="{{ $contact_item->instagram }}"><span class="fab fa-instagram"></span></a></li>
                                <li><a href="{{ $contact_item->telegram }}"><span class="fab fa-telegram-plane"></span></a></li>

                            </ul>

                        </div>
                    </div>
                </div>
            </div>

            <!--Header-Upper-->
            <div class="header-upper">
                <div class="auto-container">
                    <div class="clearfix">

                        <div class="pull-left logo-box">
                            <div class="logo">
                                <a href="#" style="font-size: 25px;">
                                    <!-- <img src="images/logo1.png" class="logonavigation" alt="" title=""> -->
                                    Qurilish bozor
                                </a>
                            </div>
                        </div>

                        <div class="pull-right upper-right">


                            <!--Header Lower-->
                            <div class="header-lower">

                                <div class="nav-outer clearfix">
                                    <!-- Main Menu -->
                                    <nav class="main-menu navbar-expand-md">
                                        <div class="navbar-header">
                                            <!-- Toggle Button -->
                                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
                                        </div>

                                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                            <ul class="navigation clearfix">
                                                <li class="current "><a href="#">Bosh sahifa</a> </li>
                                                <li><a class="menu-link" href="#about">Biz haqimizda</a></li>
                                                <li><a class="menu-link" href="#rasta">Rastalar</a></li>
                                                <li><a class="menu-link" href="#price">Narxlar</a></li>
                                                <li><a class="menu-link" href="#announ">E'lonlar</a></li>
                                                <li><a class="menu-link" href="{{ route('opendata') }}">Ochiq ma'lumotlar</a></li>
                                                <li><a class="menu-link" href="#contact">Bog'lanish</a></li>
                                            </ul>
                                        </div>
                                    </nav>

                                    <!-- Main Menu End-->
                                    <div class="outer-box clearfix">

                                        <!--Option Box-->
                                        <div class="option-box">
                                            <!--Cart Box-->


                                            <!--Search Box-->
                                            <div class="search-box-outer">
                                                <div class="dropdown">
                                                    <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                                                    <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                                        <li class="panel-outer">
                                                            <div class="form-container">
                                                                <form method="get" action="{{ route('search') }}">
                                                                    @csrf
                                                                    <div class="form-group">
                                                                        <input type="search" name="key" value="" placeholder="Search Here" required>
                                                                        <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="side-curve"></div>
                                </div>

                            </div>
                            <!--End Header Lower-->

                        </div>

                    </div>

                </div>
            </div>
            <!--End Header Upper-->

            <!--Sticky Header 2-menu -->
            <div class="sticky-header">
                <div class="auto-container clearfix">
                    <!--Logo-->
                    <div class="logo pull-left">
                        <a href="#" class="img-responsive"><img src="images/logo1.png" class="logonavigation" alt="" title=""></a>
                    </div>

                    <!--Right Col-->
                    <div class="right-col pull-right">
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                            <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
                                <ul class="navigation clearfix">
                                    <li class="current"><a href="#">Bosh sahifa</a> </li>
                                    <li><a class="menu-link" href="#about">Biz haqimizda</a></li>
                                    <li><a class="menu-link" href="#rasta">Rastalar</a></li>
                                    <li><a class="menu-link" href="#price">Narxlar</a></li>
                                    <li><a class="menu-link" href="#announ">E'lonlar</a></li>
                                    <li><a class="menu-link" href="{{ route('opendata') }}">Ochiq ma'lumotlar</a></li>
                                    <li><a class="menu-link" href="#contact">Biz bilan bog'laning</a></li>
                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->
                    </div>

                </div>
            </div>
            <!--End Sticky Header-->

        </header>
        <!--End Main Header -->

        <!--Main Slider-->
        <section class="main-slider">

            <div class="main-slider-carousel owl-carousel owl-theme">

                @foreach ($sliders as $item)

                <div class="slide" style="background-image:url(images/background/fon.jpg) ; backdrop-filter: blur(5px); z-index: 1;">
                    <div class="auto-container">
                        <div class="content clearfix">
                            {{-- <div class="title">Zamonaviy</div> --}}
                            <h2>{{ $item->title }}</h2>
                            <div class="text"> {{ $item->description }}</div>
                            <div class="link-box">
                                <a href="#price" class="theme-btn btn-style-one">Bizning Narxlar</a> <a href="#contact" class="theme-btn btn-style-three">Biz bilan bog'laning</a>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach

            </div>
            <!-- Left Title -->
            <div class="left-title">manufacturers</div>

            <div class="auto-container">
                <!-- Social Box -->
                <div class="social-box">
                    <a href="#"><span class="fa fab-facebook"></span></a>
                    <a href="#"><span class="fa fab-instagram"></span></a>
                    <a href="#"><span class="fa fab-youtube"></span></a>
                    <a href="#"><span class="fa fab-youtube"></span></a>
                </div>
            </div>
            <!--Scroll Dwwn Btn-->
            <div class="mouse-btn-down scroll-to-target" data-target=".welcome-section"></div>
        </section>
        <!--End Main Slider-->

        @include('sections.about')

       @include('sections.rasta')

        @include('sections.price')

        <!--Call To Action Section Two Design-->
        <section class="call-to-action-section-two" style="background-image:url(images/background/1.jpg)">
            <div class="auto-container">
                <div class="clearfix">

                    <div class="pull-left">
                        <h2>Bizning bozor mahsulotlarining sifatliligi va hamyonbobligi bilan ajralib turadi </h2>
                    </div>
                    <div class="pull-right">
                        <a href="#contact" class="theme-btn btn-style-three">Biz bilan bog'laning</a>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Call To Action Section Two -->



        @include('sections.announ')

        @include('sections.contact')

    <!--Sponsors Section-->
    <section class="sponsors-section">
        <div class="auto-container">

            <div class="sponsors-outer">
                <!--Sponsors Carousel-->
                <!-- <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/5.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure></li>
                </ul> -->
            </div>

        </div>
    </section>
    <!--End Sponsors Section-->

    @include('layouts.footer')

    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

    <!-- Color Palate / Color Switcher -->

    <div class="color-palate">
        <div class="color-trigger">
            <i class="fa fa-paint-brush"></i>
        </div>
        <div class="color-palate-head">
            <h6>Choose Your Color</h6>
        </div>
        <div class="various-color clearfix">
            <div class="colors-list">
                <span class="palate default-color active" data-theme-file="css/color-themes/default-theme.css"></span>
                <span class="palate green-color" data-theme-file="css/color-themes/green-theme.css"></span>
                <span class="palate blue-color" data-theme-file="css/color-themes/blue-theme.css"></span>
                <span class="palate orange-color" data-theme-file="css/color-themes/orange-theme.css"></span>
                <span class="palate purple-color" data-theme-file="css/color-themes/purple-theme.css"></span>
                <span class="palate teal-color" data-theme-file="css/color-themes/teal-theme.css"></span>
                <span class="palate brown-color" data-theme-file="css/color-themes/brown-theme.css"></span>
                <span class="palate redd-color" data-theme-file="css/color-themes/redd-color.css"></span>
                <span class="palate olive-color" data-theme-file="css/color-themes/olive-theme.css"></span>
                <span class="palate lightblue-color" data-theme-file="css/color-themes/lightblue-color.css"></span>
                <span class="palate pink-color" data-theme-file="css/color-themes/pink-theme.css"></span>
                <span class="palate hotpink-color" data-theme-file="css/color-themes/hotpink-color.css"></span>
            </div>
        </div>

        <ul class="box-version option-box">
            <li class="box">Boxed</li>
            <li>Full width</li>
        </ul>
        <ul class="rtl-version option-box">
            <li class="rtl">RTL Version</li>
            <li>LTR Version</li>
        </ul>



    </div>

    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/script.js"></script>
    <script src="js/color-settings.js"></script>

    @yield('js')
    <script>
        $('.menu-link').click(function(){
            $(this).parent().addClass('current');
            $(this).parent().siblings().removeClass('current');
        })

        $(window).scroll(function() {
            if($(window).scrollTop()==844) {
                //alert("bottom!");
                console.log($(window).height());
                $('#about').addClass('current');
                // getData();
            }
            // console.log($(window).scrollTop());
        });
    </script>

</body>

</html>
