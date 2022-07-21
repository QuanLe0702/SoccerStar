@extends('user.layout-user')
@section('title', 'checkout')
@section('content')
<!-- Content Header (Page header) -->

<section class="content" style="margin:5%">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Check Out</h3>
                    </div>
                    <!-- /.card-header -->
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <!-- form start -->
                    
                    <form role="form" action="{{ Route('checkout.postCreate') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="txt-topic">Họ và tên</label>
                                    <input type="text" class="form-control" id="txt-CName" name="customer_name" placeholder="Nhập họ và tên">
                                </div>
                                <div class="form-group">
                                    <label for="txt-topic">Số điện thoại</label>
                                    <input type="text" class="form-control" id="txt-CTelephone" name="customer_telephone" placeholder="Nhập số điện thoại">
                                </div>
                                <div class="form-group">
                                    <label for="txt-topic">Địa chỉ</label>
                                    <input type="text" class="form-control" id="txt-CAddress" name="customer_address" placeholder="Nhập địa chỉ">
                                </div>
                                <div class="form-group">
                                    <label for="txt-topic">Email</label>
                                    <input type="text" class="form-control" id="txt-CMail" name="customer_mail" placeholder="Nhập email">
                                </div>
                                <div class="form-group">
                                    <label for="txt-topic">Ghi chú</label>
                                    <textarea class="form-control" id="txt-note" name="order_note" cols="20" rows="5" placeholder="Nhập ghi chú"></textarea>
                
                                </div>
                            </div>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Xác nhận</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>
@endsection
@section('script-section')
<script src="{{ asset('plugins/bs-custom-file-input/bs-custom- file-input.min.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function() {
        bsCustomFileInput.init();
    });
</script>
@endsection