@section('css')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.css" integrity="sha512-8D+M+7Y6jVsEa7RD6Kv/Z7EImSpNpQllgaEIQAtqHcI0H6F4iZknRj0Nx1DCdB+TwBaS+702BGWYC0Ze2hpExQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.css" integrity="sha512-wJgJNTBBkLit7ymC6vvzM1EcSWeM9mmOu+1USHaRBbHkm6W9EgM0HY27+UtUaprntaYQJF75rc8gjxllKs5OIQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@endsection

<!-- Project Section  Narxlar-->
<section class="project-section" id="price">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title">
            <div class="title-inner">
                <div class="title">Bugungi</div>
                <h2>Narxlar</h2>
            </div>
        </div>

        <div class="four-item-carousel owl-carousel owl-theme">

            @foreach ($products as $item)

                <!-- Project Block -->
                <div class="project-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="admin/images/product/{{ $item->image }}" height="370px" width="270px" alt="" class="narx-image" />
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="icons code-runner">
                                    <a class="plus" href="admin/images/product/{{ $item->image }}" data-fancybox="gallery-1" data-caption=""><span class="flaticon-plus-symbol"></span></a>
                                    <a class="link toast" href="/#price"  data-link="{{ $item->name }}"  ><span class="icon flaticon-link"></span></a>
                                </div>
                                <div class="overlay-inner">
                                    <div class="overlay-content">
                                        <h3>
                                            <a href="#price">{{ $item->name }}</a>
                                        </h3>
                                        <div class="category">{{ $item->price }}</div>
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
<!-- End Project Section -->

@section('js')


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <script>

$(".link").click(function(){
    var link=$(this).data('link');

    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val(link).select();

    document.execCommand("copy");
    $temp.remove();

    $.toast('copied to clipboard')

//   var holdtext = $("#clipboard").innerText;
//   Copied = holdtext.createTextRange();
//   Copied.execCommand("Copy");
});

    </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js" integrity="sha512-zlWWyZq71UMApAjih4WkaRpikgY9Bz1oXIW5G0fED4vk14JjGlQ1UmkGM392jEULP8jbNMiwLWdM8Z87Hu88Fw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.js" integrity="sha512-Y+cHVeYzi7pamIOGBwYHrynWWTKImI9G78i53+azDb1uPmU1Dz9/r2BLxGXWgOC7FhwAGsy3/9YpNYaoBy7Kzg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@endsection
