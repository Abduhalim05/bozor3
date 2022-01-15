<!--Sidebar Side-->
<div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
    <aside class="sidebar">
        <div class="sidebar-inner">

            <!-- Search -->
            <div class="sidebar-widget search-box">
                <form method="get" action="{{ route('search') }}">
                    <div class="form-group">
                        <input type="search" name="key" value="" placeholder="Qidiruv..." required>
                        <button type="submit"><span class="icon fa fa-search"></span></button>
                    </div>
                </form>
            </div>

            <!-- Categories Widget -->
            <div class="sidebar-widget categories-widget">
                <div class="sidebar-title-two">
                    <h2>Bugungi narxlar</h2>
                </div>
                <div class="widget-content">
                    <ul class="blog-cat-two">
                        @foreach ($products as $item)
                            <li><a href="#"> {{ $item->name }} <span>{{ $item->price }}</span></a></li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <!-- Posts Widget -->
            <div class="sidebar-widget post-widget">
                <div class="sidebar-title-two">
                    <h2>Yangi e'lonlar</h2>
                </div>
                <div class="widget-news-carousel owl-carousel owl-theme">

                    @foreach ($announ as $an)
                        <!-- Widget Post -->
                        <div class="widget-post">
                            <div class="post-inner">
                                <div class="image">
                                    <img src="/admin/images/announ/{{ $an->image }}" alt="" />
                                </div>
                                <div class="lower-content">
                                    <ul class="post-info">
                                        <li>{{ $an->created_at->format('d.m.Y') }}</li>

                                    </ul>
                                    <h3><a href="#">{{ $an->title }}</a></h3>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

        </div>
    </aside>
</div>
