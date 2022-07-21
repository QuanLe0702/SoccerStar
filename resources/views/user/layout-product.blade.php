<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pr o:300,400,400i,700" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/hover.css') }}">
    <link rel="stylesheet" href="{{ asset('css/select2.css') }}">
    <link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>

    <!-- -->


    <!-- -->
    <style>
        .error {
            color: red;
        }

        #scrolltotop {
            position: fixed;
            right: 10px;
            bottom: 10px;
            height: 50px;
            width: 50px;
            border-radius: 50%;
            background: #e62739;
            box-shadow: 0 0 10px rgb(0, 0, 0, 0.25);
            color: whitesmoke;
            border: none;
            outline: none;
            cursor: pointer;
            display: none;
        }

        #scrolltotop:active {
            background: #cc2333;
        }
    </style>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:100,300,400,500,600,700,800, 800i, 900&display=swap');

        #products {
            position: relative;
            width: 1200px;
        }

        #products .card {
            width: 320px;
            height: 320px;
            border-radius: 20px;
            overflow: hidden;
        }

        #products .card:before {
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #1BBFE9;
            clip-path: circle(150px at 80% 20%);
            transition: 0.5s ease-in-out;
        }

        #products .card:hover:before {
            clip-path: circle(300px at 80% -20%);
        }


        #products .card:after {
            position: absolute;
            top: 30%;
            left: -20%;
            font-size: 12em;
            font-weight: 800;
            font-style: italic;
            color: rgba(255, 255, 255, 0.04);

        }

        #products .card .imgBx {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 1000;
            width: 100%;
            height: 100%;
            transition: .5s;
        }

        #products .card:hover .imgBx {
            top: 0%;
            transform: translateY(-25%);
        }

        #products .card .imgBx img {
            position: absolute;
            left: -1.5%;
            width: 330px;
            height: 320px;
            border-radius: 8%;
        }

        #products .card .contentBx {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 100px;
            text-align: center;
            transition: 1s;
            z-index: 90;
        }

        #products .card:hover .contentBx {
            height: 80px;
        }

        #products .card .contentBx small {
            position: relative;
            font-weight: 600;
            letter-spacing: 1px;
            color: #fff;
        }

        #products .card .contentBx .size {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 8px 20px;
            transition: .5s;
            opacity: 0;
            visibility: hidden;
        }

        #products .card .contentBx .size h3 {
            color: white;
            font-weight: 300;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-right: 10px;
        }

        #products .card .contentBx .size span {
            width: 26px;
            height: 26px;
            text-align: center;
            line-height: 26px;
            font-size: 14px;
            display: inline-block;
            color: #111;
            background: #fff;
            margin: 0 5px;
            transition: .5s;
            color: #111;
            border-radius: 4px;
            cursor: pointer;
        }

        .Buy {
            display: inline-block;
            padding: 10px 20px;
            background: #fff;
            border-radius: 4px;
            margin-top: 10px;
            text-decoration: none;
            font-weight: 600;
            color: #111;
            opacity: 0;
            transform: translateY(50px);
            transition: .5s;
        }

        .Buy {
            opacity: 1;
            transform: translateY(0px);
            transition-delay: .7s;
        }
    </style>
    <style>
        .filter {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .link {
            color: inherit;
            text-decoration: none;
        }


        /* Underline styles */
        .link {
            display: block;
            position: relative;
            padding: 0.2em 0;
        }

        /* Fade in */
        .link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 0.1em;
            background-color: hotpink;
            opacity: 0;
            transition: opacity 300ms, transform 300ms;
        }

        .link:hover::after,
        .link:focus::after {
            opacity: 1;
            transform: translate3d(0, 0.2em, 0);
        }

        /* Slide in */
        .label:nth-child(2) .link {
            overflow: hidden;
        }

        .label:nth-child(2) .link::after {
            opacity 1;
            transform: translate3d(-100%, 0, 0);
        }

        .label:nth-child(2) .link:hover::after,
        .label:nth-child(2) .link:focus::after {
            transform: translate3d(0, 0, 0);
        }

        /* Scale from center */
        .label:nth-child(3) .link::after {
            opacity 1;
            transform: scale(0);
            transform-origin: center;
        }

        .label:nth-child(3) .link:hover::after,
        .label:nth-child(3) .link:focus::after {
            transform: scale(1);
        }

        h1 {
            text-align: center;
        }

        .row {
            width: 1400px;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini" style="font-family:Arial, Helvetica, sans-serif">
    <div class="wrapper">

        <!-- Navbar -->
        @include('user.nav-bar-user')
        <!-- /.navbar -->
        <div class="row">
            <div class="col-md-12">
                <form>
                    {{ csrf_field() }}
                    <div class="float-end">
                        <label for="sort">Sắp xếp theo:</label>
                        <select name="sort" id="sort">
                            <option value=""></option>
                            <option value="{{ Request::url() }}?sortby=none">Mặc định</option>
                            <option value="{{ Request::url() }}?sortby=new">Mới nhất</option>
                            <option value="{{ Request::url() }}?sortby=highlight">Nổi bật</option>
                            <option value="{{ Request::url() }}?sortby=price_desc">Giá giảm dần</option>
                            <option value="{{ Request::url() }}?sortby=price_asc">Giá tăng dần</option>
                            <option value="{{ Request::url() }}?sortby=name_asc">Tên từ A đến Z</option>
                            <option value="{{ Request::url() }}?sortby=name_desc">Tên từ Z đến A</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>
        <div class="container-flex" style="padding-top: 75px;">
            <div class="row ">
                <div class="content" style="width:200px; padding-top: 30px;">
                    <div class="card-body">
                        <div class="card-info card-outline">
                            <div class="card card card-body" style="width:230px;">
                                <b>Loại sản phẩm:</b>
                                <ul class="filter" style="list-style-type:none,">
                                    @foreach($category as $c)
                                    <li class="label"><a class="link" href="{{Route('user.showcategory',$c->id)}}">
                                            {{ $c->product_type_name }}
                                        </a></li>
                                    @endforeach
                                </ul>
                                <hr>
                                <ul class="filter" style="list-style-type:none">
                                    <b>Thương hiệu: </b>
                                    @foreach($brand as $b)
                                    <li class="label"><a class="link" href="{{Route('user.showbrand',$b->id)}}">
                                            {{ $b->brand_name }}
                                        </a></li>
                                    @endforeach
                                </ul>
                                <hr>
                                <b>Lọc theo giá</b>
                                <ul class="filter" style="list-style-type:none">
                                    <li class="label"><a class="link" href="{{Route('user.showprice',1)}}">
                                            200.000 - 500.000Đ
                                        </a></li>
                                </ul>
                                <ul class="filter" style="list-style-type:none">
                                    <li class="label"><a class="link" href="{{Route('user.showprice',2)}}">
                                            500.000 - 700.000Đ
                                        </a></li>
                                </ul>
                                <ul class="filter" style="list-style-type:none">
                                    <li class="label"><a class="link" href="{{Route('user.showprice',3)}}">
                                            700.000 - 1.000.000Đ
                                        </a></li>
                                </ul>
                                <ul class="filter" style="list-style-type:none">
                                    <li class="label"><a class="link" href="{{Route('user.showprice',4)}}">
                                            1.000.000 - 1.500.000Đ
                                        </a></li>
                                </ul>
                                <ul class="filter" style="list-style-type:none">
                                    <li class="label"><a class="link" href="{{Route('user.showprice',5)}}">
                                            1.500.000 - 2.000.000Đ
                                        </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content -->
                @yield('content')
                <!--/.content  -->
            </div>
        </div>
    </div>
    <!-- footer -->
    @include('user.footer-user')
    <!-- /.footer -->
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"> </script>
<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script> -->
<!-- AdminLTE App -->
<script src="{{ asset('js/adminlte.min.js') }}"></script>
<!-- page script -->

@yield('script-section')
<script>
    $(document).ready(function() {
        $('#sort').on('change', function() {
            var url = $(this).val();
            if (url) {
                window.location = url;
            }
            return false;
        })
    })
</script>

</html>