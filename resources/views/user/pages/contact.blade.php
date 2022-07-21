@extends('user.layout-user')
@section('title', 'liên hệ')
@section('content')
<style>
    
      .map {
        height: 500px;
        position: relative;
    }

    .map iframe {
        width: 100%;
    }

    .map Img {
        position: absolute;
        left: 50%;
        top: 50%;
        -webkit-transform: translate(-14px, -21px);
        -ms-transform: translate(-14px, -21px);
        transform: translate(-14px, -21px);
    }

    .map {
        margin-top: 20px;
        margin-bottom: 20px;
    }

    /*(----------map-css-end------------------)*/

    /*(----------Contact Section-begin--------)*/
    .contact-info h4 {
        font-weight: 600;
        color: #111111;
        text-transform: uppercase;
        margin-bottom: 47px;
    }

    .contact-info .contact-address .ca-widget {
        overflow: hidden;
        margin-bottom: 16px;
    }

    .contact-info .contact-address .ca-widget .cw-icon {
        height: 74px;
        width: 74px;
        border: 1px solid #ebebeb;
        border-radius: 50%;
        text-align: center;
        line-height: 74px;
        float: left;
        margin-right: 28px;
    }

    .contact-info .contact-address .ca-widget .cw-text {
        padding-top: 12px;
    }

    .contact-info .contact-address .ca-widget .cw-text h5 {
        color: #bdbdbd;
        margin-bottom: 5px;
    }

    .contact-info .contact-address .ca-widget .cw-text p {
        margin-bottom: 0;
        color: #111111;
        font-size: 18px;
    }

    .contact-info .contact-address .ca-widget .cw-text p a {
        color: #111111;
    }

    .contact-info .contact-address .ca-widget .cw-text p a:hover {
        color: orangered;
    }

    .contact-form h4 {
        font-weight: 600;
        color: #111111;
        text-transform: uppercase;
        margin-bottom: 47px;
    }

    .contact-form form input {
        width: 100%;
        height: 51px;
        border: 1px solid #e1e1e1;
        padding-left: 20px;
        font-size: 16px;
        margin-bottom: 30px;
    }

    .contact-form form input::-webkit-input-placeholder {
        color: #9a9a9a;
    }

    .contact-form form input::-moz-placeholder {
        color: #9a9a9a;
    }

    .contact-form form input:-ms-input-placeholder {
        color: #9a9a9a;
    }

    .contact-form form input::-ms-input-placeholder {
        color: #9a9a9a;
    }

    .contact-form form input::placeholder {
        color: #9a9a9a;
    }

    .contact-form form input:focus {
        color: #111111;
    }

    .contact-form form textarea {
        width: 100%;
        height: 150px;
        border: 1px solid #e1e1e1;
        padding-left: 20px;
        font-size: 16px;
        padding-top: 10px;
        margin-bottom: 42px;
        resize: none;
    }

    .contact-form form textarea::-webkit-input-placeholder {
        color: #9a9a9a;
    }

    .contact-form form textarea::-moz-placeholder {
        color: #9a9a9a;
    }

    .contact-form form textarea:-ms-input-placeholder {
        color: #9a9a9a;
    }

    .contact-form form textarea::-ms-input-placeholder {
        color: #9a9a9a;
    }

    .contact-form form textarea::placeholder {
        color: #9a9a9a;
    }

    .contact-form form textarea:focus {
        color: #111111;
    }

    .contact-form form button {
        font-size: 14px;
        color: #ffffff;
        padding: 10px 33px;
        display: inline-block;
        background: -webkit-gradient(linear,
                left top,
                right top,
                from(#eb3c5a),
                to(#f67831));
        background: -o-linear-gradient(left, #eb3c5a, #f67831);
        background: linear-gradient(to right, #eb3c5a, #f67831);
        border: none;
        text-transform: uppercase;
    }

    .header {
        background-image: url("{{ asset('frontend/img/Contact_Us.jpg') }}");
        background-size: cover;
        background-repeat: no-repeat;
        width: 100%;
        height: 450px;
        /* height: 100vh; */
        background-position: center;
        display: block;
        background-color: rgba(255, 255, 255, 0.3);
        background-blend-mode: lighten;
        position: relative;
    }
    
  
    @import url('https://fonts.googleapis.com/css?family=Roboto&display=swap');
    @import url('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

    * {
        margin: 0;
        padding: 0;
    }

    body {
        font-family: 'Roboto', sans-serif;
        font-style: normal;
        font-weight: 300;
        font-smoothing: antialiased;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        font-size: 15px;
        background: #eee;
    }

    .intro {
        background: #fff;
        padding: 60px 30px;
        color: #333;
        margin-bottom: 15px;
        line-height: 1.5;
        text-align: center;
    }

    .intro h1 {
        font-size: 18pt;
        padding-bottom: 15px;

    }

    .intro p {
        font-size: 14px;
    }

    .action {
        text-align: center;
        display: block;
        margin-top: 20px;
    }

    a.btn {
        text-decoration: none;
        color: #666;
        border: 2px solid #666;
        padding: 10px 15px;
        display: inline-block;
        margin-left: 5px;
    }

    a.btn:hover {
        background: #666;
        color: #fff;
        transition: .3s;
        -webkit-transition: .3s;
    }

    .btn:before {
        font-family: FontAwesome;
        font-weight: normal;
        margin-right: 10px;
    }

    .github:before {
        content: "\f09b"
    }

    .down:before {
        content: "\f019"
    }

    .back:before {
        content: "\f112"
    }

    .credit {
        background: #fff;
        padding: 12px;
        font-size: 9pt;
        text-align: center;
        color: #333;
        margin-top: 40px;

    }

    .credit span:before {
        font-family: FontAwesome;
        color: #e41b17;
        content: "\f004";


    }

    .credit a {
        color: #333;
        text-decoration: none;
    }

    .credit a:hover {
        color: #1DBF73;
    }

    .credit a:hover:after {
        font-family: FontAwesome;
        content: "\f08e";
        font-size: 9pt;
        position: absolute;
        margin: 3px;
    }

    main {
        background: #fff;
        padding: 20px;

    }

    article li {
        color: #444;
        font-size: 15px;
        margin-left: 33px;
        line-height: 1.5;
        padding: 5px;
    }

    article h1,
    article h2,
    article h3,
    article h4,
    article p {
        padding: 14px;
        color: #333;
    }

    article p {
        font-size: 15px;
        line-height: 1.5;
    }

    @media only screen and (min-width: 960px) {
        main {
            max-width: 920px;
            margin-left: auto;
            margin-right: auto;
            padding: 24px;
        }


    }

    .set-overlayer,
    .set-glass,
    .set-sticky {
        cursor: pointer;
        height: 45px;
        line-height: 45px;
        padding: 0 15px;
        color: #333;
        font-size: 16px;
    }

    .set-overlayer:after,
    .set-glass:after,
    .to-active:after,
    .set-sticky:after {
        font-family: FontAwesome;
        font-size: 18pt;
        position: relative;
        float: right;
    }

    .set-overlayer:after,
    .set-glass:after,
    .set-sticky:after {
        content: "\f204";
        transition: .6s;
    }

    .to-active:after {
        content: "\f205";
        color: #008080;
        transition: .6s;
    }

    .set-overlayer,
    .set-glass,
    .set-sticky,
    .source,
    .theme-tray {
        margin: 10px;
        background: #f2f2f2;
        border-radius: 5px;
        border: 2px solid #f1f1f1;
        box-sizing: border-box;
    }

    /* Syntax Highlighter*/

    pre.prettyprint {
        padding: 15px !important;
        margin: 10px;
        border: 0 !important;
        background: #f2f2f2;
        overflow: auto;
    }

    .source {
        white-space: pre;
        overflow: auto;
        max-height: 400px;
    }

    code {
        border: 1px solid #ddd;
        padding: 2px;
        border-radius: 2px;
    }

    .client {
        width: 100%;
        height: 100%;
        background: #D7D7D7;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #D7D7D7, #FFE4B5);
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #D7D7D7, #FFE4B5);
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    }

    .carousel-icon i {
        font-size: 5rem;
        color: rgba(255, 255, 255, 0.3);
    }

    .carousel-item i {
        font-size: 1.6rem;
        color: rgba(255, 255, 255, 0.3);
    }

    .t-card {
        padding: 1.8125rem 1.125rem;
        background-color: rgba(0, 0, 0, 0.5);
        border-radius: 1.25rem;
        color: #fff;
        height: auto;
    }

    .arrow-down {
        width: 0;
        height: 0;
        border-left: 1.5625rem solid transparent;
        border-right: 1.5625rem solid transparent;
        border-top: 1.25rem solid rgba(0, 0, 0, 0.5);
    }

    /*(----------Contact Section-end--------)*/


</style>


<section class="header d-flex flex-column justify-content-center align-content-center" >

    <!-- Section Intro -->
    <section class="header d-flex justify-content-start align-items-center ">
        <div class="container-fluid mb-lg-5">
            <div class="row">
                <div class="col-lg-7 text-lg-start text-center">
                    <h1>
                        <div class="h2 fw-bold" style="color:#FFEA00;"> Hãy gọi, nhắn tin, gửi mail...
                        </div>
                        <div class="h4 fw-bold" style="color: whitesmoke; font-style: italic;">Chúng tôi rất vui khi được hỗ trợ bạn với bất kì hình thức nào</div>
                    </h1>
                    <a href="#intro" class="btn btn-lg mb-2 rounded-right" style="background-color:#ff474c; color: whitesmoke;">Liên hệ ngay</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Intro End -->
</section>
<!--NavBar End-->

<!-- Contact Section Begin -->
<section class="contact-section spad mt-5 mb-5" id="intro">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="contact-info">
                    <h4 style=" color:#006600; font-weight: bolder; text-shadow: 1px 0px 1px rgb(10, 2, 32);">Liên Hệ SoccerStar</h4>
                    <div class="contact-address">
                        <div class="ca-widget">
                            <div class="cw-icon">
                                <Img src="{{ asset('frontend/img/icon-1.png') }}" alt="address">
                            </div>
                            <div class="cw-text">
                                <h5>Địa điểm</h5>
                                <p>590 Cách mạng tháng 8, Phường 11,<br> Quận 3, TP. Hồ Chí Minh</p>
                            </div>
                        </div>
                        <div class="ca-widget">
                            <div class="cw-icon">
                                <Img src="{{ asset('frontend/img/icon-2.png') }}" alt="phone">
                            </div>
                            <div class="cw-text">
                                <h5>Điện thoại</h5>
                                <p>024 7300 8855</p>
                            </div>
                        </div>
                        <div class="ca-widget">
                            <div class="cw-icon">
                                <Img src="{{ asset('frontend/img/icon-3.png') }}" alt="mail">
                            </div>
                            <div class="cw-text">
                                <h5>E-Mail</h5>
                                <p><a href="mailto:info@gmail.com?Subject=Hello!">info@gmail.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="contact-form">
                    <h4 style=" color:#006600; font-weight: bolder; text-shadow: 1px 0px 1px rgb(10, 2, 32);">Phản hồi với chúng tôi</h4>
                    @if(Session::has('thongbao'))
                    <p style="color: green; font-weight: bold; font-size: large;">{{Session::get('thongbao')}}</p>
                    @endif

                    <form action="{{ Route('customer.postContact') }}" method="post">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-lg-6">
                                <label>
                                    @if($errors->has('feedback_name'))
                                    <small>
                                        <strong class="text-danger">{{ $errors->first('feedback_name') }}</strong>
                                    </small>
                                    @endif
                                </label>

                                <input type="text" name="feedback_name" class="form-control" placeholder="Họ tên của bạn">
                            </div>
                            <div class="col-lg-6">
                                <label>
                                    @if($errors->has('feedback_email'))
                                    <small>
                                        <strong class="text-danger">{{ $errors->first('feedback_email') }}</strong>
                                    </small>
                                    @endif
                                </label>
                                <input type="email" name="feedback_email" class="form-control" placeholder="E-mail của bạn">

                            </div>
                        </div>
                        <div class="col-lg-12">

                            <label>
                                @if($errors->has('feedback_content'))
                                <small>
                                    <strong class="text-danger">{{ $errors->first('feedback_content') }}</strong>
                                </small>
                                @endif
                            </label>
                            <textarea name="feedback_content" id="" cols="30" rows="10" placeholder="Nội dung phản hồi với chúng tôi..." class="form-control"></textarea>
                            <button class="btn btn-primary" type="submit"><span></span> Gửi phản hồi</button>

                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Contact Section End -->

<!-- Map Section Begin -->
<div class="container">

    <div class="col-md-12" style="text-align: center;">

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.3193500366883!2d106.66408561394566!3d10.786834792314448!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ed2392c44df%3A0xd2ecb62e0d050fe9!2sFPT-Aptech%20Computer%20Education%20HCM!5e0!3m2!1sen!2s!4v1605550165904!5m2!1sen!2s" width="100%" height="300px" frameborder="1" style="border:1;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
</div>
<!-- Map Section End -->

<div class="container">


    <!-- Start DEMO HTML (Use the following code into your project)-->
    <section class="client pt-3 pb-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h1 class="display-7 fw-bold text-black">Phản hồi về chúng tôi</h1>
                    <hr class="bg-white mb-4 mt-0 d-inline-block mx-auto" style="width: 100px; height:3px;">

                </div>
            </div>
            <div class="row align-items-md-center text-white">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row p-4">
                                    <div class="t-card">
                                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                                        <p class="lh-lg">Cảm ơn những phản hồi của quý khách chúng tôi xin tiếp nhận xử lý và sẽ hoàn thiện hơn nữa, ngày càng phát triển lớn mạnh để đáp ứng tất cả nhu cầu của khách hàng .</p>
                                        <i class="fa fa-quote-right" aria-hidden="true"></i><br>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-1 pt-3"></div>
                                        <div class="col-sm-11">
                                            <div class="arrow-down d-none d-lg-block"></div>
                                            <h4><strong  style="color: black;">SoccerStar</strong></h4>
                                            <p class="testimonial_subtitle text-black"><span>Trân trọng</span><br>

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @foreach( $feedback as $h)
                            <div class="carousel-item ">
                                <div class="row p-4">
                                    <div class="t-card">
                                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                                        <p class="lh-lg">{{$h->feedback_content}}.</p>
                                        <i class="fa fa-quote-right" aria-hidden="true"></i><br>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-1 pt-3">
                                            <!-- @if($h->customer_id)
                                            
                                             
                                        <img src="{{('images/'.$h->customer_image) }}" alt="" class="rounded-circle img-responsive img-fluid">
                                        @else
                                        <img src="{{ asset('frontend/img/fb avt.png') }}" class="rounded-circle img-responsive img-fluid">
                                        @endif -->
                                        </div>
                                        <div class="col-sm-11">
                                            <div class="arrow-down d-none d-lg-block"></div>
                                            <h4><strong style="color: black;">{{$h->feedback_name}}</strong></h4>
                                            <p class="testimonial_subtitle text-black"><span>{{$h->feedback_date}}</span><br>

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @endforeach
                        </div>
                    </div>
                    <div class="controls push-right">
                        <a class="left fa fa-chevron-left text-black btn btn btn-outline-light" href="#carouselExampleCaptions" data-bs-slide="prev"></a>
                        <a class="right fa fa-chevron-right text-black btn btn btn-outline-light" href="#carouselExampleCaptions" data-bs-slide="next"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END EDMO HTML (Happy Coding!)-->

</div>

@endsection