 <!-- Services Section Rastalar-->
 <section class="services-section" id="rasta">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title">
            <div class="title-inner">
                <div class="title">Bozorimizning</div>
                <h2>Rastalari</h2>
            </div>
        </div>

        <div class="row clearfix">

            @foreach ($rasta as $item)
                 <!-- Services Block -->
            <div class="services-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image">
                        <a href="#rasta"><img src="admin/images/rasta/{{ $item->image }}" alt="" class="rasta-image" /></a>
                    </div>
                    <div class="lower-content">
                        <div class="upper-layer"></div>
                        <div class="lower-layer"></div>
                        <h3><a href="#rasta">{{ $item->title }}</a></h3>
                        <div class="text">{{ $item->description }}</div>
                    </div>
                </div>
            </div>
            @endforeach



        </div>



    </div>
</section>
<!-- End Services Section -->
