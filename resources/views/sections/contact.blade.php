<!-- Default Section contact-->
<section class="default-section" id="contact">
    <div class="outer-container">
        <div class="clearfix">

            <!-- News Column -->
            <div class="news-column">
                <div class="our-column-last">

                    <!-- Form Column -->


                    <!-- Info Column -->
                    <div class="info-column col-lg-4 col-md-12 col-sm-12">
                        <div class="inner-column">

                            <!-- Sec Title -->
                            <div class="sec-title">
                                <div class="title-inner">
                                    <div class="title">Biz bilan bog'laning</div>
                                    <h2>Aloqa ma'lumotlari</h2>
                                </div>
                            </div>

                            <div class="content-boxed">
                                <div class="text">Har qanday so'rov uchun quyidagi tafsilotlar bilan biz bilan bog'laning.</div>
                                <ul>
                                    <li><span class="icon fa fa-phone"></span>{{ $contact_item->phone }}</li>
                                    <li><span class="icon fa fa-envelope"></span>{{ $contact_item->email }}</li>
                                    <li><span class="icon fa fa-map-marker-alt"></span>{{ $contact_item->address }}</li>
                                    <li><span class="icon fa fa-clock-o"></span> {{ $about->time }} </li>
                                </ul>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>

        <!-- Form Column -->
        <div class="form-column" style="background-image:url(images/bozor-6.jpg)">
            <div class="inner-column">
                <!-- Sec Title -->
                <div class="sec-title light">
                    <div class="title-inner">
                        <div class="title">ma'lumotlar Tafsilotlari</div>
                        <h2>Narx so'rash</h2>
                    </div>
                </div>

                <!-- Quote Form -->
                <div class="quote-form">

                    <!--Contact Form-->
                    <form method="post" action="{{ route('contact') }}">
                        @csrf
                        <div class="row clearfix">

                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <input type="text" name="name" placeholder="Ismingiz" required>
                            </div>

                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <input type="email" name="email" placeholder="Email" required>
                            </div>

                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <input type="text" name="phone" placeholder="Raqamingiz" required>
                            </div>

                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <textarea name="message" maxlength="300" placeholder="Xabar qoldiring"></textarea>
                            </div>

                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <button class="theme-btn btn-style-two" type="submit" name="submit-form">Jo'natish</button>
                            </div>

                        </div>
                    </form>
                </div>

            </div>
        </div>

    </div>
    </div>
</section>
<!-- End Default Section -->
