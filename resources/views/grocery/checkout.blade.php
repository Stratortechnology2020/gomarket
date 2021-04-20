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
    .container {
  max-width: 1200px;
}

.lh-condensed { line-height: 1.25; }

.calsi-total{
    padding-left: 53px;
    padding-top: 2px;
}
</style>
<body>
    @include("grocery.header")
    
<!-- ========================= SECTION INTRO ========================= -->
<section class="bg-selver">
    <div class="container" style="padding-left: 121px;">
     <div class="row">
            <div class="col-md-4 order-md-2 mb-4" style="margin-top: 20px; margin-bottom: 20px;">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Your cart</span>
                    <span class="badge badge-secondary badge-pill">3</span>
                </h4>
                <ul class="list-group mb-3 sticky-top">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Product name:</h6>
                        </div>
                        <span class="text-muted calsi-total">$12</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Quantity:</h6>
                        </div>
                        <span class="text-muted calsi-total">$8</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Sub Total:</h6>
                        </div>
                        <span class="text-muted calsi-total">$5</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Delivery Charge:</h6>
                        </div>
                        <span class="text-muted calsi-total">$5</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total:</span>
                        <strong class="calsi-total">$20</strong>
                    </li>
                </ul>
            </div>
        <div class="card" style="margin-top: 20px; margin-bottom: 20px;">
            <div class="col-md-10 order-md-1">
                <h4 class="mb-3">Billing address</h4>
                <form class="needs-validation" novalidate="">
                    <div class="row" style="margin-top: 20px;">
                         <div class="col-xl-12">
                      <label>Select Address</label>
                      <select class="form-control" name="addressselection" id="addressselection" onchange="selectaddress(this)">
                          <option >Select Address</option>
                          <?php foreach($addressdetailsdata as $addressdetailsdatanew){?>
                          <option value="{{$addressdetailsdatanew->address_id}}" <?php if($addressdetailsdatanew->address_id == $addressdetails->address_id){echo 'selected';}?>>{{$addressdetailsdatanew->house_no}},{{$addressdetailsdatanew->society}} {{$addressdetailsdatanew->landmark}}  {{$addressdetailsdatanew->city}} -{{$addressdetailsdatanew->pincode}} ,{{$addressdetailsdatanew->state}}</option>
                          <?php }?>
                      </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter Your Name">
                    </div>
                    <div class="mb-3">
                        <label for="email">Mobile</label>
                        <input type="mobile" class="form-control" id="mobile" placeholder="Enter Your Name">
                        <div class="invalid-feedback"> Please enter a proper mobile number </div>
                    </div>
                    <div class="mb-3">
                        <label for="email">Email <span class="text-muted">(Optional)</span></label>
                        <input type="email" class="form-control" id="email" placeholder="you@example.com">
                        <div class="invalid-feedback"> Please enter a valid email address for shipping updates. </div>
                    </div>
                    <div class="mb-3">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
                        <div class="invalid-feedback"> Please enter your shipping address. </div>
                    </div>
                    <div class="mb-3">
                        <label for="address2">Landmark</label>
                        <input type="text" class="form-control" id="landmark" placeholder="Enter Landmark">
                    </div>
                    <div class="mb-3">
                        <label for="address2">City</label>
                        <input type="text" class="form-control" id="city" placeholder="Enter City">
                    </div>
                    <div class="mb-3">
                        <label for="address2">State</label>
                        <input type="text" class="form-control" id="state" placeholder="Enter State">
                    </div>
                    <div class="mb-3">
                        <label for="address2">Pincode</label>
                        <input type="text" class="form-control" id="state" placeholder="Enter State">
                    </div>
                    <div class="mb-3">
                        <label for="address2">Country</label>
                        <select class="form-control">
                            <option>india</option>
                        </select>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="same-address">
                        <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="save-info">
                        <label class="custom-control-label" for="save-info">Save this information for next time</label>
                    </div>
                    <hr class="mb-4">
                    <h4 class="mb-3">Payment</h4>
                    <div class="d-block my-3">
                        <div class="custom-control custom-radio">
                            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
                            <label class="custom-control-label" for="credit">Credit card</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
                            <label class="custom-control-label" for="debit">Debit card</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">
                            <label class="custom-control-label" for="paypal">PayPal</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="cc-name">Name on card</label>
                            <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                            <small class="text-muted">Full name as displayed on card</small>
                            <div class="invalid-feedback"> Name on card is required </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="cc-number">Credit card number</label>
                            <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                            <div class="invalid-feedback"> Credit card number is required </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="cc-expiration">Expiration</label>
                            <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
                            <div class="invalid-feedback"> Expiration date required </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="cc-cvv">CVV</label>
                            <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                            <div class="invalid-feedback"> Security code required </div>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
                </form>
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
<script src="{{ url('frontend/js/demo-login.js') }}"></script>
<script type="text/javascript">
    function selectaddress(the)
  {
       $.ajaxSetup({
         headers: {
         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
      });
      var addressid = $(the).val();
       $.ajax({
         url: "{{ route('selectaddress') }}",
         type:"POST",
         data:{addressid: addressid},
         success: function(result){
             var obj = JSON.parse(result);
           $('#houseno').val(obj.address.houseno);
           $('#street').val(obj.address.street);
           $('#state').val(obj.address.state);
           $('#pincode').val(obj.address.pincode);
           $('#city_name').val(obj.address.city_name);
           $('#area_name').val(obj.address.area_name);
            $('#addressid').val(obj.address.address_id);
            $('#finaldeliveryaddress').html(obj.address.address);
         }
      });
  }
</script>
    </body>

<!-- Mirrored from demo.food-express.xyz/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Apr 2021 09:30:16 GMT -->
</html>
