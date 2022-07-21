@extends('admin.layout-admin')
<!-- thay bang tieu de -->
@section('title', 'Cập nhật khách hàng')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <div class="card card-primary">
                    <div class="card-header">

                        <h3 class="card-title">Cập nhật trạng thái - {{ $p->customer_name }}</h3>
                    </div>
                    <!-- form start -->
                    <form role="form" action="{{ route('admin.postEditCustomer', $p->customer_id) }}" method="post">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="txt-id">Mã khách hàng</label>
                                <input type="text" class="form-control" id="customer_id" name="customer_id" value="{{ $p->customer_id }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="txt-name">Họ tên</label>
                                <input type="text" class="form-control" id="customer_name" name="customer_name" value="{{ $p->customer_name }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="txt-price">Số điện thoại</label>
                                <input type="text" class="form-control" id="customer_telephone" name="customer_telephone" value="{{ $p->customer_telephone }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="txt-price">E-mail</label>
                                <input type="text" class="form-control" id="customer_email" name="customer_email" value="{{ $p->customer_email }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="txt-price">Địa chỉ</label><br>
                                <textarea name="customer_address" id="customer_address"  rows="1" class="form-control" readonly>{{ $p->customer_address }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="txt-price">Trạng thái </label>
                                <?php
                                if ($p->customer_status == 0) {
                                    echo '<div class="form-check">
                                    <input type="radio" name="customer_status" value="0" checked>
                                    <label class="form-check-label">Ẩn</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="customer_status" value="1" >
                                    <label class="form-check-label">Hiển thị</label>
                                </div>';
                                } else {
                                                                    echo ' <div class="form-check">
                                <input type="radio" name="customer_status" value="0" >
                                <label class="form-check-label">Ẩn</label>
                                </div>
                                <div class="form-check">
                                <input type="radio" name="customer_status" value="1" checked>
                                <label class="form-check-label">Hiển thị</label>
                                </div>';
                                }
                                ?>

                            </div>

                            <div class="form-group">

                                <label for="image">Ảnh đại diện</label><br>
                                <img class="img-fluid" src="{{ url('images/'.$p->customer_image) }}" width="100" height="100" />

                            </div>
                        </div>

                        <div class="col-3 mx-auto" style="margin-bottom: 30px;">
                            <button type="submit" class="btn btn-primary btn-block">Cập nhật</button>
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