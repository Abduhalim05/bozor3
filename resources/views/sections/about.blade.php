<!-- Welcome Section About -->
<section class="welcome-section" id="about">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Image Column -->
            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <!-- <div class="inner-column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms"> -->
                <div class="image">
                    <img src="admin/images/about/{{ $about->image }}" alt="" class="nextimagesize" />
                </div>
                <!-- </div> -->
            </div>

            <!-- Content Column -->
            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <!-- Sec Title -->
                    <div class="sec-title">
                        <div class="title-inner">
                            <div class="title">Bizning bozorimizga</div>
                            {{-- <h2> {{ $about->title }} </h2> --}}
                            <h2>Xush kelibsiz!</h2>
                        </div>
                    </div>
                    <div class="text">{{ $about->description }}</div>
                    <!-- <a href="about.html" class="theme-btn btn-style-three">About More</a> -->

                    <!-- Counter Box -->
                    <div class="counter-box">

                        <div class="fact-counter">
                            <div class="row clearfix">

                                <!--Column-->
                                <div class="column counter-column col-lg-4 col-md-4 col-sm-12">
                                    <div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                                        <div class="count-outer count-box">
                                            <h4 class="counter-title">Xaridorlarimiz</h4>
                                            <span class="count-text" data-speed="3000" data-stop="{{ $about->client }}">0</span>+
                                        </div>
                                    </div>
                                </div>

                                <!--Column-->
                                <div class="column counter-column col-lg-4 col-md-4 col-sm-12">
                                    <div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                                        <div class="count-outer count-box">
                                            <h4 class="counter-title">Do'konlarimiz</h4>
                                            <span class="count-text" data-speed="2500" data-stop="{{ $about->shop }}">0</span>+
                                        </div>
                                    </div>
                                </div>

                                <!--Column-->
                                <div class="column counter-column col-lg-4 col-md-4 col-sm-12">
                                    <div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
                                        <div class="count-outer count-box">
                                            <h4 class="counter-title">Bozor rastalari</h4>
                                            <span class="count-text" data-speed="2000" data-stop="{{ $about->rasta }}">0</span>+
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Welcome Section -->
