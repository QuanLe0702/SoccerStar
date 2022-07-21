@extends('user.layout-product')
@section('title', 'home')
@section('content')
<style>
    .name {
        width: 320px;
        text-align: center;
        font-size: 15px;
    }

    .price {
        color: red;
        text-align: center;
        width: 320px;
    }

    .card {
        display: inline-block;
    }

    .product {
        width: 320px;
        display: inline-block;
        margin-left: 60px;
    }
    
</style>

<div id="products" style="padding-top: 50px;">
    @foreach($brand_name as $p)
    <div class="product">
        <div class="card" style="background: #232323;">
                <center>
                    <div class="imgBx">
                        <img src="{{ url('images/'.$p->product_image) }}" alt="">
                    </div>
                </center>
            <div class="contentBx">
                <a class="Buy" href="{{ Route('user.detailProduct',$p->id) }}">Buy Now</a>
            </div>
        </div>
        <h6 class="price">{{ number_format($p->product_price) }}Đ</h6>
        <h6 class="name"><b>{{ $p->product_name }}</b></h6>
    </div>
    @endforeach
    </div>
</div>
@endsection

