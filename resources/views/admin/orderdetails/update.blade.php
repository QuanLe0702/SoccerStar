<!-- lưu tại /resources/views/product/update.blade.php -->
@extends('admin.layout-admin')
@section('title', 'Cập nhật chi tiết đơn hàng')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Cập nhật {{ $p->orderDetail_id }}</h3>
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
                    <form role="form" action="{{ Route('orderdetails.postUpdate',$p->orderDetail_id) }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="txt-id">ID</label>
                                <input type="text" class="form-control" id="txt-id" name="orderDetail_id" value="{{ $p->orderDetail_id }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="txt-name">Số lượng</label>
                                <input type="text" class="form-control" id="txt-quantity" name="orderDetail_quantity"  value="{{ $p->orderDetail_quantity }}">
                            </div>
                            <div class="form-group">
                                <label for="txt-price">Giá tiền</label>
                                <input type="text" class="form-control" id="txt-price" name="orderDetail_price" value="{{ $p->orderDetail_price }}">
                            </div>
                            <div class="form-group">
                                <label for="txt-price">Kích thước sản phẩm</label>
                                <input type="text" class="form-control" id="txt-size" name="product_size"  value="{{ $p->product_size }}">
                            </div>
                            <div class="form-group">
                                <label for="txt-price">Mã đơn hàng</label>
                                <input type="text" class="form-control" id="txt-orderID" name="order_id" value="{{ $p->order_id }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="txt-price">Mã sản phẩm</label>
                                <input type="text" class="form-control" id="txt-productID" name="product_id" value="{{ $p->product_id }}" readonly>
                            </div>
                            
                            
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Cập nhật</button>
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