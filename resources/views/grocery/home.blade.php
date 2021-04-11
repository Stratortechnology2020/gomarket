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

<body>
    @include("grocery.header")
    
<!-- ========================= SECTION INTRO ========================= -->
<section class="section-intro padding-y-sm">
    <div class="container">
        <div class="main-banner slider-banner-slick">
            <a href="324324.html">
                <div class="item-slide">
                    <img src="{{ url('storage/104/e788add7dfd643cb9ee1649b5f154ba1-1188-300.jpg_desktop.jpg') }}" class="img-fluid rounded">
                    <div class="carousel-caption d-none d-md-block">
                        <h4>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,..</h4>
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,
                        </p>
                                                            </div>
                                            </div>
                </a>
                           
                    </div>
    </div> <!-- container //  -->
</section>
<!-- ========================= SECTION INTRO END// ========================= -->


<!-- ========================= SECTION FEATURE ========================= -->
<section class="section-content padding-y-sm">
    <div class="container">
        <article class="card card-body">
            <div class="row">
                <div class="col-md-4">
                    <figure class="item-feature">
                        <span class="text-primary"><i
                                class="fa fa-2x fa-truck"></i></span>
                        <figcaption class="pt-3">
                            <h5 class="title">Fast delivery</h5>
                            <p>Fast Deliver is a fast growing and promising courier and parcel service in Bangladesh.
                            </p>
                        </figcaption>
                    </figure> <!-- iconbox // -->
                </div><!-- col // -->
                <div class="col-md-4">
                    <figure class="item-feature">
                        <span class="text-primary"><i
                                class="fa fa-2x fa-university"></i></span>
                        <figcaption class="pt-3">
                            <h5 class="title">Creative Strategy</h5>
                            <p>A creative strategy is made to help explain to all concerned</p>
                        </figcaption>
                    </figure> <!-- iconbox // -->
                </div><!-- col // -->
                <div class="col-md-4">
                    <figure class="item-feature">
                        <span class="text-primary"><i
                                class="fa fa-2x fa-lock"></i></span>
                        <figcaption class="pt-3">
                            <h5 class="title">High secured</h5>
                            <p>with additional security features
                            </p>
                        </figcaption>
                    </figure> <!-- iconbox // -->
                </div> <!-- col // -->
            </div>
        </article>

    </div> <!-- container .//  -->
</section>


<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content">
    <div class="container">
        <header class="section-heading">
            <h3 class="section-title">Best Stores</h3>
        </header>
        <div class="row">
            <?php foreach($vendordata as $vendordata){ ?>
                <div class="col-md-4" style="max-width: 24.333333%;">
                        <a href="shop/grocery-shop-bangladesh.html" class="card card-product-grid card-padding-css">
                            <div class="img-wrap home">
                                <img src="{{ $vendordata->category_image }}">
                            </div>
                            <div class="info-wrap text-center ">
                                <p class="title text-truncate">{{  $vendordata->category_name }}</p>
                            </div>
                        </a> <!-- card // -->
                </div>
                <?php } ?>
            </div>
    </div>
</section>

<section class="section-content">
    <div class="container">
        <header class="section-heading">
            <h3 class="section-title">Best Selling Categories</h3>
        </header>
        <div class="row">
                            <div class="col-md-3 width-resize">
                    <a href="search.html"
                        class="card card-product-grid card-padding-css">
                        <div class="img-wrap home">
                            <img src="{{ url('images/category1.jpg') }}">
                        </div>
                        <div class="info-wrap text-center ">
                            <p class="title text-truncate">Butcher</p>
                        </div>
                    </a> <!-- card // -->
                </div>
                            <div class="col-md-3 width-resize">
                    <a href="search.html"
                        class="card card-product-grid card-padding-css">
                        <div class="img-wrap home">
                            <img src="{{ url('images/category2.jpg') }}">
                        </div>
                        <div class="info-wrap text-center ">
                            <p class="title text-truncate">Fruit Foods</p>
                        </div>
                    </a> <!-- card // -->
                </div>
                            <div class="col-md-3 width-resize">
                    <a href="search.html"
                        class="card card-product-grid card-padding-css">
                        <div class="img-wrap home">
                           <img src="{{ url('images/category3.jpg') }}">
                        </div>
                        <div class="info-wrap text-center ">
                            <p class="title text-truncate">Camera</p>
                        </div>
                    </a> <!-- card // -->
                </div>
                            <div class="col-md-3 width-resize">
                    <a href="search.html"
                        class="card card-product-grid card-padding-css">
                        <div class="img-wrap home">
                            <img src="{{ url('images/category4.jpg') }}">
                        </div>
                        <div class="info-wrap text-center ">
                            <p class="title text-truncate">Headphone</p>
                        </div>
                    </a> <!-- card // -->
                </div>
                            <div class="col-md-3 width-resize">
                    <a href="search.html"
                        class="card card-product-grid card-padding-css">
                        <div class="img-wrap home">
                            <img src="{{ url('images/category5.png') }}">
                        </div>
                        <div class="info-wrap text-center ">
                            <p class="title text-truncate">Laptop</p>
                        </div>
                    </a> <!-- card // -->
                </div>
                    </div>
    </div>
</section>



<section class="section-content">
    <div class="container">
        <header class="section-heading">
            <h3 class="section-title">Best Selling Products</h3>
        </header>
        <div class="row">
                        <div class="col-md-3 width-resize">
                <a href="shop/grocery-shop-bangladesh/product/mirzapore-tea-bag"
                    class="card card-product-grid card-padding-css">
                    <div class="img-wrap home">
                        <img src="{{ url('storage/112/60339823135a1_download-(13).jpg') }}">
                    </div>
                    <div class="info-wrap text-center">
                        <p class="title text-truncate mb-2">Mirzapore Tea Bag</p>
                                                <div class="star-css"></div>
                        
                                                    <div class="price-wrap mt-2 text-center">
                                <del class="price price-old">$190.00</del>
                            </div>
                        
                        <div class="price-wrap mt-2 text-center">
                            <span
                                class="price">$170.00</span>
                        </div>

                                            </div>
                </a> <!-- card // -->
            </div>
                        <div class="col-md-3 width-resize">
                <a href="shop/grocery-shop-bangladesh/product/chicken-drumsticks.html"
                    class="card card-product-grid card-padding-css">
                    <div class="img-wrap home">
                        <img src="{{ url('storage/161/6033aa326f33f_Chicken_Drumsticks_large.jpg') }}">
                    </div>
                    <div class="info-wrap text-center">
                        <p class="title text-truncate mb-2">Chicken drumsticks</p>
                                                <ul class="rating-stars">
                            <li class="stars-active">
                                                                    <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                </li>
                            <li>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </li>
                        </ul>
                        
                                                    <div class="price-wrap mt-2 text-center">
                                <del class="price price-old">$120.00</del>
                            </div>
                        
                        <div class="price-wrap mt-2 text-center">
                            <span
                                class="price">$105.00</span>
                        </div>

                                            </div>
                </a> <!-- card // -->
            </div>
                        <div class="col-md-3 width-resize">
                <a href="shop/grocery-shop-bangladesh/product/oranges-navel"
                    class="card card-product-grid card-padding-css">
                    <div class="img-wrap home">
                        <img src="{{ url('storage/153/6033a7200599a_05795a16b647118ffb6629390e995adb.jpg') }}">
                    </div>
                    <div class="info-wrap text-center">
                        <p class="title text-truncate mb-2">Oranges navel</p>
                                                <ul class="rating-stars">
                            <li class="stars-active">
                                                                    <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                </li>
                            <li>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </li>
                        </ul>
                        
                                                    <div class="price-wrap mt-2 text-center">
                                <del class="price price-old">$50.00</del>
                            </div>
                        
                        <div class="price-wrap mt-2 text-center">
                            <span
                                class="price">$45.00</span>
                        </div>

                                            </div>
                </a> <!-- card // -->
            </div>
                        <div class="col-md-3 width-resize">
                <a href="shop/electronic-devices-shop/product/black-waterproof-action-camera.html"
                    class="card card-product-grid card-padding-css">
                    <div class="img-wrap home">
                        <img src="{{ url('storage/59/60337c6201b1f_download-(9).jpg') }}">
                    </div>
                    <div class="info-wrap text-center">
                        <p class="title text-truncate mb-2">Black - Waterproof Action Camera</p>
                                                <ul class="rating-stars">
                            <li class="stars-active">
                                                                    <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                </li>
                            <li>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </li>
                        </ul>
                        
                                                    <div class="price-wrap mt-2 text-center">
                                <del class="price price-old">$45,620.00</del>
                            </div>
                        
                        <div class="price-wrap mt-2 text-center">
                            <span
                                class="price">$44,620.00</span>
                        </div>

                                            </div>
                </a> <!-- card // -->
            </div>
                        <div class="col-md-3 width-resize">
                <a href="shop/electronic-devices-shop/product/p47-wireless-bluetooth-headphone-white.html"
                    class="card card-product-grid card-padding-css">
                    <div class="img-wrap home">
                        <img src="{{ url('storage/94/60338575a367c_cadd94d801ec1eae058031b7190af35b.jpg') }}">
                    </div>
                    <div class="info-wrap text-center">
                        <p class="title text-truncate mb-2">P47 - Wireless Bluetooth Headphone - white</p>
                                                <div class="star-css"></div>
                        
                        
                        <div class="price-wrap mt-2 text-center">
                            <span
                                class="price">$550.00</span>
                        </div>

                                                    <div class="price-wrap mt-2 text-center">
                                <del class="price price-old"></del>
                            </div>
                                            </div>
                </a> <!-- card // -->
            </div>
                        <div class="col-md-3 width-resize">
                <a href="shop/grocery-shop-bangladesh/product/diced-lamb.html"
                    class="card card-product-grid card-padding-css">
                    <div class="img-wrap home">
                        <img src="{{ url('storage/166/6033ab6935950_DicedLamb_4f9156fd-8fab-4cf4-a9a1-2bed07af8f7c_large.jpg') }}">
                    </div>
                    <div class="info-wrap text-center">
                        <p class="title text-truncate mb-2">Diced lamb</p>
                                                <ul class="rating-stars">
                            <li class="stars-active">
                                                                    <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                </li>
                            <li>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </li>
                        </ul>
                        
                                                    <div class="price-wrap mt-2 text-center">
                                <del class="price price-old">$320.00</del>
                            </div>
                        
                        <div class="price-wrap mt-2 text-center">
                            <span
                                class="price">$310.00</span>
                        </div>

                                            </div>
                </a> <!-- card // -->
            </div>
                        <div class="col-md-3 width-resize">
                <a href="shop/electronic-devices-shop/product/canon-eos-rebel-t6s-dslr-camera-18-135mm-lens.html"
                    class="card card-product-grid card-padding-css">
                    <div class="img-wrap home">
                        <img src="{{ url('storage/61/60337cb571b2e_2481630312983745d53b5e6a4682658778284a09_main_hero_image.jpg') }}">
                    </div>
                    <div class="info-wrap text-center">
                        <p class="title text-truncate mb-2">Canon EOS Rebel T6s DSLR Camera + 18-135mm Lens</p>
                                                <ul class="rating-stars">
                            <li class="stars-active">
                                                                    <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                </li>
                            <li>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </li>
                        </ul>
                        
                                                    <div class="price-wrap mt-2 text-center">
                                <del class="price price-old">$145,000.00</del>
                            </div>
                        
                        <div class="price-wrap mt-2 text-center">
                            <span
                                class="price">$143,000.00</span>
                        </div>

                                            </div>
                </a> <!-- card // -->
            </div>
                        <div class="col-md-3 width-resize">
                <a href="shop/electronic-devices-shop/product/macbook-pro-15-23ghz.html"
                    class="card card-product-grid card-padding-css">
                    <div class="img-wrap home">
                        <img src="{{ url('storage/82/603383ab4cbed_59605de01fb45db45e4d279cb949d0ac.jpg') }}">
                    </div>
                    <div class="info-wrap text-center">
                        <p class="title text-truncate mb-2">Macbook pro-15 2.3GHz</p>
                                                <ul class="rating-stars">
                            <li class="stars-active">
                                                                    <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                </li>
                            <li>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </li>
                        </ul>
                        
                                                    <div class="price-wrap mt-2 text-center">
                                <del class="price price-old">$160,000.00</del>
                            </div>
                        
                        <div class="price-wrap mt-2 text-center">
                            <span
                                class="price">$157,500.00</span>
                        </div>

                                            </div>
                </a> <!-- card // -->
            </div>
                        <div class="col-md-3 width-resize">
                <a href="shop/electronic-devices-shop/product/poco-m2-6gb-ram-64gbrom.html"
                    class="card card-product-grid card-padding-css">
                    <div class="img-wrap home">
                        <img src="{{ url('storage/67/60337d9e9e5c4_57a2a6cd9f5de0859ad1a67a148b8076.jpg') }}">
                    </div>
                    <div class="info-wrap text-center">
                        <p class="title text-truncate mb-2">POCO M2 - 6GB RAM/ 64GBROM</p>
                                                <ul class="rating-stars">
                            <li class="stars-active">
                                                                    <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                </li>
                            <li>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </li>
                        </ul>
                        
                                                    <div class="price-wrap mt-2 text-center">
                                <del class="price price-old">$16,000.00</del>
                            </div>
                        
                        <div class="price-wrap mt-2 text-center">
                            <span
                                class="price">$14,000.00</span>
                        </div>

                                            </div>
                </a> <!-- card // -->
            </div>
                        <div class="col-md-3 width-resize">
                <a href="shop/grocery-shop-bangladesh/product/nectarines.html"
                    class="card card-product-grid card-padding-css">
                    <div class="img-wrap home">
                        <img src="{{ url('storage/155/6033a7f2d5cfc_Nectarines_f127fef6-c849-4bb9-9816-9695c9b996ff_large.png') }}">
                    </div>
                    <div class="info-wrap text-center">
                        <p class="title text-truncate mb-2">Nectarines</p>
                                                <ul class="rating-stars">
                            <li class="stars-active">
                                                                    <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                </li>
                            <li>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </li>
                        </ul>
                        
                        
                        <div class="price-wrap mt-2 text-center">
                            <span
                                class="price">$120.00</span>
                        </div>

                                                    <div class="price-wrap mt-2 text-center">
                                <del class="price price-old"></del>
                            </div>
                                            </div>
                </a> <!-- card // -->
            </div>
                    </div>
    </div>
</section>


<section class="section-content">
    <div class="container">
        <header class="section-heading">
            <h3 class="section-title">Latest products</h3>
        </header>
        <div class="row">
                                    <div class="col-md-3 width-resize">
                <a href="shop/ideal-automobiles/product/2021-bmw-430.html"
                    class="card card-product-grid card-padding-css">
                    <div class="img-wrap home">
                        <img src="{{ url('storage/204/6034b2ce19bd5_download-(1).html') }}">
                    </div>
                    <div class="info-wrap text-center">
                        <p class="title text-truncate mb-2 ">2021 BMW 430</p>
                                                    <div class="star-css"></div>
                        
                        
                        <div class="price-wrap mt-2 text-center">
                            <span
                                class="price">$46,000.00</span>
                        </div>

                                                    <div class="price-wrap mt-2 text-center">
                                <del class="price price-old"></del>
                            </div>
                                            </div>
                </a> <!-- card // -->
            </div>
                        <div class="col-md-3 width-resize">
                <a href="shop/ideal-automobiles/product/2021-lexus-rc-350.html"
                    class="card card-product-grid card-padding-css">
                    <div class="img-wrap home">
                        <img src="{{ url('storage/201/6034b15026af3_download-(8).html') }}">
                    </div>
                    <div class="info-wrap text-center">
                        <p class="title text-truncate mb-2 ">2021 Lexus RC 350</p>
                                                    <div class="star-css"></div>
                        
                        
                        <div class="price-wrap mt-2 text-center">
                            <span
                                class="price">$45,000.00</span>
                        </div>

                                                    <div class="price-wrap mt-2 text-center">
                                <del class="price price-old"></del>
                            </div>
                                            </div>
                </a> <!-- card // -->
            </div>
                        <div class="col-md-3 width-resize">
                <a href="shop/ideal-automobiles/product/2021-bmw-m850.html"
                    class="card card-product-grid card-padding-css">
                    <div class="img-wrap home">
                        <img src="{{ url('storage/194/6034afa29bf62_download-(5).html') }}">
                    </div>
                    <div class="info-wrap text-center">
                        <p class="title text-truncate mb-2 ">2021 BMW M850</p>
                                                    <div class="star-css"></div>
                        
                        
                        <div class="price-wrap mt-2 text-center">
                            <span
                                class="price">$111,900.00</span>
                        </div>

                                                    <div class="price-wrap mt-2 text-center">
                                <del class="price price-old"></del>
                            </div>
                                            </div>
                </a> <!-- card // -->
            </div>
                        <div class="col-md-3 width-resize">
                <a href="shop/ideal-automobiles/product/2021-audi-e-tron.html"
                    class="card card-product-grid card-padding-css">
                    <div class="img-wrap home">
                        <img src="{{ url('storage/190/6034aed6195b5_download-(1).html') }}">
                    </div>
                    <div class="info-wrap text-center">
                        <p class="title text-truncate mb-2 ">2021 Audi e-tron</p>
                                                    <div class="star-css"></div>
                        
                        
                        <div class="price-wrap mt-2 text-center">
                            <span
                                class="price">$65,000.00</span>
                        </div>

                                                    <div class="price-wrap mt-2 text-center">
                                <del class="price price-old"></del>
                            </div>
                                            </div>
                </a> <!-- card // -->
            </div>
                        <div class="col-md-3 width-resize">
                <a href="shop/ideal-automobiles/product/2021-audi-rs-5.html"
                    class="card card-product-grid card-padding-css">
                    <div class="img-wrap home">
                        <img src="{{ url('storage/198/6034b02e5702c_download-(1).html') }}">
                    </div>
                    <div class="info-wrap text-center">
                        <p class="title text-truncate mb-2 ">2021 Audi RS 5</p>
                                                    <div class="star-css"></div>
                        
                        
                        <div class="price-wrap mt-2 text-center">
                            <span
                                class="price">$20,000.00</span>
                        </div>

                                                    <div class="price-wrap mt-2 text-center">
                                <del class="price price-old"></del>
                            </div>
                                            </div>
                </a> <!-- card // -->
            </div>
                        <div class="col-md-3 width-resize">
                <a href="shop/reliance-digital-xpress/product/eos-rebel-t6s-dslr-with-ef-s-18-135mm.html"
                    class="card card-product-grid card-padding-css">
                    <div class="img-wrap home">
                        <img src="{{ url('storage/64/60337cff58256_4788b4022df255d54901410b10c1820f06fbc99c_main_hero_image.jpg') }}">
                    </div>
                    <div class="info-wrap text-center">
                        <p class="title text-truncate mb-2 ">EOS Rebel T6s DSLR with EF-S 18-135mm</p>
                                                    <div class="star-css"></div>
                        
                        
                        <div class="price-wrap mt-2 text-center">
                            <span
                                class="price">$12,030.00</span>
                        </div>

                                                    <div class="price-wrap mt-2 text-center">
                                <del class="price price-old"></del>
                            </div>
                                            </div>
                </a> <!-- card // -->
            </div>
                        <div class="col-md-3 width-resize">
                <a href="shop/reliance-digital-xpress/product/black-waterproof-action-camera.html"
                    class="card card-product-grid card-padding-css">
                    <div class="img-wrap home">
                        <img src="{{ url('storage/59/60337c6201b1f_download-(9).jpg') }}">
                    </div>
                    <div class="info-wrap text-center">
                        <p class="title text-truncate mb-2 ">Black - Waterproof Action Camera</p>
                                                    <div class="star-css"></div>
                        
                        
                        <div class="price-wrap mt-2 text-center">
                            <span
                                class="price">$45,620.00</span>
                        </div>

                                                    <div class="price-wrap mt-2 text-center">
                                <del class="price price-old"></del>
                            </div>
                                            </div>
                </a> <!-- card // -->
            </div>
                        <div class="col-md-3 width-resize">
                <a href="shop/reliance-digital-xpress/product/dahua-ipc-hdw1230t1p-2mp-ir-30m-ir-eyeball"
                    class="card card-product-grid card-padding-css">
                    <div class="img-wrap home">
                        <img src="{{ url('storage/38/603379febe647_dahua-ipc-hdw1230t1p-2mp-ir-30m-ir-eyeball-camera-in-bd-at-bdshopcom.jpg') }}">
                    </div>
                    <div class="info-wrap text-center">
                        <p class="title text-truncate mb-2 ">Dahua IPC-HDW1230T1P 2MP IR-30M IR Eyeball</p>
                                                    <div class="star-css"></div>
                        
                        
                        <div class="price-wrap mt-2 text-center">
                            <span
                                class="price">$3,550.00</span>
                        </div>

                                                    <div class="price-wrap mt-2 text-center">
                                <del class="price price-old"></del>
                            </div>
                                            </div>
                </a> <!-- card // -->
            </div>
                        <div class="col-md-3 width-resize">
                <a href="shop/reliance-digital-xpress/product/canon-eos-rebel-t6s-dslr-camera-18-135mm-lens.html"
                    class="card card-product-grid card-padding-css">
                    <div class="img-wrap home">
                        <img src="{{ url('storage/61/60337cb571b2e_2481630312983745d53b5e6a4682658778284a09_main_hero_image.jpg') }}">
                    </div>
                    <div class="info-wrap text-center">
                        <p class="title text-truncate mb-2 ">Canon EOS Rebel T6s DSLR Camera + 18-135mm Lens</p>
                                                    <div class="star-css"></div>
                        
                        
                        <div class="price-wrap mt-2 text-center">
                            <span
                                class="price">$145,000.00</span>
                        </div>

                                                    <div class="price-wrap mt-2 text-center">
                                <del class="price price-old"></del>
                            </div>
                                            </div>
                </a> <!-- card // -->
            </div>
                        <div class="col-md-3 width-resize">
                <a href="shop/reliance-digital-xpress/product/dahua-ipc-hdw2431tp-as-4mp-ir-30m-ir-dome.html"
                    class="card card-product-grid card-padding-css">
                    <div class="img-wrap home">
                        <img src="{{ url('storage/44/60337a8b4860c_dahua-imou-ipc-d22p-dome-lite-ip-camera-in-bd-at-bdshopcom.jpg') }}">
                    </div>
                    <div class="info-wrap text-center">
                        <p class="title text-truncate mb-2 ">Dahua IPC-HDW2431TP-AS 4MP IR-30M IR Dome</p>
                                                    <div class="star-css"></div>
                        
                        
                        <div class="price-wrap mt-2 text-center">
                            <span
                                class="price">$54,500.00</span>
                        </div>

                                                    <div class="price-wrap mt-2 text-center">
                                <del class="price price-old"></del>
                            </div>
                                            </div>
                </a> <!-- card // -->
            </div>
                                </div>
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

    </body>

<!-- Mirrored from demo.food-express.xyz/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Apr 2021 09:30:16 GMT -->
</html>
