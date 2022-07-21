@extends('admin.layout-admin')
<!-- thay bang tieu de -->
@section('title', 'Danh sách phản hồi')
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Danh sách phản hồi</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">Trang chủ</li>
                    <li class="breadcrumb-item active">Phản hồi</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Bảng Phản hồi</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="feedback" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th style="width: 1%" class="text-center">
                                    ID
                                </th>
                                <th style="width: 15%" class="text-center">
                                    Tên tài khoản
                                </th>
                                <th style="width: 15%" class="text-center">
                                    Tài khoản Email
                                </th>
                                <th style="width: 25%" class="text-center">
                                    Nội dung phản hồi
                                </th>
                                <th style="width: 25%" class="text-center">
                                    Ngày phản hồi
                                </th>
                                <th style="width: 25%" class="text-center">
                                    Tùy chọn
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($feedbacks as $p)
                            <tr>
                                <td>
                                    {{ $p->feedback_id }}
                                </td>

                                <td>
                                    {{ $p->feedback_name }}
                                </td>

                                <td>
                                    {{ $p->feedback_email }}
                                </td>

                                <td>
                                    {{ $p->feedback_content }}
                                </td>

                                <td>
                                    {{ $p->feedback_date }}
                                </td>

                                <td class="project-actions text-right">
                                    <a class="btn btn-primary btn-sm" href="{{ route('admin.showFeedback',$p->feedback_id) }}">
                                        <i class="fas fa-folder">
                                        </i>
                                        Xem
                                    </a>
                                    <a class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc muốn xóa?');" href="{{ route('admin.deleteFeedback',$p->feedback_id) }}">
                                        <i class="fas fa-trash">
                                        </i>
                                        Xóa
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>

        </div>

    </div>
</section>
@endsection
@section('script-section')
<script>
    $(function() {
        $('#feedback').DataTable({
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