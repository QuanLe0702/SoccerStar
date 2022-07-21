@extends('admin.layout-admin')
<!-- thay bang tieu de -->
@section('title', 'Danh sách khách hàng')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Danh sách khách hàng</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">Trang chủ</li>
                    <li class="breadcrumb-item active">Khách hàng</li>
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
                    <h3 class="card-title">Bảng Khách hàng </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="customer" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th style="width: 1%" class="text-center">ID</th>
                                <th style="width: 10%" class="text-center">Họ Tên KH</th>
                                <th style="width: 10%" class="text-center">Ảnh KH</th>
                                <th style="width: 10%" class="text-center">Số ĐT</th>
                                <th style="width: 15%" class="text-center">Email</th>
                                <th style="width: 20%" class="text-center">Địa Chỉ</th>
                                <th style="width: 10%" class="text-center">Trạng Thái</th>
                                <th style="width: 30%" class="text-center">Tùy chọn</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($customers as $p)
                            <tr>
                                <td>{{ $p->customer_id }}</td>

                                <td>{{ $p->customer_name }}</td>
                                <td>
                                    <small>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <img alt="Avatar" class="table-avatar" src="{{ url('images/'.$p->customer_image) }}" style="border-radius: 50%;display: inline;width: 100%;">
                                            </li>
                                        </ul>
                                    </small>
                                </td>
                                <td> 0{{ $p->customer_telephone }}</td>
                                <td>{{ $p->customer_email }}</td>

                                <td>{{ $p->customer_address }}</td>

                                <td class="project-state text-center">
                                    <?php
                                    if ($p->customer_status == 0) {
                                        echo '<span class="badge badge-success">Ẩn</span>';
                                    } else {
                                        echo '<span class="badge badge-success"> Hiển thị </span>';
                                    }
                                    ?>
                                </td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-primary btn-sm" href="{{ route('admin.showCustomer',$p->customer_id) }}">
                                        <i class="fas fa-folder"></i>Xem
                                    </a>
                                    <a class="btn btn-info btn-sm" href="{{ route('admin.editCustomer',$p->customer_id) }}">
                                        <i class="fas fa-folder"></i>Sửa
                                    </a>
                                    <a class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc muốn xóa?');" href="{{ route('admin.deleteCustomer',$p->customer_id) }}">
                                        <i class="fas fa-trash"></i>Xóa
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
        $('#customer').DataTable({
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