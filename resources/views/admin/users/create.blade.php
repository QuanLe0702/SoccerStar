@extends('admin.layout-admin')
@section('title','Thêm Admin')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Thêm Admin</h3>
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
                    <form role="form" action="{{ Route('admin.users.postCreate') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="card-body">
                           
                            <div class="form-group">
                                <label for="txt-name">Họ tên</label>
                                <input type="text" class="form-control" id="txt-name" name="name">
                            </div>

                            <div class="form-group">
                             
                                <label for="txt-name">Email</label>
                                <input type="email" class="form-control" id="txt-email" name="email">
                            </div>
                            <div class="form-group">
                              
                                <label for="txt-password">Mật khẩu</label>
                                <input type="text" class="form-control" id="txt-password" name="password">
                            </div>
                            <div class="form-group">
                               
                                <label for="txt-name">Chức vụ</label></br>
                                <input type="radio" id="QLSP" name="role" value="1">
                                <label for="QLSP">Quản lý sản phẩm</label><br>
                                <input type="radio" id="QLKH" name="role" value="2">
                                <label for="QLKH">Quản lý khách hàng</label><br>
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
<script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function() {
        bsCustomFileInput.init();
    });
</script>
@endsection