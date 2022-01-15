<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8">
    <title>Buliten Factory & Industry HTML-5 Template | Blog Classic</title>
    <!-- Stylesheets -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/slick.css" rel="stylesheet">
    <link href="/css/responsive.css" rel="stylesheet">
    <!--Color Switcher Mockup-->
    <link href="/css/color-switcher-design.css" rel="stylesheet">
    <!--Color Themes-->
    <link id="theme-color-file" href="/css/color-themes/default-theme.css" rel="stylesheet">

    <link rel="shortcut icon" href="/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="/images/favicon.png" type="image/x-icon">
    <link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">


    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>

        <!-- Main Header / Header Style Two-->
        <header class="main-header header-style-two">

            <!--Header Top-->
            <div class="header-top-two">
                <div class="auto-container">
                    <div class="clearfix">
                        <!--Top Left-->
                        <div class="top-left">
                            <!--Social Box-->
                            <ul class="social-box">
                                <li><a href="{{ $info->facebook }}"><span class="fab fa-facebook-f"></span></a></li>
                                <li><a href="{{ $info->instagram }}"><span class="fab fa-instagram"></span></a></li>
                                <li><a href="{{ $info->youtube }}"><span class="fab fa-youtube"></span></a></li>
                                <li><a href="{{ $info->telegram }}"><span class="fab fa-telegram-plane"></span></a></li>

                            </ul>
                        </div>
                        <!--Top Right-->
                        <div class="top-right">
                            <div class="timing">{{ $about->time }}</div>

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
                                <a href="/"><img src="/images/logo1.png" alt="" class="logonavigation" title=""></a>
                            </div>
                        </div>

                        <div class="pull-right upper-right">
                            <div class="info-outer clearfix">

                                <!--Info Box-->
                                <div class="upper-column info-box">
                                    <div class="icon-box"><span class="flaticon-clock-1"></span></div>
                                    <ul>
                                        <li><span>Ishlash vaqtimiz:</span> <br> {{ $about->time }}</li>
                                    </ul>
                                </div>

                                <!--Info Box-->
                                <div class="upper-column info-box">
                                    <div class="icon-box"><span class="flaticon-contact-1"></span></div>
                                    <ul>
                                        <li><span>Bizga bog'laning:</span> <br> {{ $info->phone }}</li>
                                    </ul>
                                </div>

                                <!--Info Box-->
                                <div class="upper-column info-box">
                                    <div class="icon-box"><span class="flaticon-email-1"></span></div>
                                    <ul>
                                        <li><span>Email:</span> <br> {{ $info->email }} </li>
                                    </ul>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>
            </div>
            <!--End Header Upper-->
            <!--Header Lower-->
            <div class="header-lower">

                <div class="auto-container clearfix">
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
                                    <li><a href="/#">Bosh sahifa</a> </li>
                                    <li><a href="/#about">Biz haqimizda</a></li>
                                    <li><a href="/#rasta">Rastalar</a></li>
                                    <li><a href="/#price">Narxlar</a></li>
                                    <li class="{{ request()->path()!=('opendatas') ? 'current' : ''  }}"><a href="/#announ">E'lonlar</a></li>
                                    <li class="{{ request()->path()==('opendatas') ? 'current' : ''  }}"><a href="{{ route('opendata') }}">Ochiq ma'lumotlar</a></li>
                                    <li><a href="/#contact">Biz bilan Bog'laning</a></li>
                                </ul>
                            </div>
                        </nav>

                        <!-- Main Menu End-->
                        <div class="outer-box clearfix">

                            <!--Option Box-->
                            <div class="option-box">


                                <!--Search Box-->
                                <div class="search-box-outer">
                                    <div class="dropdown">
                                        <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                                        <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                            <li class="panel-outer">
                                                <div class="form-container">
                                                    <form method="get" action="{{ route('search') }}">
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
                                <div class="btn-box">
                                    <a href="/#contact" class="theme-btn btn-style-five">Bog'lanish</a>
                                </div>
                            </div>
                        </div>
                        <div class="side-curve"></div>
                    </div>
                </div>
            </div>
            <!--End Header Lower-->

            <!--Sticky Header-->
            <div class="sticky-header">
                <div class="auto-container clearfix">
                    <!--Logo-->
                    <div class="logo pull-left">
                        <a href="/" class="img-responsive"><img src="/images/logo1.png" class="logonavigation" alt="" title=""></a>
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
                                    <li><a href="/#">Bosh sahifa</a> </li>
                                    <li><a href="/#about">Biz haqimizda</a></li>
                                    <li><a href="/#rasta">Rastalar</a></li>
                                    <li><a href="/#price">Narxlar</a></li>
                                    <li class="{{ request()->path()!=('opendatas') ? 'current' : ''  }}"><a href="/#announ">E'lonlar</a></li>
                                    <li class="{{ request()->path()==('opendatas') ? 'current' : ''  }}"><a href="{{ route('opendata') }}">Ochiq ma'lumotlar</a></li>
                                    <li><a href="/#contact">Biz bilan bog'laning</a></li>
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

        @yield('header')

            <!-- Sidebar Page Container -->
            <div class="sidebar-page-container">
                <div class="auto-container">
                    <div class="row clearfix">

                       @yield('content')

                        @include('layouts.sidebar')

                    </div>
                </div>
            </div>
            <!-- End Sidebar Page Container -->

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
                <span class="palate default-color active" data-theme-file="/css/color-themes/default-theme.css"></span>
                <span class="palate green-color" data-theme-file="/css/color-themes/green-theme.css"></span>
                <span class="palate blue-color" data-theme-file="/css/color-themes/blue-theme.css"></span>
                <span class="palate orange-color" data-theme-file="/css/color-themes/orange-theme.css"></span>
                <span class="palate purple-color" data-theme-file="/css/color-themes/purple-theme.css"></span>
                <span class="palate teal-color" data-theme-file="/css/color-themes/teal-theme.css"></span>
                <span class="palate brown-color" data-theme-file="/css/color-themes/brown-theme.css"></span>
                <span class="palate redd-color" data-theme-file="/css/color-themes/redd-color.css"></span>
                <span class="palate olive-color" data-theme-file="/css/color-themes/olive-theme.css"></span>
                <span class="palate lightblue-color" data-theme-file="/css/color-themes/lightblue-color.css"></span>
                <span class="palate pink-color" data-theme-file="/css/color-themes/pink-theme.css"></span>
                <span class="palate hotpink-color" data-theme-file="/css/color-themes/hotpink-color.css"></span>
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

    <script src="/js/jquery.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/js/jquery.fancybox.js"></script>
    <script src="/js/appear.js"></script>
    <script src="/js/owl.js"></script>
    <script src="/js/wow.js"></script>
    <script src="/js/mixitup.js"></script>
    <script src="/js/jquery-ui.js"></script>
    <script src="/js/script.js"></script>
    <script src="/js/color-settings.js"></script>

</body>

</html>

