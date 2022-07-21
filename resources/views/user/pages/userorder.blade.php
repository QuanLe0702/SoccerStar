@extends('user.layout-user')
@section('title', 'UserOrder')
@section('content')
<!-- Content Header (Page header) -->

<section class="content">
    <div class="rounded d-flex justify-content-center">
        <span class="h3 fw-bold" style="color: darkblue; margin-top: 1rem;">Lịch sử đơn hàng</span>
    </div>
    <div class="container">
        <div class="row">
            @if(count($orders) >0)
            <div class="col-md-12">
                <table class="table table-bordered" style="margin-bottom: 1rem; margin-right: 1rem; margin-left: 1rem;">
                    <thead>
                        <tr>
                            <th>Mã đơn hàng</th>
                            <th>Ngày</th>
                            <th>Tên người nhận</th>
                            <th>Số điện thoại</th>
                            <th>Địa chỉ</th>
                            <th>Trạng thái</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $h)

                        <tr>
                            <td>{{ $h->order_id }}</td>
                            <td>{{ $h->order_date }}</td>
                            <td>{{ $h->customer_name }}</td>
                            <td>{{ $h->customer_telephone }}</td>
                            <td>{{ $h->customer_address }}</td>
                            <td class="project-state text-center">
                                <?php
                                if ($h->order_status == 0) {
                                    echo '<span class="badge bg-warning text-dark">Đang xử lý</span>';
                                } else {
                                    echo '<span class="badge bg-success">Đã xử lý</span>';
                                }
                                ?>
                            </td>
                            
                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
            @else
            <span class="h5" style="color: black; margin-top: 1rem;">Bạn chưa có đơn hàng nào <span class="fas fa-share-square"><a href="{{ Route('user.product') }}"> Mua ngay</a></span></span>
            @endif
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