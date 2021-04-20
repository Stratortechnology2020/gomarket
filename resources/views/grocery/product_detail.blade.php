<!DOCTYPE HTML>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="pragma" content="no-cache" />
    <meta http-equiv="cache-control" content="max-age=604800" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>GoMarket</title>
    <meta content="" name="descriptison">
      <meta content="" name="keywords">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link href="{{ url('frontend/images/favicon.ico') }}" rel="shortcut icon" type="image/x-icon">

    <!-- jQuery -->
    <script src="{{ url('frontend/js/jquery-2.0.0.min.js') }}" type="text/javascript"></script>

    <!-- Bootstrap4 files-->
    <script src="{{ url('frontend/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
    <link href="{{ url('frontend/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />

    <!-- Font awesome 5 -->
    <link href="{{ url('frontend/fonts/fontawesome/css/all.min.css') }}" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('assets/modules/izitoast/dist/css/iziToast.min.css') }}">
    
    <!-- custom style -->
    <link href="{{ url('frontend/css/ui.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ url('frontend/css/responsive.css') }}" rel="stylesheet" media="only screen and (max-width: 1200px)" />
    <link href="{{ url('frontend/css/custom.css') }}" rel="stylesheet" type="text/css"/>

        <link href="{{ url('frontend/plugins/slickslider/slick.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('frontend/plugins/slickslider/slick-theme.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<style type="text/css">
    .personal_input
      {
      height: 40px;border:0;border-bottom: 2px solid #5F5F5F;border-radius: 0;margin-top: -15px;outline: none;width: 100%;  
      }
      .personal_label
      {
      font-size: 16px;font-weight: 500;color: black; 
      }
      .personal_div2
      {
      padding-left: 29px;padding-right: 29px; margin-top: 20px;
      }
      .edit_radio_butt {
        height: 20px;
        width: 6%;
        position: relative;
        top: 4px;
      }
      @media only screen and (max-width: 768px) {
        .edit_radio_butt {
          height: 20px;
          width: 6%;
          position: relative;
          top: 4px;
          margin-left: 8px;
          right: 5px;
        }
        .edit_button23 {
          width: 86% !important;
        }
      }
      .edit_button23 {
        background-color: #1461C9;
        color: white;
        height: 55px;
        width: 30%;
        border-radius: 5px;
        border: 0;
        font-weight: 500;
        margin-top: 15px;
        font-size: 17px;
        margin-bottom: 20px;
        margin-top: 30px;
        letter-spacing: .5px;
      }
</style>

<body>
    @include("grocery.header")

<section class="section-content padding-y bg">
        <div class="container">
            <div class="card">
                <form action="http://demo.food-express.xyz/cart" method="POST">
                    <input type="hidden" name="_token" value="x5nrP1HHRx0YwgHux87EQjjjzlnhWQ59fnXCVueo">                    <div class="row no-gutters">
                        <aside class="col-sm-6 border-right">
                            <article class="gallery-wrap">
                                <div class="img-big-wrap">
                                    <a href="#">
                                        <img id="mainthumnail" src="{{asset($products->varient_image)}}">
                                    </a>
                                </div> <!-- img-big-wrap.// -->
                                                                    <div class="thumbs-wrap">
                                                                      @foreach($productlists as $key => $productlist) 
                                                                      @if($key < 8)
                                                                                    <a href="#" class="item-thumb"> <img
                                                    onclick="event.preventDefault();myFunction(this);"
                                                    src="{{ asset($productlist->varient_image) }}"></a>
                                                             @endif                       
                                                    @endforeach
                                                                            </div>
                                                            </article>
                        </aside>
                        <main class="col-sm-6">
                            <article class="content-body">
                                <h3 class="title">{{$products->product_name}}</h3>
                                                                <div class="mb-3">
                                    <a href="../../grocery-shop-bangladesh.html"
                                       class="text-success"> <i class="fas fa-store"></i>
                                        Grocery shop  </a>
                                </div>
                                <p><h1 itemprop="name" style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: none; padding: 0px; font-size: 20px; line-height: 26px; font-weight: normal; text-transform: capitalize; font-family: Roboto, Helvetica, Arial, sans-serif;">{{$products->product_name}}&nbsp;</h1> </p>
                                
                                                                <input type="hidden" value="20" name="shop_product_id">

                                <div class="row mt-3 align-items-center">
                                    <div class="col">
                                        <span class="price h4" id="productPrice" data-unit-price="170" data-currency-code="$">Rs. {{$products->price}}</span>
                                    </div> <!-- col.// -->
                                    <div class="col text-right">
                                      <?php if(session('user_id') != '') { ?>
                                        <button type="button"  class="btn btn-primary" onclick="addtobag('{{ $products->vendor_id }}','<?php echo session('user_id')?>','{{ $products->product_id }}',1,1,'{{$products->varient_id}}')"><span class="text">Add to cart</span><i class="icon fa fa-shopping-cart"></i>  
                                        </button>
                                         <?php }else { ?>
                                        <button class="btn btn-primary" onclick="addtobag(0,0,0,0)">Add to cart</button>
                                        <?php }?>
                                    </div> <!-- col.// -->
                                </div> <!-- row.// -->

                            </article> <!-- product-info-aside .// -->
                        </main> <!-- col.// -->
                    </div> <!-- row.// -->
                </form>
            </div> <!-- card.// -->
            <br>
                        <div class="card card-body">
                <div class="row">
                                            <!-- col.// -->
                                 @foreach($productlists as $key => $productlist) 
                                                                      @if($key < 8)
                                            <div class="col-md-3">
                            <a href="cabbage-drumhead.html">
                                <figure class="itemside mb-4">
                                    <div class="aside"><img src="{{ asset($productlist->varient_image) }}" style="width:100px;height:100px;"></div>
                                    <figcaption class="info align-self-center">
                                        <a href="cabbage-drumhead.html" class="title">{{$productlist->product_name}}</a>
                                        <a href="cabbage-drumhead.html" class="btn btn-light text-primary btn-sm"> Rs. {{$productlist->price}} </a>
                                    </figcaption>
                                </figure>
                            </a>
                        </div> <!-- col.// -->
                         @endif                       
                                                    @endforeach
                       <!-- col.// -->
                                    </div> <!-- row.// -->
            </div> <!-- card // -->
                        <br>

                    </div>
    </section>

    <!-- ========================= FOOTER ========================= -->
@include("grocery.footer")
<!-- ========================= FOOTER END // ========================= -->

<!-- JS Libraies -->
<script src="{{ url('frontend/plugins/slickslider/slick.min.js') }}"></script>
<script src="{{ url('assets/modules/izitoast/dist/js/iziToast.min.js') }}"></script>
<!-- custom javascript -->

<script src="{{ url('frontend/js/script.js') }}" type="text/javascript"></script>

<script type="text/javascript">
    
    </script>
<script type="text/javascript">
  function addtobag(storeid,user_id,pid,count,qty,varient_id)
   { 
         if(user_id == 0)
         {
            alert('Please Login !!!');
         }else
         {
            
            // var qty = $('.inner_two_span'+count).html();
            // var varient = $('#varient_id'+count+'').val();
            
            $.ajaxSetup({
                     headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                     }
            });
            $.ajax({
               url: "{{ route('addtobag') }}",
               type:"POST",
               data:{store_id:storeid,user_id: user_id,pid:pid,qty:qty,varient_id:varient_id},
               success: function(result){
                  if(result == 1)
                  {
                     alert('Product added to cart successfully');
                      location.reload();
                  }else if(result == 2){
                     alert('Product allready added to cart ');
                  }else
                  {
                     alert('Product not added to cart');
                  }

               }
            });
         }
         
   }
</script>



    </body>

<!-- Mirrored from demo.food-express.xyz/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Apr 2021 09:30:16 GMT -->
</html>
