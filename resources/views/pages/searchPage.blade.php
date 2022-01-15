@extends('layouts.simplePage')

    @section('header')

        <!--Page Title-->
        <section class="page-title" style="background-image:url(images/bozor2.jpg)">
            <div class="auto-container">
                <h2>Qidiruv ma'lumotlari</h2>
                <ul class="page-breadcrumb">
                    <li><a href="/">Bosh sahifa</a></li>
                    <li>Qidiruv sahifasi</li>
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
                    @if (count($posts)==0)

                        <div>
                            <h2> <big><b>{{ $key }} </b> bo</big>'yicha qidiruv natijalari topilmadi! </h2><br>
                            <a href="/" class="btn btn-primary"> Orqaga qaytish </a>
                        </div>

                    @else

                    <div>
                        <h2>{{ $key }} bo'yicha qidiruv natijalari: </h2><br>
                    </div>

                    @endif
                @foreach ($posts as $item )
                    <!-- News Block Two -->
                    <div class="news-block-two">
                        <div class="inner-box">
                            <div class="image">
                                <div class="single-item-carousel owl-carousel owl-theme">
                                    <div class="slide">
                                        <div class="read-more"><img src="/admin/images/product/{{ $item->image }}" alt="" /></div>
                                    </div>

                                </div>
                            </div>
                            <div class="lower-content">

                                <ul class="post-info">
                                    <li><span class="icon fa fa-user"></span> Admin</li>
                                    <li><span class="icon fa fa-calendar"></span> {{ $item->created_at->format('d.m.Y') }}</li>
                                </ul>

                                <h3><div>{{ $item->name }}</div></h3>
                                <div class="text">{{ $item->description }}</div>

                            </div>
                        </div>
                    </div>
                @endforeach

                    <!--Post Share Options-->
                    <div class="styled-pagination text-center">
                        {{-- <ul class="clearfix">
                            <li class="active"><a href="#"><span class="fa fa-angle-left"></span> </a></li>
                            <li><a href="#">1</a></li>
                            <li ><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><span class="fa fa-angle-right"></span> </a></li>

                        </ul> --}}
                        {!! $posts->links() !!}
                    </div>

                </div>
            </div>
        </div>

     @endsection


