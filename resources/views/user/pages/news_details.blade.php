@extends('user.layout-user')
@section('title', 'news_details')
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

<section class="content container light-grey" style="padding-top: 70px; padding-bottom: 70px;">
    <div class="w3-content" style="max-width:1400px"><br>
        <div class="w3-row" class="w3-card-4 w3-margin w3-white ">
            <div class="container-fluid">
                <div class="row content">
                    <div class="col-sm-12 " style="background-color: whitesmoke">
                        <div class="w3-card-4 w3-margin w3-white">
                            <div class="w3-container  text-center">
                                <h1 style="text-align: center; color:#006600; font-weight: bolder; text-shadow: 1px 0px 1px rgb(10, 2, 32);">
                                    <b>{{$p->news_title}}</b>
                                </h1>
                                <h2 style="text-align: center;">{!!$p->news_desc!!}</h2>

                            </div>

                            <div class="w3-container">
                                <p style="text-align: left;">{!!$p->news_content!!}</p>
                                <div class="w3-row">


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