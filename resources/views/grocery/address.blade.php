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
          <div class="row">
            <?php if(isset($editaddress)){
            
            ?>
      <div class="container" style="padding-top: 30px; margin-top: 10px; padding-bottom: 30px;">
        <div class="container-fluid" style="margin-top: 25px;width: 91.5%;">
         <div class="row">
            <div class="col-xl-12">
               <div class="card shadow">
                  <h3 style="margin: 13px 0px 15px 15px;font-size: 20px;">EDIT ADDRESS DETAILS <span style="float: right;margin-right: 20px;color: blue;font-size: 17px;"><i class="fa fa-angle-double-left" ></i><a href="{{ route('myaddress')}}"> Back</a></span></h3>
               </div>
            </div>
         </div>
        </div>
      
      <div class="container-fluid" style="margin-top: 25px;width: 91.5%;">
        <div class="card shadow">
          <form class="" method="POST" action="{{ url('/updateuseraddress')}}"  enctype="multipart/form-data">
                      {{ csrf_field() }}
                <input type="hidden" name="hiddenid" value="<?php echo $editaddress->address_id;?>">
         <div class="row">
            <div class="col-xl-6">
               <div class="form-group personal_div2">
                  <label for="usr" class="personal_label">Name <i class="fa fa-star" style="color: red;font-size: 11px;"></i></label>
                  <input type="text"  id="usr" name="name" class="form-control" value="<?php echo $editaddress->user_name;?>">
               </div>
            </div>
            <div class="col-xl-6">
               <div class="form-group personal_div2">
                  <label for="usr" class="personal_label">Mobile No: <i class="fa fa-star" style="color: red;font-size: 11px;"></i></label>
                  <input type="mobile"  id="usr" name="mobile" class="form-control" value="<?php echo $editaddress->user_number;?>">
               </div>
            </div>
            <div class="col-xl-6">
               <div class="form-group personal_div2">
                  <label for="usr" class="personal_label">Address<i class="fa fa-star" style="color: red;font-size: 11px;"></i></label>
                  <input type="text"  id="usr" name="address" class="form-control" value="<?php echo $editaddress->address;?>">
               </div>
            </div>
            <div class="col-xl-6">
               <div class="form-group personal_div2">
                  <label for="usr" class="personal_label">LandMark<i class="fa fa-star" style="color: red;font-size: 11px;"></i></label>
                  <input type="text"  id="usr" name="landmark" class="form-control" value="<?php echo $editaddress->street;?>">
               </div>
            </div>
            <div class="col-xl-6">
               <div class="form-group personal_div2">
                  <label for="usr" class="personal_label">City<i class="fa fa-star" style="color: red;font-size: 11px;"></i></label>
                  <input type="text"  id="usr" name="city" class="form-control">
               </div>
            </div>
            <div class="col-xl-6">
               <div class="form-group personal_div2">
                  <label for="usr" class="personal_label">State <i class="fa fa-star" style="color: red;font-size: 11px;"></i></label>
                  <input type="text"  id="usr" name="state" class="form-control" value="<?php echo $editaddress->state;?>">
               </div>
            </div>
            <div class="col-xl-6">
               <div class="form-group personal_div2">
                  <label for="usr" class="personal_label">Pin Code <i class="fa fa-star" style="color: red;font-size: 11px;"></i></label>
                  <input type="text"  id="usr" name="pincode" class="form-control" value="<?php echo $editaddress->pincode;?>">
               </div>
            </div>
            <div class="col-xl-6">
               <div class="form-group personal_div2">
                  <label for="usr" class="personal_label">Country <i class="fa fa-star" style="color: red;font-size: 11px;"></i></label>
                  <select class="form-control">
                     <option>india</option>
                  </select>
               </div>
            </div>
            <div class="col-xl-12">
               <center>
                  <button class="edit_button23" type="submit">Update</button>
               </center>
            </div>
         </div>
       </form>
        </div>
      </div>
      
  </div>
  <?php }else {?>
    <div class="container" style="padding-top: 30px; margin-top: 10px; padding-bottom: 30px;">
        <div class="container-fluid" style="margin-top: 25px;width: 91.5%;">
         <div class="row">
            <div class="col-xl-12">
               <div class="card shadow">
                  <h3 style="margin: 13px 0px 15px 15px;font-size: 20px;">ADD ADDRESS DETAILS <span style="float: right;margin-right: 20px;color: blue;font-size: 17px;"><i class="fa fa-angle-double-left" ></i><a href="{{ route('myaddress')}}"> Back</a></span></h3>
               </div>
            </div>
         </div>
        </div>
      
      <div class="container-fluid" style="margin-top: 25px;width: 91.5%;">
        <div class="card shadow">
          <form class="" method="POST" action="{{ url('/adduseraddress')}}"  enctype="multipart/form-data">
                      {{ csrf_field() }}
         <div class="row">
            <div class="col-xl-6">
               <div class="form-group personal_div2">
                  <label for="usr" class="personal_label">Name <i class="fa fa-star" style="color: red;font-size: 11px;"></i></label>
                  <input type="text"  id="usr" name="name" class="form-control">
               </div>
            </div>
            <div class="col-xl-6">
               <div class="form-group personal_div2">
                  <label for="usr" class="personal_label">Mobile No: <i class="fa fa-star" style="color: red;font-size: 11px;"></i></label>
                  <input type="mobile"  id="usr" name="mobile" class="form-control">
               </div>
            </div>
            <div class="col-xl-6">
               <div class="form-group personal_div2">
                  <label for="usr" class="personal_label">Address<i class="fa fa-star" style="color: red;font-size: 11px;"></i></label>
                  <input type="text"  id="usr" name="address" class="form-control">
               </div>
            </div>
            <div class="col-xl-6">
               <div class="form-group personal_div2">
                  <label for="usr" class="personal_label">LandMark<i class="fa fa-star" style="color: red;font-size: 11px;"></i></label>
                  <input type="text"  id="usr" name="landmark" class="form-control">
               </div>
            </div>
            <div class="col-xl-6">
               <div class="form-group personal_div2">
                  <label for="usr" class="personal_label">City<i class="fa fa-star" style="color: red;font-size: 11px;"></i></label>
                  <input type="text"  id="usr" name="city" class="form-control">
               </div>
            </div>
            <div class="col-xl-6">
               <div class="form-group personal_div2">
                  <label for="usr" class="personal_label">State <i class="fa fa-star" style="color: red;font-size: 11px;"></i></label>
                  <input type="text"  id="usr" name="state" class="form-control">
               </div>
            </div>
            <div class="col-xl-6">
               <div class="form-group personal_div2">
                  <label for="usr" class="personal_label">Pin Code <i class="fa fa-star" style="color: red;font-size: 11px;"></i></label>
                  <input type="text"  id="usr" name="pincode" class="form-control">
               </div>
            </div>
            <div class="col-xl-6">
               <div class="form-group personal_div2">
                  <label for="usr" class="personal_label">Country <i class="fa fa-star" style="color: red;font-size: 11px;"></i></label>
                  <select class="form-control">
                     <option>india</option>
                  </select>
               </div>
            </div>
            <div class="col-xl-12">
               <center>
                  <button class="edit_button23" type="submit">Submit</button>
               </center>
            </div>
         </div>
       </form>
        </div>
      </div>
      
  </div>
  <?php }?>
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
