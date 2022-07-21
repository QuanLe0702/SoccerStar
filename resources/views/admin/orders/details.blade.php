@extends('admin.layout-admin')
@section('title')
Chi tiết đơn hàng
@endsection

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Chi tiết đơn hàng</h3>
                    </div>
                    <div class="card-body">
                        <table id="orders" class="table table-bordered table-hover">

                            <tr>
                                <td>ID đơn hàng</td>
                                <td><input name="txtID" value="{{$p->order_id}}" readonly></td>
            
                            </tr>
                            
                            <tr>
                                <td>Ngày đặt hàng</td>
                                <td><input name="txtDate" value="{{$p->order_date}}" readonly ></td>

                            </tr>
                            
                            <div class="form-group">
                                <label for="txt-price">Trạng thái </label>
                                <?php
                                if ($p->order_status == 0) {
                                    echo '<span class="badge badge-success">Chưa duyệt</span>';
                                } else {
                                    echo '<span class="badge badge-success">Đã duyệt</span>';
                                }
                                ?>
                            </div>
                            
                            <tr>
                                <td>Ghi chú đơn hàng </td>
                                <td><input name="txtNote" value="{{$p->order_note}}" readonly></td>

                            </tr>
                            <tr>
                                <td>Số điện thoại khách hàng </td>
                                <td><input name="txtCTel" value="{{$p->customer_telephone}}" readonly></td>

                            </tr>
                            <tr>
                                <td>Tên khách hàng</td>
                                <td><input name="txtCName" value="{{$p->customer_name}}" readonly></td>

                            </tr>
                            <tr>
                                <td>Địa chỉ khách hàng</td>
                                <td><input name="txtCAdd" value="{{$p->customer_address}}" readonly></td>

                            </tr>
                            <tr>
                                <td>Mail Khách hàng</td>
                                <td><input name="txtCMail" value="{{$p->customer_mail}}" readonly></td>

                            </tr>
                            <tr>
                                <td>ID Khách hàng</td>
                                <td><input name="txtCID" value="{{$p->customer_id}}" readonly></td>

                            </tr>



                            <tr>
                                <td colspan="2"><a class="btn btn-primary btn-sm"  style="margin-left: 42%; width: 100px" href="{{Route('orders.index')}}">Quay lại</a></td>
                                
                            </tr>
                        </table>
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