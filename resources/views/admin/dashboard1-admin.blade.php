@extends('admin.layout-admin')
<!-- thay bang tieu de -->
@section('title', 'Quản lý sản phẩm')
@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 style="font-weight: bold;">Trang Quản lý sản phẩm</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">Trang chủ</li>
                    <li class="breadcrumb-item active">Quản lý sản phẩm</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
                        <div class="col-sm-3 lg-3">
                            <a href="{{ url('admin/product/index') }}"> <img src="{{ asset('backend/img/san_pham.jpg') }}" alt="" width="100%"></a>

                        </div>
                        <div class="col-sm-3 lg-3">
                            <a href="{{ url('admin/product_type/index') }}"> <img src="{{ asset('backend/img/loai_san_pham.jpg') }}" alt="" width="100%"></a>
                        </div>
                        <div class="col-sm-3 lg-3">
                            <a href="{{ url('admin/brand/index') }}"> <img src="{{ asset('backend/img/thuong_hieu.jpg') }}" alt="" width="100%"></a>
                        </div>

                        <div class="col-sm-3 lg-3">
                            <a href="{{ url('admin/slider/index') }}"> <img src="{{ asset('backend/img/slider.jpg') }}" alt="" width="100%"></a>
                        </div>

                    </div>
                    <div class="row mb-2">

                        <div class="col-sm-3 lg-3">
                            <a href="#"> <img src="{{ asset('backend/img/khuyen_mai.jpg') }}" alt="" width="100%"></a>

                        </div>
                        <div class="col-sm-3 lg-3">
                            <a href="{{ route('admin.comment')}}"> <img src="{{ asset('backend/img/binh_luan.jpg') }}" alt="" width="100%"></a>
                        </div>


                    </div>

                    <div class="row mb-2">

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