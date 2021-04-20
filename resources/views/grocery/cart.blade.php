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
.ycart_img {
    height: 56px;
    border: 2px solid gray;
    border-radius: 10px;
    display: inline-block;
    position: static;
    top: -28px;
}
.ycart_p {
  font-size: 14px;
  font-weight: 500;
  color: gray;
  margin-top: -12px;
  color: #41CE2E
}

.ycart_p2 {
  font-size: 14px;
  font-weight: 500;
  color: gray;
  margin-top: -12px;
  color: red
}

.ycart_price {
  font-size: 17px;
  margin-top: 20px;
  font-weight: bold;
}

.ycart_th {
  padding-top: 20px;
  padding-left: 20px
}

.ycart_trash {
  margin-top: 24px;
  color: red;
  font-size: 20px;
}
.inner_one2 {
  border: 1px solid #ccc;
  background-color: #F2F2F2;
  height: 25px;
  width: 24px;
  border-radius: 30px 0px 0px 30px
}

.inner_one_i2 {
  font-size: 10px;
  top: -3px;
  position: relative;
}

.inner_two2 {
  width: 28px;
  border: 1px solid #ccc;
  background-color: white;
  height: 25px;
}

.inner_two_span2 {
  font-size: 14px;
  top: -2px;
  position: relative;
}

.inner_three2 {
  border: 1px solid #ccc;
  background-color: #F2F2F2;
  height: 25px;
  width: 24px;
  border-radius: 0px 30px 30px 0px
}

.inner_three_i2 {
  font-size: 10px;
  top: -3px;
  position: relative;
}

</style>
<body>
    @include("grocery.header")
    
<!-- ========================= SECTION INTRO ========================= -->
<section class="section-content padding-y bg">
        <div class="container">
            <div class="row">
                <aside class="col-lg-9">
                    <div class="card">
                        <table class="table table-borderless table-shopping-cart table-responsive">
                            <thead class="text-muted">
                                <tr class="small text-uppercase">
                                    <th scope="col" style="width: 40%; padding-left: 22px;">Product</th>
                                    <th scope="col" style="width: 15%;">Quantity</th>
                                    <th scope="col" style="width: 15%;">Price</th>
                                    <th scope="col" style="width: 15%;">Action</th>
                                </tr>
                            </thead>
                 <tbody>
                  @foreach($cartdata as $cartdata)
                    <tr>
                        <th scope="row ycart_th">
                           <img src="{{$cartdata->varient_image}}" class="ycart_img">
                           <div style="display: inline-block;margin-left: 15px;">
                              <p style="font-size: 17px;">{{$cartdata->product_name}}</p>
                              
                           </div>
                        </th>
                        <td>
                           <div class="btn-group btn-group-sm outer_but772" style="margin-top: 20px;" role="group" aria-label="...">
                              <button class="inner_one2" ><i class="fa fa-minus inner_one_i2" ></i></button>
                              <button class="inner_two2" ><span class="inner_two_span2">1</span></button>
                              <button class="inner_three2" ><i class="fa fa-plus inner_three_i2" ></i></button>
                           </div>
                        </td>
                        <td>
                           <p class="ycart_price">Rs. {{$cartdata->price}}</p>
                        </td>
                        <td><i class="fa fa-trash-o ycart_trash" onclick="groceryremovecartitem('{{ $cartdata->cart_id}}')"></i></td>
                     </tr>
                     @endforeach
                 </tbody>
             </table>

                        <div class="card-body border-top">
                            <p class="icontext"><i class="icon text-success fa fa-truck"></i> Free Delivery within 1-2 weeks</p>
                        </div>
                        <!-- card-body.// -->
                    </div>
                    <!-- card.// -->
                </aside>
                <!-- col.// -->
                <aside class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <dl class="dlist-align">
                                <dt>Total price:</dt>
                                <dd class="text-right total-price-js">Rs.200</dd>
                            </dl>
                            <dl class="dlist-align">
                                <dt>Delivery Charge:</dt>
                                <dd class="text-right">Rs.50</dd>
                            </dl>
                            <dl class="dlist-align">
                                <dt>Total:</dt>
                                <dd class="text-right text-dark b total-js"><strong>$0.00</strong></dd>
                            </dl>
                            <hr />
                            <p class="text-center mb-3">
                                <img src="frontend/images/misc/payments.png" height="26" />
                            </p>
                            <div>
                                <a href="{{ route('checkout')}}" class="btn btn-light btn-block">Continue Shopping</a>
                            </div>
                        </div>
                        <!-- card-body.// -->
                    </div>
                    <!-- card.// -->
                </aside>
                <!-- col.// -->
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
  function groceryremovecartitem(cartid)
    {
      debugger;
         $.ajaxSetup({
                     headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                     }
            });
            $.ajax({
               url: "{{ route('removecartitem') }}",
               type:"POST",
               data:{cartid: cartid},
               success: function(result){
                    if(result == 1)
                    {
                      alert('Item Remove From Cart Successfully');
                      location.reload();
                    }else
                    {
                      alert('Somthing Went Wrong');
                      location.reload();
                    }
                }
            });
    }
</script>
    </body>

<!-- Mirrored from demo.food-express.xyz/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Apr 2021 09:30:16 GMT -->
</html>
