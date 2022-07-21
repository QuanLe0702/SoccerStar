@extends('admin.layout-admin')
<!-- thay bang tieu de -->
@section('title', 'Chi tiết phản hồi')
@section('content')
<section class="content" >
    <div class="container-fluid" >
        <div class="row" >
            <div class="offset-md-3 col-md-6" >
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Tài khoản - {{ $p->feedback_name }}</h3>
                    </div>
                    <!-- form start -->
                    <form role="form" action="{{ route('admin.feedback') }}">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="txt-id">Mã phản hồi</label>
                                <input type="text" class="form-control" id="txt-id" name="feedback_id" value="{{ $p->feedback_id }}" readonly>
                            </div>
                            @if($p->customer_id)
                             <div class="form-group">
                                <label for="txt-name">Mã khách hàng</label>
                                <input type="text" class="form-control" id="txt-name" name="customer_id" value="{{ $p->customer_id }}" readonly>
                            </div>
                            @endif

                            <div class="form-group">
                                <label for="txt-name">Họ tên</label>
                                <input type="text" class="form-control" id="txt-name" name="feedback_name" value="{{ $p->feedback_name }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="txt-price">E-mail</label>
                                <input type="text" class="form-control" id="txt-price" name="feedback_email" value="{{ $p->feedback_email }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="txt-price">Nội dung phản hồi</label> <br>
                                <textarea name="feedback_content" id="feedback_content" cols="57" rows="5" readonly>{{ $p->feedback_content}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="txt-price">Ngày phản hồi</label>
                                <input type="text" class="form-control" id="txt-price" name="feedback_date" value="{{ $p->feedback_date }}" readonly>
                            </div>

                        </div>
                        <div class="col-3 mx-auto " style="margin-bottom: 30px;">
                            <button type="submit" class="btn btn-primary btn-block"> Quay lại</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('script-section')
<script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function() {
        bsCustomFileInput.init();
    });
</script>
@endsection