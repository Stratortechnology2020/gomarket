
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
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
<style type="text/css"> 
     
 div {
     display: block;
     position: relative;
     -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
     box-sizing: border-box
 }

 .bbb_viewed {
     padding-top: 51px;
     padding-bottom: 60px;
     background: #eff6fa
 }

 .bbb_main_container {
     background-color: #fff;
     padding: 11px
 }

 .bbb_viewed_title_container {
     border-bottom: solid 1px #dadada
 }

 .bbb_viewed_title {
     margin-bottom: 16px;
     margin-top: 8px
 }

 .bbb_viewed_nav_container {
     position: absolute;
     right: -5px;
     bottom: 14px
 }

 .bbb_viewed_nav {
     display: inline-block;
     cursor: pointer
 }

 .bbb_viewed_nav i {
     color: #dadada;
     font-size: 18px;
     padding: 5px;
     -webkit-transition: all 200ms ease;
     -moz-transition: all 200ms ease;
     -ms-transition: all 200ms ease;
     -o-transition: all 200ms ease;
     transition: all 200ms ease
 }

 .bbb_viewed_nav:hover i {
     color: #606264
 }

 .bbb_viewed_prev {
     margin-right: 15px
 }

 .bbb_viewed_slider_container {
     padding-top: 13px
 }

 .bbb_viewed_item {
     width: 100%;
     background: #FFFFFF;
     border-radius: 2px;
     padding-top: 25px;
     padding-bottom: 25px;
     padding-left: 30px;
     padding-right: 30px
 }

 .bbb_viewed_image {
     width: 150px;
     height: 150px
 }

 .bbb_viewed_image img {
     display: block;
     max-width: 100%
 }

 .bbb_viewed_content {
     width: 100%;
     margin-top: 25px
 }

 .bbb_viewed_price {
     font-size: 16px;
     color: #000000;
     font-weight: 500
 }

 .bbb_viewed_item.discount .bbb_viewed_price {
     color: #df3b3b
 }

 .bbb_viewed_price span {
     position: relative;
     font-size: 12px;
     font-weight: 400;
     color: rgba(0, 0, 0, 0.6);
     margin-left: 8px
 }

 .bbb_viewed_price span::after {
     display: block;
     position: absolute;
     top: 6px;
     left: -2px;
     width: calc(100% + 4px);
     height: 1px;
     background: #8d8d8d;
     content: ''
 }

 .bbb_viewed_name {
     margin-top: 3px
 }

 .bbb_viewed_name a {
     font-size: 14px;
     color: #000000;
     -webkit-transition: all 200ms ease;
     -moz-transition: all 200ms ease;
     -ms-transition: all 200ms ease;
     -o-transition: all 200ms ease;
     transition: all 200ms ease
 }

 .bbb_viewed_name a:hover {
     color: #0e8ce4
 }

 .item_marks {
     position: absolute;
     top: 18px;
     left: 18px
 }

 .item_mark {
     display: none;
     width: 36px;
     height: 36px;
     border-radius: 50%;
     color: #FFFFFF;
     font-size: 10px;
     font-weight: 500;
     line-height: 36px;
     text-align: center
 }

 .item_discount {
     background: #df3b3b;
     margin-right: 5px
 }

 .item_new {
     background: #0e8ce4
 }

 .bbb_viewed_item.discount .item_discount {
     display: inline-block
 }

 .bbb_viewed_item.is_new .item_new {
     display: inline-block
 }</style>
</head>


<body>
    @include("grocery.header")
    
    <section>
        
    </section>
    <section class="section-pagetop bg">
            <div class="container">
            <div class="row" style="margin-bottom: 30px;">
                <div class="col">
                    <div class="bbb_main_container">
                    <div class="bbb_viewed_title_container">
                        <h3 class="bbb_viewed_title">Shops</h3>
                        <div class="bbb_viewed_nav_container">
                            <div class="bbb_viewed_nav bbb_viewed_prev"><i class="fa fa-arrow-left"></i></div>
                            <div class="bbb_viewed_nav bbb_viewed_next"><i class="fa fa-arrow-right"></i></div>
                        </div>
                    </div>
                    <div class="bbb_viewed_slider_container">
                        <div class="owl-carousel owl-theme bbb_viewed_slider">
                            @foreach($vendorshop as $vendorshopval)
                            <div class="owl-item">
                                <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="bbb_viewed_image"><img src="{{$vendorshopval->vendor_logo}}" alt=""></div>
                                    <div class="bbb_viewed_content text-center">
                                        <!-- <div class="bbb_viewed_price">₹12225<span>₹13300</span></div> -->
                                        <div class="bbb_viewed_name"><a href="#">{{$vendorshopval->vendor_name}}</a></div>
                                    </div>
                                    <ul class="item_marks">
                                        <li class="item_mark item_discount">-25%</li>
                                        <li class="item_mark item_new">new</li>
                                    </ul>
                                </div>
                            </div>
                            @endforeach
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
                <div class="row ">
                    <div class="col-auto d-none d-lg-block">
                        <img src="{{ $vendorshopdetails->vendor_logo }}" alt="grocery-shop-bangladesh"
                             class="bd-placeholder-img" width="150" height="150">
                    </div>
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">Dhaka, Mirpur 10</strong>
                        <h3 class="mb-0">{{$vendorshopdetails->vendor_name}}</h3>
                        <div class="mb-1 text-bold">{{$vendorshopdetails->vendor_loc}}</div>
                        <div class="mb-1 text-muted">{{$vendorshopdetails->vendor_email}}</div>
                         <div class="mb-1 text-muted">{{$vendorshopdetails->vendor_phone }}</div>
                        <div class="mb-1 text-muted">Opens at {{$vendorshopdetails->opening_time}} - Closed at {{$vendorshopdetails->closing_time}} </div>
                        <p class="card-text mb-auto">A supermarket is a self-service shop offering a wide variety of food, beverages and household produc...</p>
                    </div>

                </div>
            </div> <!-- container //  -->
    </section>

    <section class="section-content padding-y">
        <div class="container">

            <div class="row">
                 <aside class="col-md-3">
                    <form action="http://demo.food-express.xyz/grocery-shop-bangladesh/products/search" class="search pb-3" method="GET">
                        <div class="card">
                            <article class="filter-group">
                                <div class="filter-content collapse show">
                                    <div class="card-body">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Product Search" name="name" value="">
                                        </div>
                                    </div> <!-- card-body.// -->
                                </div>
                            </article> <!-- filter-group  .// -->
                            <article class="filter-group">
                                <header class="card-header">
                                    <h6 class="title">Categories </h6>
                                </header>
                                <div class="filter-content collapse show">
                                    <div class="card-body">
                                                                    <label class="custom-control custom-checkbox">
                                                <input  type="checkbox" class="custom-control-input"
                                                       name="categories[]" value="9"
                                                       >
                                                <span class="custom-control-label">
                                                    Drinks
                                                </span>
                                            </label>
                                                                    <label class="custom-control custom-checkbox">
                                                <input  type="checkbox" class="custom-control-input"
                                                       name="categories[]" value="24"
                                                       >
                                                <span class="custom-control-label">
                                                    Fruit Foods
                                                </span>
                                            </label>
                                                                    <label class="custom-control custom-checkbox">
                                                <input  type="checkbox" class="custom-control-input"
                                                       name="categories[]" value="32"
                                                       >
                                                <span class="custom-control-label">
                                                    Tea
                                                </span>
                                            </label>
                                                                    <label class="custom-control custom-checkbox">
                                                <input  type="checkbox" class="custom-control-input"
                                                       name="categories[]" value="33"
                                                       >
                                                <span class="custom-control-label">
                                                    Vegetables
                                                </span>
                                            </label>
                                                                    <label class="custom-control custom-checkbox">
                                                <input  type="checkbox" class="custom-control-input"
                                                       name="categories[]" value="34"
                                                       >
                                                <span class="custom-control-label">
                                                    Butcher
                                                </span>
                                            </label>
                                                                <button class="btn btn-block btn-primary" type="submit">Apply</button>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </form>
</aside>
 
                <main class="col-md-9">

                    <header class="border-bottom mb-4 pb-3">
                        <div class="form-inline">
                            <span class="mr-md-auto">10 Items found </span>
                        </div>
                    </header>

                    <div class="row">
                        @foreach($products as $productsval)
                        <div class="col-md-3 width-resize">
                        <a href="{{ route('product_detail',$productsval->product_id) }}" class="card card-product-grid card-padding-css">
                        <div class="img-wrap shop">
                        <img src="{{$productsval->varient_image}} ">
                        </div>
                        <div class="info-wrap text-center ">
                        <p class="title text-truncate">{{$productsval->product_name}}</p>
                                                    <div class="star-css"></div>

                        <div class="price-wrap mt-2 text-center">
                        <del class="price price-old">Rs.{{$productsval->strick_price}}</del>
                        </div>

                        <div class="price-wrap mt-2 text-center">
                        <span class="price">Rs.{{$productsval->price}}</span>
                        </div>

                                            </div>
                        </a> <!-- card // -->
                        </div>
                        @endforeach
                                                  
                    </div>
                    <nav class="mt-4" aria-label="Page navigation sample">
                        <nav>
        <ul class="pagination">
            
                            <li class="page-item disabled" aria-disabled="true" aria-label="&laquo; Previous">
                    <span class="page-link" aria-hidden="true">&lsaquo;</span>
                </li>
            
            
                            
                
                
                                                                                        <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                                                                                                <li class="page-item"><a class="page-link" href="search4658.html?page=2">2</a></li>
                                                                        
            
                            <li class="page-item">
                    <a class="page-link" href="search4658.html?page=2" rel="next" aria-label="Next &raquo;">&rsaquo;</a>
                </li>
                    </ul>
    </nav>

                    </nav>
                </main> <!-- col.// -->

            </div>

        </div>
    </section>


<!-- ========================= SECTION CONTENT ========================= -->


    <!-- ========================= FOOTER ========================= -->
@include("grocery.footer")
<!-- ========================= FOOTER END // ========================= -->

<!-- JS Libraies -->



<script src="{{ url('assets/modules/izitoast/dist/js/iziToast.min.js') }}"></script>
<!-- custom javascript -->

<script src="{{ url('frontend/js/script.js') }}" type="text/javascript"></script>

<script type="text/javascript">
    
    </script>
<script>
   $(document).ready(function(){
    
       $('.ndiv99').hover(function(){     
           $('.mdiv00').toggle();    
         
       });
     
   });
</script>
<script type="text/javascript">
  
$(document).ready(function()
{


if($('.bbb_viewed_slider').length)
{
var viewedSlider = $('.bbb_viewed_slider');

viewedSlider.owlCarousel(
{
loop:true,
margin:30,
autoplay:true,
autoplayTimeout:6000,
nav:false,
dots:false,
responsive:
{
0:{items:1},
575:{items:2},
768:{items:3},
991:{items:4},
1199:{items:6}
}
});

if($('.bbb_viewed_prev').length)
{
var prev = $('.bbb_viewed_prev');
prev.on('click', function()
{
viewedSlider.trigger('prev.owl.carousel');
});
}

if($('.bbb_viewed_next').length)
{
var next = $('.bbb_viewed_next');
next.on('click', function()
{
viewedSlider.trigger('next.owl.carousel');
});
}
}


});
</script>
    </body>

<!-- Mirrored from demo.food-express.xyz/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Apr 2021 09:30:16 GMT -->
</html>
