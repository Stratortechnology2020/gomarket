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
    .addnew_acc {
  float: right;
  font-size: 14px;
  margin-right: 20px;
  position: relative;
  top: 5px;
  color: blue;
  cursor: pointer;
}
.myaccount_add {
  font-size: 14.5px;
  color: blue;
  cursor: pointer;
  font-weight: 500;
  margin-top: 10px;
}
</style>

<body>
    @include("grocery.header")

<section>  
    <div class="row">
              <div class="col-md-4"> </div>
               <div class="col-md-4"> 
               @if(session()->has('error_message'))
                <center><div class="alert alert-danger">{{ session('error_message') }}</div></center>
                @endif
                @if(session()->has('success_message'))
                <center><div class="alert alert-success">{{ session('success_message') }}</div></center>
                @endif</div>
            </div>
    <div class="container" style="padding-top: 30px; margin-top: 10px; padding-bottom: 30px;">
        <div class="card shadow" style="padding-bottom: 30px;">
                             <h3 style="margin: 13px 0px 30px 22px;font-size: 22px;"> <i class="fa fa-address-card" style="color: #3167eb;"></i>&nbsp;Delivery Address <span class="addnew_acc"><a href="{{ route('address') }}"><i class="fa fa-plus"></i> Add New Address</a></span></h3>
                             <div class="container-fluid" style="margin-left: 8px;width: 98.6%;">

                                <div class="row" >
                                    <?php 
                                         if(!$useraddress->isEmpty()){
                                         foreach($useraddress as $useraddress){ ?>
                                   <div class="col-xl-6">
                                      <div class="card">
                                         
                                         <div class="card-header">
                                            <b>{{  $useraddress->user_name }}</b>
                                         </div>
                                         <div class="card-body">
                                            <p style="    font-weight: 400;font-size: 15px;color: #666;margin-top: -10px;">{{  $useraddress->user_name }}</p>
                                            <p class="myaccount_para56">{{  $useraddress->address }}</p>
                                            <p class="myaccount_para56">{{  $useraddress->pincode }}</p>
                                            <p class="myaccount_para56">{{  $useraddress->state }}</p>
                                            <p style="font-weight: 400;font-size: 15px;color: #666;margin-top: 1px;">{{  $useraddress->user_number }}</p>
                                            <p class="myaccount_para99">Home</p>
                                         </div>
                                    
                                      </div>
                                      <p class="myaccount_add"><span style="float: left;"><a href="{{ route('editaddress',$useraddress->address_id)}}">Edit Address</a></span> <span style="float: right;"><a href="{{ route('deleteaddress',$useraddress->address_id)}}">Delete Address</a></span> </p>
                                   </div>
                                    <?php } } ?>
                                </div>
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
