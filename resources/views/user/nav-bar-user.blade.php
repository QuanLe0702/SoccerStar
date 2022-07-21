<div style="background-color: #181818 ;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="dropdown " style=" font-style: italic; color: #F0F0F0;">
                    SoccerStar - Luôn cam kết hàng chính hãng
                    @if(Session::has('customer_name'))
                    <p style="color: #F0F0F0; margin-bottom:0px;" class="nav-link float-end dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                        </svg>
                        <small>{{Session::get('customer_name')}}</small>
                    <ul class="dropdown-menu" aria-labelledby="dropdown07">
                        <li><a class="dropdown-item" href="{{ route('customer.account') }}">Thông tin tài khoản</a> </li>
                        <li><a class="dropdown-item" href="{{ route('userorder.index') }}">Đơn hàng</a></li>
                        <li><a class="dropdown-item" href="{{ route('customer.logout')}}">Đăng xuất</a></li>
                    </ul>
                    </p>

                    @else
                    <p style="color: #F0F0F0; margin-bottom:0px;" class="nav-link float-end dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                        </svg>
                        Tài khoản
                    </p>
                    <ul class="dropdown-menu" aria-labelledby="dropdown07">
                        <li><a class="dropdown-item" href="{{ route('customer.register') }}">Đăng ký</a></li>
                        <li><a class="dropdown-item" href="{{ route('customer.login') }}">Đăng nhập </a> </li>
                    </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Eighth navbar example">
    <div class="container">
        <a class="navbar-brand" href="{{ Route('customer.home') }}"> <img src="{{ asset('frontend/img/logo9.jpg') }}" width="100px" height="70px" alt="SOCCERSTAR"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExample07">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" style=" font-size: large; font-weight: bold;">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ Route('customer.home') }}">Trang chủ</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown07" data-bs-toggle="dropdown" aria-current="page">Sản Phẩm</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown07">
                        <li><a class="dropdown-item" href="{{ Route('user.product') }}">Tất cả sản phẩm</a></li>
                        <li><a class="dropdown-item" href="{{ Route('user.giay_co_tu_nhien')}}">Giày cỏ tự nhiên</a></li>
                        <li><a class="dropdown-item" href="{{ Route('user.giay_co_nhan_tao')}}">Giày cỏ nhân tạo</a></li>
                        <li><a class="dropdown-item" href="{{ Route('user.giay_futsal')}}">Giày futsal</a></li>
                        <li><a class="dropdown-item" href="{{ Route('user.phu_kien')}}">Phụ kiện</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown07" data-bs-toggle="dropdown" aria-expanded="false">Hướng dẫn</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown07">
                        <li><a class="dropdown-item" href="{{ route('user.size') }}">Hướng dẫn chọn size</a></li>
                        <li><a class="dropdown-item" href="{{ route('user.insurance') }}">Chính sách bảo hành</a></li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.news') }}">Tin tức</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ Route('customer.contact') }}" tabindex="-1" aria-disabled="true">Liên hệ</a>
                </li>
            </ul>
            <form>
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>
                    </span>
                    <input type="text" class="form-control" placeholder="Tìm kiếm...">
                </div>
            </form>
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16" style="color: white; margin-left: 30px;">
                    <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                </svg></a>
            @if(Session::has('customer_id'))
            <a href="{{ route('customer.account') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16" style="color: white;margin-left: 10px;">
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                </svg></a>
            @else
            <a href="{{ Route('customer.login') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16" style="color: white;margin-left: 10px;">
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                </svg></a>
            @endif
        </div>
    </div>
</nav>