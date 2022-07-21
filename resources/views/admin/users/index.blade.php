@extends('admin.layout-admin')
@section('title', 'Danh sách admin')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Admin</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">Trang chủ</li>
                    <li class="breadcrumb-item active">Admin</li>
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
                    <h3 class="card-title">Bảng Admin </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="users" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th style="width: 1%" class="text-center">ID</th>
                                <th style="width: 20%" class="text-center">Họ Tên </th>
                                <th style="width: 20%" class="text-center">Email</th>
                                <!-- <th style="width: 40%" class="text-center">mật khẩu</th> -->
                                <th style="width: 20%" class="text-center">Chức vụ</th>
                                <th style="width: 20%" class="text-center">Tùy chọn</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $p)
                            <tr>
                                <td>{{ $p->id }}</td>

                                <td>{{ $p->name }}</td>

                                <td> {{ $p->email }}</td>
                                <!-- <td>{{ $p->password }}</td> -->

                                <td>
                                    <?php
                                    if ($p->role == 1) {
                                        echo '<span class="badge badge-success">Quản lý sản phẩm</span>';
                                    } elseif (($p->role == 2)) {
                                        echo '<span class="badge badge-success">Quản lý khách hàng</span>';
                                    } else {
                                        echo '<span class="badge badge-success">Quản lý</span>';
                                    }
                                    ?>
                                </td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-primary btn-sm" href="{{Route('admin.users.details',$p->id)}}">
                                        <i class="fas fa-folder"></i>Xem
                                    </a>

                                    <a class="btn btn-info btn-sm" href="{{ Route('admin.users.update',$p->id) }}">
                                        <i class="fas fa-folder"></i>Sửa
                                    </a>

                                    @if($p->role ==3 )
                                    <a class="btn btn-danger btn-sm disabled" onclick="return confirm('Bạn có chắc muốn xóa?');" href="{{ Route('admin.users.delete',$p->id) }}">
                                        <i class="fas fa-trash"></i>Xóa
                                    </a>
                                    @else
                                    <a class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc muốn xóa?');" href="{{ Route('admin.users.delete',$p->id) }}">
                                        <i class="fas fa-trash"></i>Xóa
                                    </a>
                                    @endif



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
        $('#users').DataTable({
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