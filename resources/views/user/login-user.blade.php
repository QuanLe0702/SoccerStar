@extends('user.layout-user')
<!-- thay bang tieu de -->
@section('title', 'Đăng nhập')
@section('content')
<section class="vh" style="background-color: #F5F5F5;">
    <div class="container py-5 h-20 ">
        <div class="rounded d-flex justify-content-center">
            <div class="col col-lg-4 col-md-7 col-sm-7  ">
                <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0">
                        <div class="d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">

                                <form action="{{ Route('customer.postlogin') }}" method="post">

                                    <div class="d-flex align-items-center mb-3 pb-1">
                                        <img src="{{ asset('frontend/img/logo9.jpg') }}" style="width: 70px; height: 70px;" alt="SoccerStar">

                                        <span class="h3 fw-bold mb-0" style="color: #ff6219;">ĐĂNG NHẬP</span>
                                    </div>
                                    @if(Session::has('thongbao'))
                                    <p style="color: red;" >{{Session::get('thongbao')}}</p>
                                    @endif
                                    <!-- @if($errors->any())
                                    <div style="background-color: red; color: #F5F5F5;">
                                        <ul>
                                            @foreach($errors->all() as $error)
                                            <li>{{$error}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif -->
                                    {{ csrf_field() }}
                                    <small>@if($errors->has('customer_email'))
                                        <strong class="text-danger">{{ $errors->first('customer_email') }}</strong>
                                        @endif</small>
                                    <div class="input-group input-group-sm mb-3 col-sm-3">
                                        <span class="input-group-text bg-primary"><i class="bi bi-envelope text-white"></i></span>
                                        <input type="email" name="customer_email" class="form-control" placeholder="Email*">
                                    </div>
                                    <small> @if($errors->has('customer_password'))
                                        <strong class="text-danger">{{ $errors->first('customer_password') }}</strong>
                                        @endif</small>
                                    <div class="input-group input-group-sm mb-3 col-sm-3">
                                        <span class="input-group-text bg-primary"><i class="bi bi-key-fill text-white"></i></span>
                                        <input type="password" name="customer_password" class="form-control" placeholder="Mật khẩu*">
                                    </div>
                                    <div class="d-grid col-5 mx-auto">
                                        <button class="btn btn-primary" type="submit"><span></span>Đăng nhập</button>
                                    </div>
                                </form>
                                <p class="mb-5 pb-lg-2" style="padding-top: 15px;">Không có tài khoản? <a href="{{ Route('customer.register') }}">Đăng ký ngay</a></p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection