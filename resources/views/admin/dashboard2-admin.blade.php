@extends('admin.layout-admin')
<!-- thay bang tieu de -->
@section('title', 'Quản lý khách hàng')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 style="font-weight: bold;">Trang Quản lý khách hàng</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">Trang chủ</li>
                    <li class="breadcrumb-item active">Quản lý Khách hàng</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">

            <div class="col-sm-3 lg-3">
                <a href="{{ route('admin.customer')}}"> <img src="{{ asset('backend/img/khach_hang.jpg') }}" alt="" width="100%"></a>
            </div>
            <div class="col-sm-3 lg-3">
                <a href="{{ url('admin/news/index') }}"> <img src="{{ asset('backend/img/tin_tuc.jpg') }}" alt="" width="100%"></a>

            </div>
            <div class="col-sm-3 lg-3">
                <a href="{{ url('admin/orders/index') }}"> <img src="{{ asset('backend/img/don_hang.jpg') }}" alt="" width="100%"></a>
            </div>

            <div class="col-sm-3 lg-3">
                <a href="#"> <img src="{{ asset('backend/img/doanh_thu.jpg') }}" alt="" width="100%"></a>
            </div>
        </div>

        <div class="row mb-2">
          
            <div class="col-sm-3 lg-3">
                <a href="{{ route('admin.feedback')}}"> <img src="{{ asset('backend/img/phan_hoi_website.jpg') }}" alt="" width="100%"></a>
            </div>
        </div>
    </div>
</section>



@endsection
@section('script-section')
<script>
    $(function() {
        $('#product').DataTable({
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