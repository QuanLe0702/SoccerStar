@extends('user.layout-user')
@section('title', 'insurance')
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
                                                CHÍNH SÁCH BẢO HÀNH
                                            </h2>
                                        </span></p>

                                </div>

                                <div class="w3-container">
                                    <p style="text-align: left;">
                                    <ol>
                                        <li>
                                            <h4>Mục đích</h4>
                                            - Đảm bảo quyền lợi và lợi ích của khách hàng trong việc sử dụng các sản phẩm của SoccerStar.</br>
                                            - Đảm bảo hàng hóa của Công ty không bị suy giảm giá trị khi phát sinh sự cố phải thực hiện bảo hành.</br>
                                            - Bảo hành sản phẩm: Khắc phục những lỗi hỏng hóc, sự cố kỹ thuật xảy ra do lỗi của nhà sản xuất.</br>

                                        </li>

                                        <li>
                                            <h4>Cách thức bảo hành</h4>
                                            - Chat với shop để thông báo giày bị hỏng, gửi số điện thoại đặt hàng để shop kiểm tra đơn hàng.</br>
                                            - Sau khi xác nhận lỗi được bảo hành bạn có thể tiến hành gửi giày về shop để bảo hành.</br>
                                            - Sau khi bảo hành xong shop sẽ gửi giày lại cho bạn.</br>
                                        </li>

                                        <li>
                                            <h4>Địa chỉ gửi giày bảo hành về shop</h4>
                                            - Shop SoccerStar</br>
                                            - Địa chỉ: 590 Cách Mạng Tháng Tám, Phường 11, Quận 3, Thành phố Hồ Chí Minh 723564</br>
                                            - Điện thoại: 0123456789 </br>
                                        </li>

                                        <li>
                                            <h4>Nội dung</h4>
                                            * Quý khách được bảo hành miễn phí các sản phẩm do SoccerStar cung cấp nếu đáp ứng đầy đủ các điều kiện bảo hành như sau: </br>
                                            - Thời hạn bảo hành là trong 1 năm kể từ ngày mua sản phẩm </br>
                                            - Chi tiết nội dung bảo hành: Quý khách sẽ được đổi ngay 1 sản phẩm có giá trị tương đương nếu là lỗi của bên sản xuất.</br>
                                            * SoccerStar cam kết trả sản phẩm, thiết bị bảo hành cho Quý khách trong thời gian ngắn nhất (Tối đa là 30 ngày)</br>
                                        </li>

                                        <li>
                                            <h4>Những trường hợp không được bảo hành</h4>
                                            - Giày đã hết hạn bảo hành.</br>
                                            - Giày bị hư hỏng do lỗi trong quá trình sử dụng như: trầy xước, nóng chảy, thú vật cắn, do bị vật nhọn, sắc cắt, đâm thủng.</br>
                                            - Giày bị rách, hỏng do sử dụng nhiều trong các điều kiện không đảm bảo như: ngập nước, hơ lửa.</br>
                                            - Hư hỏng do sử dụng không đúng cách (Ví dụ: Lỗi gãy đinh khi sử dụng giày đinh cao trên mặt sân cỏ nhân tạo cùn, chất lượng kém)</br>
                                        </li>
                                    </ol>
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