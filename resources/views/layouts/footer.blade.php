 <!--Main Footer-->
 <footer class="main-footer" style="background-image:url(/images/bozor-6.jpg)" id="test">

    <div class="auto-container">

        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row clearfix">

                <!--Footer Column-->
                <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                    <div class="footer-widget logo-widget">
                        <div class="logo">
                            <a href="#"><img src="/images/footer-logo.png" alt="" /></a>
                        </div>
                        <div class="text"> </div>
                        <ul class="list-style-one">
                            <li><span class="icon flaticon-map-1"></span> Bizning manzilimiz: <br> {{ $info->address }} </li>
                            <li><span class="icon flaticon-mail"></span>Bizning rasmiy raqamlarimiz: <br> {{ $info->phone }} </li>
                        </ul>
                    </div>
                </div>

                <!--Footer Column-->
                <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                    <div class="footer-widget links-widget">
                        <h2>Bizning bo'limlarimiz</h2>
                        <div class="row clearfix">
                            <div class="column col-lg-6 col-md-6 col-sm-12">
                                @if (request()->path()=='/')

                                <ul class="list">
                                    <li><a href="#about">Biz haqimizda</a></li>
                                    <li><a href="#rasta">Rastalar</a></li>
                                    <li><a href="#price">Narxlar</a></li>
                                    <li><a href="#announ">E'lonlar</a></li>
                                    <li><a href="{{ route('opendata') }}">Ochiq ma'lumotlar</a></li>
                                </ul>

                                @else

                                    <ul class="list">
                                        <li><a href="/#about">Biz haqimizda</a></li>
                                        <li><a href="/#rasta">Rastalar</a></li>
                                        <li><a href="/#price">Narxlar</a></li>
                                        <li><a href="/#announ">E'lonlar</a></li>
                                        <li><a href="{{ route('opendata') }}">Ochiq ma'lumotlar</a></li>
                                    </ul>

                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <!--Footer Column-->
                <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                    <div class="footer-widget news-widget">
                        <h2>E'lonlar</h2>
                        <div class="single-item-carousel owl-carousel owl-theme">
                            <div class="slide">
                            @foreach ($announ as $i )

                                    <!--News Widget Block-->
                                    <div class="news-widget-block">
                                        <div class="widget-inner">
                                            <div class="image">
                                                <img src="/admin/images/announ/{{ $i->image }}" alt="" />
                                            </div>
                                            <div class="post-date">{{ $i->created_at->format('d.m.Y') }}</div>
                                            @if (request()->path()=='/')
                                                <h3><a href="#announ">{{ $i->title }} </a></h3>
                                            @else
                                                <h3><a href="/#announ">{{ $i->title }} </a></h3>
                                            @endif

                                        </div>
                                    </div>
                                    @if($loop->iteration%2==0)
                                </div>
                                <div class="slide">
                                @endif
                                @endforeach

                                </div>

                            {{-- <div class="slide">
                                <!--News Widget Block-->
                                <div class="news-widget-block">
                                    <div class="widget-inner">
                                        <div class="image">
                                            <img src="/images/pr3/detals1.jpg" alt="" />
                                        </div>
                                        <div class="post-date">October 05, 2018</div>
                                        <h3><a href="#announ">Lorem ipsum dolor sit amet </a></h3>
                                    </div>
                                </div>

                                <!--News Widget Block-->
                                <div class="news-widget-block">
                                    <div class="widget-inner">
                                        <div class="image">
                                            <img src="/images/pr3/detals3.jpg" alt="" />
                                        </div>
                                        <div class="post-date">August 14, 2018</div>
                                        <h3><a href="#announ">Lorem ipsum dolor sit amet </a></h3>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Social Column -->
                <div class="social-column col-lg-6 col-md-12 col-sm-12">
                    <ul class="footer-nav">
                        <li><a href="{{ $info->facebook }}"><span class="fab fa-facebook-f"></span></a></li>
                        <li><a href="{{ $info->instagram }}"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="{{ $info->youtube }}"><span class="fab fa-youtube"></span></a></li>
                        <li><a href="{{ $info->telegram }}"><span class="fab fa-telegram-plane"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->
