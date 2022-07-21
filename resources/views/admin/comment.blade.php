@extends('admin.layout-admin')
<!-- thay bang tieu de -->
@section('title', 'Danh sách bình luận')
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Danh sách bình luận</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">Trang chủ</li>
                    <li class="breadcrumb-item active">Bình luận</li>
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
                    <h3 class="card-title">Bảng Bình luận </h3>
                </div>
                <div class="card-body">
                    <table id="comment" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th style="width: 1%" class="text-center">
                                    ID
                                </th>
                                <th style="width: 10%" class="text-center">
                                    Tên tài khoản
                                </th>
                                <th style="width: 10%" class="text-center">
                                    Tên sản phẩm
                                </th>
                                <th style="width: 10%" class="text-center">
                                    Điểm đánh giá
                                </th>
                                <th style="width: 20%" class="text-center">
                                    Nội dung
                                </th>
                                <th style="width: 15%" class="text-center">
                                    Ngày bình luận
                                </th>
                                <th style="width: 20%" class="text-center">
                                    Nội dung trả lời
                                </th>
                                <th style="width: 20%" class="text-center">
                                    Tùy chọn
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($comments as $p)
                            <tr>
                                <td>
                                    {{ $p->comment_id }}
                                </td>

                                <td>
                                    {{ $p->customers->customer_name }}
                                </td>

                                <td>
                                    {{ $p->products->product_name }}
                                </td>

                                <td>
                                    {{ $p->comment_point }}
                                </td>

                                <td>
                                    {{ $p->comment_content }}
                                </td>

                                <td>
                                    {{ $p->comment_date }}
                                </td>

                                <td>
                                    {{ $p->comment_reply }}
                                </td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-primary btn-sm" href="{{ route('admin.replyComment',$p->comment_id) }}">
                                        <i class="fas fa-folder">
                                        </i>
                                        trả lời
                                    </a>
                                    <a class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc muốn xóa?');" href="{{ route('admin.deleteComment',$p->comment_id) }}">
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
        $('#comment').DataTable({
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