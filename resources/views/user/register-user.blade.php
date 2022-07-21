@extends('user.layout-user')
<!-- thay bang tieu de -->
@section('title', 'Đăng nhập')
@section('content')
<section class="vh" style="background-color: #F5F5F5;">
    <div class="container py-5 h-20">
        <div class="rounded d-flex justify-content-center">
            <div class="col-lg-5 col-md-8 col-sm-10 shadow-lg p-5 bg-light">
                <div class="text-center">
                    <h3 class="h3 fw-bold mb-0" style="color: #ff6219;">Đăng ký tài khoản</h3>
                </div>
                @if(Session::has('thongbao'))
                <p style="color: green;">{{Session::get('thongbao')}}</p>
                @endif

                <div class="p-3">
                    <form action="{{ Route('customer.add') }}" method="post">
                        {{ csrf_field() }}
                        <small>@if($errors->has('customer_name'))
                            <strong class="text-danger">{{ $errors->first('customer_name') }}</strong>
                            @endif</small>
                        <div class="input-group input-group-sm mb-3 col-sm-3">
                            <span class="input-group-text bg-primary"><i class="bi bi-person-plus-fill text-white"></i></span>
                            <input type="text" name="customer_name" class="form-control" placeholder="Họ tên*">
                        </div>
                        <small> @if($errors->has('customer_telephone'))
                            <strong class="text-danger">{{ $errors->first('customer_telephone') }}</strong>
                            @endif</small>
                        <div class="input-group input-group-sm mb-3 col-sm-3">
                            <span class="input-group-text bg-primary"><i class="bi bi-telephone-plus-fill text-white"></i></span>
                            <input type="number" name="customer_telephone" class="form-control" placeholder="Số điện thoại*">
                        </div>
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
                        <small> @if($errors->has('customer_confirm_password'))
                            <strong class="text-danger">{{ $errors->first('customer_confirm_password') }}</strong>
                            @endif</small>
                        <div class="input-group input-group-sm mb-3 col-sm-3">
                            <span class="input-group-text bg-primary"><i class="bi bi-key-fill text-white"></i></span>
                            <input type="password" name="customer_confirm_password" class="form-control" placeholder="Lặp lại mật khẩu của bạn*">

                        </div>
                        <div class="input-group input-group-sm mb-3 col-sm-3">
                            <span class="input-group-text bg-primary"><i class="bi bi-geo-alt-fill text-white"></i></span>
                            <input type="text" name="customer_address" class="form-control" placeholder="Địa chỉ">
                        </div>
                        <div class="d-grid col-6 mx-auto">
                            <button class="btn btn-primary" type="submit"><span></span> Đăng ký</button>
                        </div>
                        <p class="text-center mt-3">Bạn đã có tài khoản?
                            <a href="{{ route('customer.login') }}"><span class="text-primary">Đăng nhập</span></a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection