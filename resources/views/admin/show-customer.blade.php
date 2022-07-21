@extends('admin.layout-admin')
<!-- thay bang tieu de -->
@section('title', 'Chi tiết khách hàng')
@section('content')
<section class="content" >
    <div class="container-fluid" >
        <div class="row" >
            <div class="offset-md-3 col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Khách hàng - {{ $p->customer_name }}</h3>
                    </div>
                    <form role="form" action="{{ route('admin.customer') }}">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="txt-id">Mã khách hàng</label>
                                <input type="text" class="form-control" id="txt-id" name="customer_id" value="{{ $p->customer_id }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="txt-name">Họ tên</label>
                                <input type="text" class="form-control" id="txt-name" name="customer_name" value="{{ $p->customer_name }}">
                            </div>
                            <div class="form-group">
                                <label for="txt-price">Số điện thoại</label>
                                <input type="text" class="form-control" id="txt-price" name="customer_telephone" value="0{{ $p->customer_telephone }}">
                            </div>
                            <div class="form-group">
                                <label for="txt-price">E-mail</label>
                                <input type="text" class="form-control" id="txt-price" name="customer_email" value="{{ $p->customer_email }}">
                            </div>
                            <div class="form-group">
                                <label for="txt-price">Địa chỉ</label><br>
                                <textarea name="customer_address" id="customer_address" cols="50" rows="1" class="form-control">{{ $p->customer_address }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="txt-price">Trạng thái </label>
                                <?php
                                if ($p->customer_status == 0) {
                                    echo '<span class="badge badge-success">Ẩn</span>';
                                } else {
                                    echo '<span class="badge badge-success"> Hiển thị </span>';
                                }
                                ?>
                            </div>

                            <div class="form-group">
                                <label for="image">Ảnh đại diện</label> <br>
                                <img class="img-fluid" src="{{ url('images/'.$p->customer_image) }}" width="100" height="100" />
                            </div>
                        </div>
                        <div class="col-3 mx-auto" style="margin-bottom: 30px;">
                            <button type="submit" class="btn btn-primary btn-block"> Quay lại</button>
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