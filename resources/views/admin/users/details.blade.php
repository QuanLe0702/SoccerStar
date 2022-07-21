@extends('admin.layout-admin')
<!-- thay bang tieu de -->
@section('title', 'Chi tiết admin')
@section('content')
<section class="content" >
    <div class="container-fluid" >
        <div class="row" >
            <div class="offset-md-3 col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">admin - {{ $p->name }}</h3>
                    </div>
                    <form role="form" action="{{ route('admin.users.index') }}">
                        {{ csrf_field() }}
                        <div class="card-body">

                        <div class="form-group">
                                <label for="txt-name">ID</label>
                                <input type="text" class="form-control" id="txt-id" name="id" value="{{$p->id}}">

                            </div>

                            <div class="form-group">
                                <label for="txt-name">Họ tên</label>
                                <input type="text" class="form-control" id="txt-name" name="name" value="{{$p->name}}">
                            </div>

                            <div class="form-group">
                               
                                <label for="txt-name">Email</label>
                                <input type="email" class="form-control" id="txt-email" name="email" value="{{$p->email}}">
                            </div>
                            <div class="form-group">
                                
                                <label for="txt-password">Mật khẩu</label>
                                <input type="text" class="form-control" id="txt-password" name="password" value="{{$p->password}}">
                            </div>
                            <div class="form-group">

                                <label for="txt-name">Chức vụ</label></br>
                            
                                <?php
                                if ($p->role == 1) {
                                    echo '<span class="badge badge-success">Quản lý sản phẩm</span>';
                                } elseif($p->role ==2) 
                                {
                                    echo '<span class="badge badge-success"> Quản lý khách hàng</span>';
                                }
                                else{
                                    echo '<span class="badge badge-success"> Quản lý </span>';
                                }
                                ?>

                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Quay lại</button>
                            </div>
                    </form>
                </div>
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