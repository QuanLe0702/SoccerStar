<!-- lưu tại /resources/views/product/update.blade.php -->
@extends('admin.layout-admin')
@section('title', 'Cập nhật đơn hàng')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Update {{ $p->name }}</h3>
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
                    <form role="form" action="{{ Route('orders.postUpdate',$p->order_id) }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="card-body">
                        <div class="form-group">
                                <label for="txt-topic">Order ID</label>
                                <input type="text" class="form-control" id="txt-ID" name="order_id" value="{{ $p->order_id }}"readonly>
                            </div>
                            <div class="form-group">
                                <label for="txt-topic">Order Date</label>
                                <input type="text" class="form-control" id="txt-Date" name="order_date" value="{{ $p->order_date }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="txt-topic">Order Status</label>
                                <input type="text" class="form-control" id="txt-status" name="order_status" value="{{ $p->order_status }}">
                            </div>
                            <div class="form-group">
                                <label for="txt-topic">Order Note</label>
                                <input type="text" class="form-control" id="txt-note" name="order_note" value="{{ $p->order_note }}">
                            </div>
                            <div class="form-group">
                                <label for="txt-topic">Customer Telephone</label>
                                <input type="text" class="form-control" id="txt-CTelephone" name="customer_telephone" value="{{ $p->customer_telephone}}">
                            </div>
                            <div class="form-group">
                                <label for="txt-topic">Customer Name</label>
                                <input type="text" class="form-control" id="txt-CName" name="customer_name" value="{{ $p->customer_name}}">
                            </div>
                            <div class="form-group">
                                <label for="txt-topic">Customer Address</label>
                                <input type="text" class="form-control" id="txt-CAddress" name="customer_address" value="{{ $p->customer_address}}">
                            </div>
                            <div class="form-group">
                                <label for="txt-topic">Customer Mail</label>
                                <input type="text" class="form-control" id="txt-CMail" name="customer_mail" value="{{ $p->customer_mail}}">
                            </div>
                            <div class="form-group">
                                <label for="txt-topic">Customer ID</label>
                                <input type="text" class="form-control" id="txt-CMail" name="cid" value="{{ $p->customer_id }}" readonly>
                            </div>


                            
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
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