<!-- Lưu tại resources/views/product/index.blade.php -->
@extends('admin.layout-admin')
@section('title', 'Danh sách khuyến mãi')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Khuyến mãi</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">Trang chủ</li>
                    <li class="breadcrumb-item active">Khuyến mãi</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="promotion" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên khuyến mãi</th>
                                <th>Bắt đầu</th>
                                <th>Kết thúc</th>
                                <th>Giảm giá theo</th>
                                <th>Tên item được giảm</th>
                                <th>Tùy chọn</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($promotions as $p)
                            <tr>
                                <td>{{ $p->promotion_id }}</td>
                                <td>{{ $p->promotion_name }}</td>
                                <td>{{ $p->promotion_time_start }}</td>
                                <td>{{ $p->promotion_time_end }}</td>
                                @if($p->promotion_type == 0)
                                <td>Giảm giá theo phần trăm</td>
                                @elseif($p->promotion_type == 1 )
                                <td>Giảm giá theo số tiền</td>
                                @endif
                                @if($p->product_type_id == null)
                                <td>{{ $p->product->product_name }}</td>
                                @elseif($p->product_id == null )
                                <td>{{ $p->product_type->product_type_name }}</td>
                                @endif
                                <td class="text-right">
                                    <a class="btn btn-primary btn-sm" href="{{ Route('promotion.details',$p->promotion_id) }}">
                                        <i class="fas fa-folder"></i> Xem
                                    </a>
                                    <a class="btn btn-info btn-sm" href="{{ Route('promotion.update',$p->promotion_id) }}">
                                        <i class="fas fa-pencil-alt"></i> Sửa
                                    </a>
                                    <a class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc muốn xóa?');" s href="{{ Route('promotion.delete',$p->promotion_id) }}">
                                        <i class="fas fa-trash"></i> Xóa
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
@endsection
@section('script-section')
<script>
    $(function() {
        $('#promotion').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
        });
    });
</script>
@endsection