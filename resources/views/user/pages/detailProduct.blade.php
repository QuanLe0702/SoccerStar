<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Thông tin sản phẩm</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer">
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('backend/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pr o:300,400,400i,700" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="{{ asset('css/hover.css') }}">
  <link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>


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
    @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

    #rating {
      border: none;
      float: left;
    }

    #rating>input {
      display: none;
    }

    #rating>label:before {
      margin: 5px;
      font-size: 1.25em;
      font-family: FontAwesome;
      display: inline-block;
      content: "\f005";
    }

    #rating>label {
      color: #ddd;
      float: right;
    }

    #rating>input:checked~label,
    #rating:not(:checked)>label:hover,
    #rating:not(:checked)>label:hover~label {
      color: #FFD700;
    }

    #rating>input:checked+label:hover,
    #rating>input:checked~label:hover,
    #rating>label:hover~input:checked~label,
    #rating>input:checked~label:hover~label {
      color: #FFED85;
    }

    .activated {
      background-color: #666;
      color: white;
    }
  </style>
</head>

<body class="hold-transition sidebar-mini" style="font-family:Arial, Helvetica, sans-serif">
  <div class="wrapper">
    @include('user.nav-bar-user')

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <div class="col-12" style="width: fit-content;height:fit-content;">
                <!-- -->
                <img style="width: 600px;height: 450px; padding-left:100px" src="{{ url('images/'.$details->product_image) }}" class="product-image" alt="Product Image" />
              </div>
              <div class="col-12 product-image-thumbs">
                <div class="product-image-thumb active"><img src="{{ url('images/'.$details->product_image) }}" />
                </div>
                @foreach($slider as $s)
                <div class="product-image-thumb"><img src="{{ url('images/'.$s->slider_image) }}" alt="Product Image"></div>
                @endforeach
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <h3 class="my-3">{{ $details->product_name }}</h3>
              <h6> Ngày phát hành: {{ date('d/m/Y',strtotime($details->product_date)) }}</h6>
              <p>Loại sản phẩm: {{ $details->product_type->product_type_name }} | Thương hiệu: {{ $details->brand->brand_name }}</p>

              <hr>
              <form action="">

                <h4 class="mt-3">Size <small>Please select one</small></h4>
                <div id="choose_size">
                  <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-default text-center activated">
                      <input type="radio" name="size" autocomplete="off" value="35">
                      <span>35</span>
                      <br>
                    </label>

                    <label class="btn btn-default text-center">
                      <input type="radio" name="size" autocomplete="off" value="36">
                      <span>36</span>
                      <br>
                    </label>

                    <label class="btn btn-default text-center">
                      <input type="radio" name="size" autocomplete="off" value="37">
                      <span>37</span>
                      <br>
                    </label>

                    <label class="btn btn-default text-center">
                      <input type="radio" name="size" autocomplete="off" value="38">
                      <span>38</span>
                      <br>
                    </label>

                    <label class="btn btn-default text-center">
                      <input type="radio" name="size" autocomplete="off" value="38.5">
                      <span>38.5</span>
                      <br>
                    </label>
                    <label class="btn btn-default text-center">
                      <input type="radio" name="size" autocomplete="off" value="39">
                      <span>39</span>
                      <br>
                    </label>
                    <label class="btn btn-default text-center">
                      <input type="radio" name="size" autocomplete="off" value="40">
                      <span>40</span>
                      <br>
                    </label>
                    <label class="btn btn-default text-center">
                      <input type="radio" name="size" autocomplete="off" value="41">
                      <span>41</span>
                      <br>
                    </label>
                    <label class="btn btn-default text-center">
                      <input type="radio" name="size" autocomplete="off" value="42">
                      <span>42</span>
                      <br>
                    </label>
                    <label class="btn btn-default text-center">
                      <input type="radio" name="size" autocomplete="off" value="43">
                      <span>43</span>
                      <br>
                    </label>
                    <label class="btn btn-default text-center">
                      <input type="radio" name="size" autocomplete="off" value="44">
                      <span>44</span>
                      <br>
                    </label>
                  </div>
                  <div class="bg-gray py-2 px-3 mt-4" id="no_promotion">
                    <h2 class="mb-0">
                      {{ number_format($details->product_price) }}Đ
                    </h2>
                  </div>

              </form>
              <form action="{{Route('checkout.create')}}">
                <div class="mt-4">
                  <button type="submit" class="btn btn-primary btn-lg btn-flat">
                    <i class="fas fa-cart-plus fa-lg mr-2"></i>
                    CheckOut
                  </button>
                </div>
              </form>
            </div>
            <div style="padding-top: 10px;">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="product-desc-tab" data-bs-toggle="tab" data-bs-target="#product-desc" type="button" role="tab" aria-controls="roduct-desc-tab" aria-selected="true">Description</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="product-comments-tab" data-bs-toggle="tab" data-bs-target="#product-comments" type="button" role="tab" aria-controls="product-comments-tab" aria-selected="false">Comments</button>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">{{ $details->product_description }}</div>
                <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab">
                  @foreach($comment as $c)
                  <div class="container">
                    <div class="row  d-flex">
                      <div class="col-md-8">
                        <div class="card">
                          <div class="d-flex justify-content-between align-items-center">
                            <div class="user d-flex flex-row align-items-center">
                              <img src="{{url('images/'.$c->customers->customer_image)}}" width="30" class="user-img rounded-circle mr-2">
                              <span><small class="font-weight-bold text-primary">{{ $c->customers->customer_name }}</small> <small class="font-weight-bold">{{ $c->comment_content }}</small></span>
                            </div>
                            <small>
                              <div class="icons">
                                {{$c->comment_point}}<i class="fa fa-star text-warning"></i>&emsp;{{ date('j/m/Y H:i:s A', strtotime($c->comment_date)) }}
                              </div>
                            </small>
                          </div>
                          <div class="action d-flex justify-content-between mt-2 align-items-center">
                            @if($c->comment_reply!=null)
                            <div class="reply px-4">
                              <small class="font-weight-bold">&emsp;&emsp;SoccerStar:{{ $c->comment_reply }}</small>
                            </div>
                            @endif
                          </div>

                        </div>
                      </div>
                    </div>
                    @endforeach
                    @if(Session::has('customer_id'))
                    <form action="{{ Route('user.comment') }}" id="comment">
                      <input type="hidden" name="product_id" value="{{ $details->id }}">
                      <input type="text" class="form-control" name="comment_content" placeholder="Comment here...">
                      <div id="rating">
                        <input type="radio" id="star5" name="comment_point" value="5" />
                        <label class="full" for="star5"></label>

                        <input type="radio" id="star4" name="comment_point" value="4" />
                        <label class="full" for="star4"></label>

                        <input type="radio" id="star3" name="comment_point" value="3" />
                        <label class="full" for="star3"></label>

                        <input type="radio" id="star2" name="comment_point" value="2" />
                        <label class="full" for="star2"></label>
                        <input type="radio" id="star1" name="comment_point" value="1" />
                        <label class="full" for="star1"></label>
                      </div>
                      <button type="submit" class="btn btn-primary float-end" style="margin-top: 10px;">Đăng</button>
                  </div>
                  </form>
                  @else
                  <p>Bạn cần đăng nhập để tiếp tục comment</p>
                  <a href="{{ route('customer.login') }}"><button class="btn btn-primary">Đăng nhập</button></a>
                  @endif
                </div>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

    </section>

    @include('user.footer-user')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"> </script>
    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script> -->
    <!-- AdminLTE App -->
    <script src="{{ asset('js/adminlte.min.js') }}"></script>
    <!-- page script -->

    <script>
      let mybutton = document.getElementById("scrolltotop");

      window.onscroll = function() {
        scrollFunction();
      };

      function scrollFunction() {
        if (
          document.body.scrollTop > 20 ||
          document.documentElement.scrollTop > 20
        ) {
          mybutton.style.display = "block";
        } else {
          mybutton.style.display = "none";
        }
      }
      mybutton.addEventListener("click", backToTop);

      function backToTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

    <script>
      $(document).ready(function() {
        $('.product-image-thumb').on('click', function() {
          var $image_element = $(this).find('img')
          $('.product-image').prop('src', $image_element.attr('src'))
          $('.product-image-thumb.active').removeClass('active')
          $(this).addClass('active')
        })
      })
      // var highlight = '{{ $details->product_highlight }}';
      var header = document.getElementById("choose_size");
      var btns = header.getElementsByClassName("btn-default");
      for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
          var current = document.getElementsByClassName("activated");
          current[0].className = current[0].className.replace("activated", "");
          this.className += " activated";
        });
      }
      $(document).ready(function() {
        $('#comment').submit(function(event) {
          $.ajax({
            method: $(this).attr('method'),
            url: $(this).attr('action'),
            data: $(this).serialize(),
          }).done(function(response) {});
          alert('comment thành công')
          event.preventDefault();
        });
      });
    </script>

</html>