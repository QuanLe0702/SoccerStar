@extends('admin.layout-admin')
@section('title','Chi tiết sản phẩm')

@section('content')
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
                <input type="radio" name="size" autocomplete="off" value="39">
                <span>40</span>
                <br>
              </label>
              <label class="btn btn-default text-center">
                <input type="radio" name="size" autocomplete="off" value="39">
                <span>41</span>
                <br>
              </label>
              <label class="btn btn-default text-center">
                <input type="radio" name="size" autocomplete="off" value="39">
                <span>42</span>
                <br>
              </label>
              <label class="btn btn-default text-center">
                <input type="radio" name="size" autocomplete="off" value="39">
                <span>43</span>
                <br>
              </label>
              <label class="btn btn-default text-center">
                <input type="radio" name="size" autocomplete="off" value="39">
                <span>44</span>
                <br>
              </label>
              <label class="btn btn-default text-center">
                <input type="radio" name="size" autocomplete="off" value="39">
                <span>45</span>
                <br>
              </label>
            </div>
            <div class="bg-gray py-2 px-3 mt-4" id="no_promotion">
              <h2 class="mb-0">
                {{ number_format($details->product_price) }}Đ
              </h2>
            </div>
            <div class="mt-4">
              <button class="btn btn-primary btn-lg btn-flat">
                <i class="fas fa-cart-plus fa-lg mr-2"></i>
                Add to Cart
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
            <form action="" id="comment">
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
              <button class="btn btn-primary float-end" style="margin-top: 10px;">Đăng</button>
          </div>
          </form>

        </div>
      </div>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
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

    .activated,
    .label:hover {
      background-color: #666;
      color: white;
    }
  </style>
</section>

@endsection
@section('script-section')
<script>
  $(document).ready(function() {
    $('.product-image-thumb').on('click', function () {
      var $image_element = $(this).find('img')
      $('.product-image').prop('src', $image_element.attr('src'))
      $('.product-image-thumb.active').removeClass('active')
      $(this).addClass('active')
    })
  })

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
        $('form').submit(function(event) {
          $.ajax({
            method: $(this).attr('method'),
            url: $(this).attr('action'),
            data: $(this).serialize(),
            // other AJAX settings goes here
            // ..
          }).done(function(response) {
            // Process the response here
          });
          event.preventDefault(); // <- avoid reloading
        });
      });
    </script>
@endsection