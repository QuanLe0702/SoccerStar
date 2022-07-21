@extends('user.layout-user')
@section('title', 'size')
@section('content')
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
<style>
    .body {
        background-image: url("{{ asset('frontend/img/huongdan_bg.jpg') }}");
    }

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

<section class="body">
    <section class="content container light-grey" style="padding-top: 70px; padding-bottom: 70px;">
        <div class="w3-content" style="max-width:1400px"><br>
            <div class="w3-row" class="w3-card-4 w3-margin w3-white ">
                <div class="container-fluid ">
                    <div class="row content">
                        <div class="col-sm-12 " style="background-color: whitesmoke">
                            <div class="w3-card-4 w3-margin w3-white">
                                <div class="w3-container text-center">
                                    <p><span class="w3-opacity" style="text-align: left;">
                                            <h2 style=" color:#006600; font-weight: bolder; text-shadow: 1px 0px 1px rgb(10, 2, 32);">
                                                HƯỚNG DẪN CHỌN SIZE GIÀY
                                            </h2>
                                        </span></p>

                                </div>

                                <div class="w3-container" style="font-family: 'Cormorant SC', serif;">
                                    <p style="text-align: left;">
                                    <div>
                                        * Với những bạn đã biết kích thước chân của mình thì bạn chỉ cần kéo xuống dưới để lựa chọn size giày phù hợp với mình. Nhưng với những bạn chưa biết kích thước chân của mình thì hãy chuẩn bị những vật dụng sau để tiếp tục đồng hành cùng chúng tôi nhé.
                                    </div>

                                    <div>
                                        <b>Bước 1.</b> Chuẩn bị những vật dụng sau để đo kích thước chân:</br>
                                        <img src="{{ asset('frontend/img/size_1.jpg') }}">
                                        <ul>
                                            <li>Một tờ giấy (to hơn chân)</li>
                                            <li>Một cây thước</li>
                                            <li>Một cây bút (viết)</li>
                                            <li>Mang tất/đi vớ nào mà bạn định sẽ đi cùng với đôi giày mình cần mua</li>
                                        </ul>
                                    </div>

                                    <div>
                                        <b>Bước 2.</b> Các bước tiến hành đo size chân:</br>
                                        <img src="{{ asset('frontend/img/size_2.jpg') }}"></br>
                                        - Sau khi đi tất, bạn giậm chân thật mạnh lên tờ giấy và giữ thật chắc để chân khỏi dịch chuyển khiến kích thước sau khi đo sẽ bị sai.</br>
                                        - Sau đó dùng bút vẽ theo khung bàn chân của bạn lên tờ giấy.<br>
                                    </div>

                                    <div>
                                        <b>Bước 3.</b> Đo chiều dài cho chân:</br>
                                        <img src="{{ asset('frontend/img/size_3.jpg') }}"></br>
                                        - Đánh dấu 4 điểm bao gồm 2 điểm đầu ngón chân và 2 điểm cuối của gót chân bằng bút. Sau đó dùng thước kẻ để đo lại chiều dài của hai điểm này.<br>
                                    </div>

                                    <div>
                                        <b>Bước 4.</b> Đo chiều rộng cho bàn chân:</br>
                                        <img src="{{ asset('frontend/img/size_4.jpg') }}"></br>
                                        - Ngoài chiều dài, thì bạn cần đo chiều rộng của bàn chân. Bạn chỉ cần dùng thước hay sợi dây đo sau đó chọn vị trí gần đầu mũi chân có bề ngang hoặc mu bàn chân dài nhất (bạn thấy chỗ nào là rộng nhất của chân thì lấy chỗ đó) để tiến hành đo, khi đo bạn nên ở tư thế ngồi hoặc đứng thẳng 2 chân.</br>
                                    </div>
                                    </p>
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