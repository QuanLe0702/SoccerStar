<button id="scrolltotop" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="left" title="Go to the top">
    <i class="bi bi-arrow-up"></i>
</button>

<script>
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
</script>

<!-- Footer -->
<footer class="text-center text-lg-start bg-dark text-white">
    <!-- Section: Links  -->
    <section class="d-flex justify-content-center justify-content-lg-around pt-1">
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!--Grid column-->
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase fw-bold mb-4" style="color: #ff474c;">GIỚI THIỆU</h5>

                    <p> Chào mừng bạn đến với ngôi nhà SoccerStar! <br>
                        Đây là trang chuyên bán về các loại giày đá banh và phụ kiện bóng đá. Phục vụ giao hàng toàn
                        quốc, đáp ứng mọi nhu cầu của khách hàng và đang không ngừng phát triển lớn mạnh!
                    </p>
                </div>
                <div class="col col-md-3 text-center col-lg-2 col-xl-3 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4" style="color: #ff474c;">
                        MENU
                    </h6>
                    <p>
                        <a href="{{ Route('customer.home') }}" class="text-reset">Trang chủ</a>
                    </p>
                    <p>
                        <a href="{{ Route('user.product') }}" class="text-reset">Sản phẩm</a>
                    </p>
                    <p>
                        <a href="{{ route('user.size') }}" class="text-reset">Hướng dẫn</a>
                    </p>
                    <p>
                        <a href="{{ Route('customer.contact') }}" class="text-reset">Liên hệ</a>
                    </p>
                    <p>
                        <a href="{{ route('user.news') }}" class="text-reset">Tin tức</a>
                    </p>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4" style="color: #ff474c;">
                        LIÊN HỆ
                    </h6>
                    <p>
                        <i class="fas fa-home me-3"></i>
                        590 Cách Mạng Tháng Tám, Phường 11, Quận 3, Thành phố Hồ Chí
                        Minh 723564
                    </p>
                    <p>
                        <i class="fas fa-envelope me-3"></i>
                        soccerstar@email.com
                    </p>
                    <p><i class="fas fa-phone me-3"></i> 1800-1950</p>
                    <p><i class="fas fa-print me-3"></i> 1800-1180</p>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        <!-- Left -->
        <div class="me-5 d-flex d-lg-block">
            <span style="color: #ff474c;">Kết nối với chúng tôi trên các mạng xã hội:</span>
        </div>
        <!-- Left -->

        <!-- Right -->
        <div>
            <a class="btn btn-outline-light btn-floating m-1 " href="https://www.google.com.vn/?hl=vi" role="button"><i class="fab fa-google"></i></a>
            <!-- Google -->
            <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/100035544995231/" role="button"><i class="fab fa-facebook-f"></i></a>

            <!-- Instagram -->
            <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/" role="button"><i class="fab fa-instagram"></i></a>
            <!-- Github -->
            <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/QuanLe0702" role="button"><i class="fab fa-github"></i></a>
        </div>
        <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        Copyright &copy;
        <script>
            document.write(new Date().getFullYear());
        </script> BẢN QUYỀN THUỘC SOCCERSTAR
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->