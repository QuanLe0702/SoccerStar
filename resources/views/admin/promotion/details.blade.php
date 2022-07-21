@extends('admin.layout-admin')
@section('title', 'Cập nhật thông tin khuyến mãi')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Cập nhật {{ $pm->promotion_name }}</h3>
                    </div>
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
                    <form role="form" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="txt-name">Tên khuyến mãi</label>
                                <input type="text" class="form-control" id="txt-name" name="promotion_name" value="{{ $pm->promotion_name }}" readonly>
                            </div>

                            @if ( $pm->promotion_type == 0 )
                            <div class="form-group">
                                <label for="txt-price">Loại khuyến mãi</label>
                                <input type="text" class="form-control" id="txt-price" name="promotion_type" value="Giảm giá theo số phần trăm" readonly>

                            </div>
                            @elseif ( $pm->promotion_type == 1 )
                            <div class="form-group">
                                <label for="txt-price">Loại khuyến mãi</label>
                                <input type="text" class="form-control" id="txt-price" name="promotion_type" value="Giảm giá theo số tiền" readonly>
                            </div>
                            @endif
                        
                            <div class="form-group">
                                <label for="txt-promotion-start">Ngày bắt đầu giảm giá</label>
                                <input type="datetime-local"  readonly class="form-control" id="txt-promotion-start" name="promotion_time_start" onload="valueOfStartDatetime_local();">
                            </div>

                            <div class="form-group">
                                <label for="txt-promotion-end">Ngày kết thúc giảm giá</label>
                                <input type="datetime-local"  readonly class="form-control" id="txt-promotion-end" name="promotion_time_end" onload="valueOfEndtDatetime_local();">
                            </div>
                            <div class="form-group">
                                <label for="txt-type">Giảm giá theo: </label>

                                <input type="radio" value="0" name="option" id="product_id_option" onclick="option1()">Product ID
                                <input type="radio" value="1" name="option" id="product_type_id_option" onclick="option2()">Product Type ID
                            </div>

                            <div  class="form-group" style="display: none;" id="type">
                                <label for="txt-type">Loại sản phẩm: </label>
                                <input type="text" class="form-control" id="txt-type" name="product_type_id" value="{{ $pm->product->product_type_name }}"  readonly>
                            </div>

                            <div  class="form-group" style="display: none;"  id="product">
                                <label for="txt-product">Sản phẩm : </label>
                                <input type="text" class="form-control" id="txt-product" name="product_id" value="{{ $pm->product->product_name }}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="txt-brand-id">Giá trị giảm giá</label>
                                <input type="text" class="form-control" id="txt-brand-id" name="promotion_value" value='{{ $pm->promotion_value }}'  readonly>
                            </div>
                        </div>
                    </form>
                </div>
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