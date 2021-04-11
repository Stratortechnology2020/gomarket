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
<section class="section-content padding-y bg">
        <div class="col-sm-6 offset-sm-3">
            
            <div class="card mx-auto">
                <article class="card-body">
                    <header class="mb-4">
                        <h4 class="card-title">Sign up</h4>
                    </header>
                    <div class="row">
               <div class="col-md-12"> 
               @if(session()->has('error_message'))
                <center><div class="alert alert-danger">{{ session('error_message') }}</div></center>
                @endif
                @if(session()->has('success_message'))
                <center><div class="alert alert-success">{{ session('success_message') }}</div></center>
                @endif</div>
    </div>
                    <form method="post" action="{{ route('registerdata') }}">
                         {{ csrf_field() }}                     
                        <div class="form-row">
                            <div class="col form-group">
                                <label class="js-check box active">
                                    <input type="radio" name="roles" value="2" checked>
                                    <h6 class="title">Customer</h6>
                                </label>
                            </div>
                            <div class="col form-group">
                                <label class="js-check box ">
                                    <input type="radio" name="roles" value="3" >
                                    <h6 class="title">Shop Owner</h6>
                                </label>
                            </div>
                            <div class="col form-group">
                                <label class="js-check box ">
                                    <input type="radio" name="roles" value="4" >
                                    <h6 class="title">Delivery</h6>
                                </label>
                            </div>
                        </div> <!-- row.// -->
                        <div class="form-row">
                            <div class="col form-group">
                                <label>Name</label><span class="text-danger">*</span>
                                <input name="name" value="" type="text"
                                    class="form-control " placeholder="Enter Name">
                            </div> 
                        </div>
                        <div class="form-row">
                            <div class="col form-group">
                                <label>Email</label><span class="text-danger">*</span>
                                <input name="email" value="" type="email"
                                    class="form-control" placeholder="Enter Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Phone</label><span class="text-danger">*</span>
                            <input name="phone" value="" type="mobile" class="form-control"
                                placeholder="Enter Mobile Number">
                        </div>
                        <div class="form-row">
                            <div class="col form-group">
                                <label for="password">Create password</label><span class="text-danger">*</span>
                                <input name="password" class="form-control "
                                    type="password" placeholder="Enter password">
                            </div> 
                        </div>
                        <div class="form-group">
                            <label  class="custom-control custom-checkbox">
                                <input name="terms_and_conditions" class="custom-control-input " type="checkbox"  value="1">
                                <span class="custom-control-label" id="terms_and_condition_color"> I am agree with</span> <a target="_blank" href="page/terms-and-condition.html">terms and conditions</a> <span class="text-danger">*</span>
                                
                            </label>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block"> Register </button>
                        </div>
                    </form>
                </article>
            </div>
            <p class="text-center mt-4">
                Have an account? <a href="{{route('login')}}">Log In</a>
            </p>
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
