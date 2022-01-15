@extends('layouts.simplePage')

    @section('header')

         <!--Page Title-->
         <section class="page-title" style="background-image:url(/images/bozor2.jpg)">
            <div class="auto-container">
                <h2>E'lonlar</h2>
                <ul class="page-breadcrumb">
                    <li><a href="/">Bosh sahifa</a></li>
                    <li>E'lonlar</li>
                </ul>
            </div>
         </section>
        <!--End Page Title-->
        </header>


    @endsection

        @section('content')

            <!--Content Side-->
            <div class="content-side col-lg-8 col-md-12 col-sm-12">
                <div class="blog-classic">
                    <div class="inner-box">

                        <!-- News Block Two -->
                        <div class="news-block-two">
                            <div class="inner-box">
                                <div class="image">
                                    <div class="single-item-carousel owl-carousel owl-theme">
                                        <div class="slide">
                                            <div class="read-more" ><img src="/admin/images/announ/{{ $item->image }}" alt="" /></div>
                                        </div>

                                    </div>
                                </div>
                                <div class="lower-content">
                                    <ul class="post-info">
                                        <li><span class="icon fa fa-user"></span> Admin</li>
                                        <li><span class="icon fa fa-calendar"></span> {{ $item->created_at->format('d.m.Y') }}</li>

                                    </ul>
                                    <h3><a href="#">{{ $item->title }}</a></h3>
                                    <div class="text">{{ $item->body }}</div>

                                </div>
                            </div>
                        </div>


                        <!--Post Share Options-->
                        {{-- <div class="styled-pagination text-center">
                            <ul class="clearfix">
                                <li><a href="#"><span class="fa fa-angle-left"></span> </a></li>
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#"><span class="fa fa-angle-right"></span> </a></li>
                            </ul>
                        </div> --}}

                    </div>
                </div>
            </div>

        @endsection





