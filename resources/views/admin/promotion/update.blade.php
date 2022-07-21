<!-- lưu tại /resources/views/product/create.blade.php -->
@extends('admin.layout.layout')
@section('title', 'Cập nhật thông tin khuyến mãi')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Cập nhật {{ $pm->promotion_name }}</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    @if($errors->any())
                    <div>
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach

                        </ul>
                    </div>
                    @endif
                    @if(Session::has('success'))
                    <p>{{Session::get('success')}}</p>
                    @endif
                    <form role="form" action="{{ Route('promotion.postUpdate',$pm->id) }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <!-- ID -->
                            <!-- <div class="form-group">
                                <label for="txt-id">ID khuyến mãi</label>
                                <input type="text" class="form- control" id="txt-id" name="promotion_id" placeholder="Enter ID here..." readonly value="{{ $pm->id }}" >
                            </div> -->

                            <!-- Name -->
                            <div class="form-group">
                                <label for="txt-name">Tên khuyến mãi</label>
                                <input type="text" class="form- control" id="txt-name" name="promotion_name" placeholder="Enter Name here..." value="{{ $pm->promotion_name }}">
                            </div>

                            <!-- Type -->
                            @if ( $pm->promotion_type == 0 )
                            <div class="form-group">
                                <label for="txt-price">Loại khuyến mãi</label>
                                <select class="form- control" id="txt-prices" name="promotion_type">
                                    <option value="0" name="percentage" selected>Giảm theo phần trăm</option>
                                    <option value="1" name="number">Giảm theo số tiền</option>
                                </select>
                            </div>
                            @elseif ( $pm->promotion_type == 1 )
                            <div class="form-group">
                                <label for="txt-price">Loại khuyến mãi</label>
                                <select class="form- control" id="txt-prices" name="promotion_type">
                                    <option value="0" name="percentage">Giảm theo phần trăm</option>
                                    <option value="1" name="number" selected>Giảm theo số tiền</option>
                                </select>
                            </div>
                            @endif
                        
                            <!-- Image -->
                            <div class="form-group">
                                <label for="txt-promotion-start">Ngày bắt đầu giảm giá</label>
                                <input type="datetime-local" class="form- control" id="txt-promotion-start" name="promotion_time_start" placeholder="Enter Name here..." onload="valueOfStartDatetime_local();">
                            </div>

                            <!-- Hightlight -->
                            <div class="form-group">
                                <label for="txt-promotion-end">Ngày kết thúc giảm giá</label>
                                <input type="datetime-local" class="form- control" id="txt-promotion-end" name="promotion_time_end" placeholder="Enter Name here..." onload="valueOfEndtDatetime_local();">
                            </div>
                            <div class="form-group">
                                <label for="txt-type">Giảm giá theo: </label>
                                <!-- <select class="form- control" id="txt-type" name="promotion_with"> -->
                                <!-- onclick -->
                                <input type="radio" value="0" name="option" id="product_id_option" onclick="option1()">Product ID
                                <input type="radio" value="1" name="option" id="product_type_id_option" onclick="option2()">Product Type ID
                                <!-- </select> -->
                            </div>

                            <!-- onclick -->
                            <div  class="form-group" style="display: none;" id="type">
                                <label for="Ptype">Loại sản phẩm: <small> lựa chọn trước đó: {{ $pm->product->product_type_name }}</small></label>
                                <select class="form-control" id="Ptype" name="product_type_id">
                                    <option value=""></option>
                                    @foreach($type as $t)
                                    <option value="{{ $t->id }}">{{ $t->product_type_name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Product ID -->
                            <div  class="form-group" style="display: none;"  id="product">
                                <label for="Pproduct">Sản phẩm : <small> lựa chọn trước đó: {{ $pm->product->product_name }}</small></label>
                                <select class="form-control" id="Pproduct" name="product_id">
                                <option value=""></option>
                                    @foreach($product as $p)
                                    <option value="{{ $p->id }}">{{ $p->product_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- Brand ID -->
                            <div class="form-group">
                                <label for="txt-brand-id">Giá trị giảm giá</label>
                                <input type="text" class="form- control" id="txt-brand-id" name="promotion_value" value='{{ $pm->promotion_value }}' placeholder="Đơn vị % hoặc VND...">
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
<script src="{{ asset('plugins/bs-custom-file-input/bs-custom- file-input.min.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function() {
        bsCustomFileInput.init();
    });
</script>
<script>
    // sử dụng hàm slice để xử lý giá trị datetime-local
    var dateTimeStart = <?php echo json_encode($pm->promotion_time_start); ?>;
    var dateTimeEnd = <?php echo json_encode($pm->promotion_time_end); ?>;
    var dateStart = dateTimeStart.slice(0, 10);
    var timeStart = dateTimeStart.slice(11, 19);
    var dateEnd = dateTimeEnd.slice(0, 10);
    var timeEnd = dateTimeEnd.slice(11, 19);

    function valueOfStartDatetime_local() {
        $("#txt-promotion-start").val(dateStart + 'T' + timeStart);
    }
    valueOfStartDatetime_local();
    function valueOfEndtDatetime_local() {
        $("#txt-promotion-end").val(dateEnd + 'T' + timeEnd);
    }
    valueOfEndtDatetime_local();
</script>
<script>
    function option1() {
        $("#Ptype").val("");
        $('#product').show();
        $('#type').hide();
    }

    function option2() {
        $("#Pproduct").val("");
        $('#type').show();
        $('#product').hide();

    }
</script>
@endsection