@extends('user.layout-user')
@section('title', 'news')
@section('content')
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
<style>
    * {
        margin: 0;
        padding: 0;
        font-size: 20px;
        line-height: 2rem;
        font-family: 'Montserrat', sans-serif;
    }
    .body {
        background-image: url("{{ asset('frontend/img/news_bg.jpg') }}");
    }

    .header {
        background-image: url("{{ asset('frontend/img/news.jpg') }}");
        /* background picture */
        background-size: cover;
        background-repeat: no-repeat;
        height: 100vh;
        background-position: center;
        display: block;
        background-blend-mode: lighten;
        position: relative;
        margin-bottom: 2px;
    }

    /*(----------Scroll To Top button-------)*/
    #scrolltotop {
        position: fixed;
        right: 10px;
        bottom: 10px;
        height: 50px;
        width: 50px;
        border-radius: 50%;
        background: #e62739;
        box-shadow: 0 0 10px rgb(0, 0, 0, 0.25);
        color: whitesmoke;
        border: none;
        outline: none;
        cursor: pointer;
        display: none;
    }

    #scrolltotop:active {
        background: #cc2333;
    }

    /*(----------Scroll To Top button end-------)*/
</style>
<section class="body">
    <!-- Section Intro -->
    <section class="header d-flex flex-column justify-content-center align-content-center">
        <section id="" class="m-2">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-10 col-lg-7 py-3 py-lg-2 mt-md-5 mt-lg-0 rounded text-center " style="background-color: rgb(228, 216, 180, 0.5) ;">
                        <h1>
                            <div class="h2 fw-bold" style="color:#FFEA00;">
                                Danh mục tin tức
                            </div>
                            <div class="h4" style="color: whitesmoke; font-style: italic;">
                                Có rất nhiều tin tức thú vị về bóng đá
                            </div>
                        </h1>
                        <a href="#news" class="btn btn-lg mb-2 rounded-right" style="background-color:#ff474c; color: whitesmoke;">
                            Đọc ngay
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!-- Section Intro End -->
    <section class="content container light-grey" style="padding-top: 70px; padding-bottom: 70px;">
        <div class="w3-content" style="max-width:1400px"><br>
            <div class="w3-row" class="w3-card-4 w3-margin w3-white ">
                <div class="container-fluid">
                    <div class="row content">
                        <div class="col-sm-2 ">

                        </div>
                        <div class="col-sm-10">
                            <div class="w3-card-4 w3-margin w3-white">
                                <div>
                                    @foreach($news as $p)
                                    <div class="col-lg-6 col-md-6" id="news">

                                        <div>
                                            <a href="{{  route('user.news_details',$p->news_id) }}"><img src="{{ url('images/'.$p->news_image) }}" style="width:100%" class="mx-auto d-block" alt=""></a>
                                        </div>
                                        <div style="background-color: #6F55E4; text-align: center; color: whitesmoke;">
                                            <p style="font-size: 20px;">{{ $p->news_title }}</p>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 ">
                </div>
            </div>
            <!-- END GRID -->
        </div><br>

        <!-- END w3-content -->
        </div>
    </section>
</section>

<!--Scroll to top button-->
<button id="scrolltotop" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="left" title="Go to the top">
    <i class="bi bi-arrow-up"></i>
</button>

</section>


<script>
    /*Button scroll to top */
    let btnscrolltotop = document.querySelector("#scrolltotop");
    btnscrolltotop.addEventListener("click", function() {
        window.scrollTo({
            top: 0,
            left: 0,
            behavior: "smooth"
        });
    });
    let mybutton = document.getElementById("scrolltotop");
    // Khi người dùng cuộn xuống 20px từ đầu tài liệu sẽ hiển thị nút
    window.onscroll = function() {
        scrollFunction();
    };

    function scrollFunction() {
        if (
            document.body.scrollTop > 20 ||
            document.documentElement.scrollTop > 20
        ) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }
    // Khi người dùng nhấp vào nút, cuộn lên đầu tài liệu
    mybutton.addEventListener("click", backToTop);

    function backToTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
    /*Button scroll to top end*/
</script>

@endsection