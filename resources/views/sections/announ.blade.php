<!-- Testimonial Section E'lonlar -->
<section class="testimonial-section" id="announ">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title">
            <div class="title-inner">
                <div class="title">Bizning</div>
                <h2>E'lonlar</h2>
            </div>
        </div>


        <div class="three-item-carousel owl-carousel owl-theme">

            @foreach ($announ as $item)

             <!-- Services Block Five -->
             <div class="services-block-five">
                <div class="inner-box">
                    <div class="image">
                        <a href="{{ route('announ', $item->id) }}"><img src="admin/images/announ/{{ $item->image }}" alt="" class="elon-image" /></a>
                        <div class="overlay-box">
                            <a href="{{ route('announ', $item->id) }}" class="link-icon flaticon-link"></a>
                        </div>
                    </div>
                    <div class="lower-content">
                        <div class="upper-box">
                            <h3><a href="{{ route('announ', $item->id) }}">{{ $item->title }}</a></h3>
                            <div class="text">{{ $item->description }}</div>
                        </div>
                        <div class="lower-box">
                            <div class="clearfix">
                                <div class="pull-left">
                                    <a href="{{ route('announ', $item->id) }}" class="read-more">Barchasi...</a>
                                </div>
                                <div class="pull-right">
                                    <a href="{{ route('announ', $item->id) }}" class="arrow-icon"><span class="fa fa-arrow-circle-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach


        </div>

    </div>
</section>
<!-- End Testimonial Section -->
