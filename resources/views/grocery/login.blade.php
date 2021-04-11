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
<section class="section-content padding-y" style="min-height:84vh">
    <div class="col-md-12"> 
               @if(session()->has('error_message'))
                <center><div class="alert alert-danger">{{ session('error_message') }}</div></center>
                @endif
                @if(session()->has('success_message'))
                <center><div class="alert alert-success">{{ session('success_message') }}</div></center>
                @endif</div>
    </div>
    <div class="card mx-auto" style="max-width: 380px; margin-top:100px;">
        <div class="card-body">
            
            <h4 class="card-title mb-4">Sign in</h4>
            
            <form method="post" action="{{ route('logindata') }}">
                   {{ csrf_field() }}                
                <div class="form-group">
                        <input id="demoemail" type="email" class="form-control "
                               name="email" value="" autocomplete="email" autofocus placeholder="Email">
                </div>
                <div class="form-group">
                        <input placeholder="Password" id="demopassword" type="password" class="form-control" name="password" autocomplete="current-password">
                </div>
                <div class="form-group">
                        <a href="password/reset.html" class="float-right">Forgot password?</a>
                        <label class="float-left custom-control custom-checkbox">
                            <input type="checkbox" name="remember" class="custom-control-input" value="1">
                            <div class="custom-control-label"> Remember </div>
                        </label>
                </div>
                <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block"> Login </button>
                </div>
            </form>
        </div>
    </div>
    <div class="card mx-auto text-center mt-4" style="max-width: 500px;">
        <div class="card-header">
            <h4 class="mb-0">For Quick Demo Login Click Below...</h4>
        </div>
        <div class="card-body">
            <div class="buttons">
                <button id="demoadmin" class="btn btn-primary">Admin</button>
                <button id="democustomer" class="btn btn-info">Customer</button>
                <button id="demoshopowner" class="btn btn-success">Shop Owner</button>
                <button id="demodeliveryboy" class="btn btn-warning">Delivery Boy</button>
            </div>
        </div>
    </div>
        <p class="text-center mt-4">Don&#039;t have account? <a href="{{route('register')}}">Sign up</a></p>
        <br><br>
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
<script src="{{ url('frontend/js/demo-login.js') }}"></script>
    </body>

<!-- Mirrored from demo.food-express.xyz/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Apr 2021 09:30:16 GMT -->
</html>
