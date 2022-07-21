@extends('user.layout-user')
<!-- thay bang tieu de -->
@section('title', 'Thông tin tài khoản')
@section('content')
<section class="vh" style="background-color: #F5F5F5;">
    <div class="container py-5 h-20 ">
        <div class="row d-flex justify-content-center align-items-center h-20 ">
            <div class="col-lg-8 col-md-8 col-sm-10 ">
                <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0">
                        <div class="d-flex align-items-center ">
                            <div class="card-body p-4 p-lg-3 text-black">
                                <span class="h3 fw-bold mb-0" style="color: #ff6219;">Hồ sơ của bạn</span>
                                @if(Session::has('customer_id'))
                                <form action="{{ route('customer.update',$p->customer_id) }}" method="post" enctype="multipart/form-data" style="margin-top: 1rem;">
                                    {{ csrf_field() }}
                                    @if(Session::has('thongbao'))
                                    <p style="color: green;">{{Session::get('thongbao')}}</p>
                                    @endif
                                    <div class="col-md-8 col-lg-10 sm-12">
                                        <div class="input-group input-group-sm mb-3 col-sm-3">
                                            <span class="input-group-text">Mã khách hàng</i></span>
                                            <input type="text" name="customer_id" value="{{ $p->customer_id }}" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <small>@if($errors->has('customer_name'))
                                        <strong class="text-danger">{{ $errors->first('customer_name') }}</strong>
                                        @endif</small>
                                    <div class="col-md-8 col-lg-10 sm-12">
                                        <div class="input-group input-group-sm mb-3 col-md-6 col-lg-6">
                                            <span class="input-group-text">Họ tên</i></span>
                                            <input type="text" name="customer_name" value="{{$p->customer_name}}" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-10 sm-12">
                                        <small>@if($errors->has('customer_telephone'))
                                            <strong class="text-danger">{{ $errors->first('customer_telephone') }}</strong>
                                            @endif</small>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text">Số điện thoại</i></span>
                                            <input type="text" name="customer_telephone" value="0{{$p->customer_telephone}}" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-10 sm-12">
                                        <small>@if($errors->has('customer_password'))
                                            <strong class="text-danger">{{ $errors->first('customer_password') }}</strong>
                                            @endif</small>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text">Mật khẩu</i></span>
                                            <input type="password" name="customer_password" value="" class="form-control" placeholder="{{$p->customer_password}}" />
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-10 sm-12">
                                        <small>@if($errors->has('customer_email'))
                                            <strong class="text-danger">{{ $errors->first('customer_email') }}</strong>
                                            @endif</small>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text">Email</i></span>
                                            <input type="email" name="customer_email" value="{{$p->customer_email}}" class="form-control " />
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-10 sm-12">
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text">Địa chỉ</i></span>
                                            <input type="" name="customer_address" value="{{$p->customer_address}}" class="form-control" />
                                        </div>
                                    </div>
                                    <!-- anh dai dien -->
                                    <div class="col-md-8 col-lg-10 sm-12">
                                        <div>
                                            <small>@if($errors->has('customer_image'))
                                                <strong class="text-danger">{{ $errors->first('customer_image') }}</strong>
                                                @endif
                                            </small>
                                            @if($p->customer_image)
                                            <div class="col-md-8 col-lg-10 sm-12">
                                                <div class="input-group input-group-sm mb-3">
                                                    <span class="input-group-text">Ảnh Đại diện</i></span>
                                                    <img class="img-fluid" src="{{ url('images/'.$p->customer_image) }}" width="150" height="100" style="display: inline;" />
                                                </div>
                                            </div>
                                            @endif
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="file" name="customer_image" class="form-control">
                                            <span class="input-group-text">Chọn ảnh</i></span>
                                        </div>
                                    </div>
                                    <div class="float-end">
                                        <button class="btn btn-primary btn-block" type="submit">Cập nhật</button>
                                    </div>
                                </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection