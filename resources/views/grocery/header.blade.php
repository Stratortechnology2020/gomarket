<style>
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
<header class="section-header">
        <nav class="navbar  navbar-expand p-0 bg-selver">
            <div class="container">
                <ul class="navbar-nav">
                    <li  class="nav-item-a"><a href="#" class="nav-link"><i class="fa fa-phone">
                                </i> +91 7845129663 </a>
                    </li>
                    <li  class="nav-item-a"><a href="#" class="nav-link"><i class="fa fa-envelope"> </i> info@gomarket.com </a>
                    </li>
                </ul>
                <ul class="navbar-nav ">
                    <li  class="nav-item-a">
                        <a href="http://staging-web.food-express.xyz/admin/setting" target="_blank" class="nav-link"><i class="fa fa-mobile"></i> Save big on our app!</a>
                    </li>
                </ul>
            </div>
        </nav>
    
    <section class="header-main border-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2 col-6">
                    <a href="{{route('home')}}" class="brand-wrap">
                        <!-- //<img class="logo" src="{{ url('images/logo.png') }}" alt="logo"> -->
                         <h4>Gomarket</h4>
                    </a>
                </div>
            <div class="col-lg-6 col-12 col-sm-12">
                <form action="http://demo.food-express.xyz/search" class="search" method="GET">
                    <div class="input-group w-100">
                        <select name="location" id="location" class="form-control search-location">
                            <option value="">Select location</option>
                                <option value="1" >New York</option>
                                <option value="4" >Mumbai</option>
                                <option value="6" >Dhaka</option>
                        </select>
                        <select name="area" id="area" class="form-control search-area">
                                <option value="">Select area</option>
                                <option value="38" >Western New York</option>
                                <option value="23" >Uttara</option>
                                <option value="39" >The Bronx</option>
                                <option value="24" >New Market</option>
                                <option value="25" >Mirpur 10</option>
                                <option value="22" >Mirpur 1</option>
                                <option value="31" >Mira-Bhayandar</option>
                                <option value="40" >Manhattan</option>
                                <option value="33" >Jogeshwari</option>
                                <option value="30" >Andheri</option>
                        </select>
                        <input type="text" class="form-control" placeholder="Search" name="name" value="">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">
                            <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md">
                <div class="widgets-wrap float-md-right">
                    <div class="widget-header  mr-3">
                        <a href="{{ route('cart') }}" class="icon icon-sm rounded-circle border"><i class="fa fa-shopping-cart"></i></a>
                        <span class="badge badge-pill badge-danger notify">0</span>
                    </div>
                    <div class="widget-header icontext">
                        <div class="text">
                            <div>
                                <?php if(session('user_id') != '')
                                { ?>
                                    <div class="dropdown">
                                        <i class="fa fa-user-circle">  {{session('name')}} </i>
                                        <div class="dropdown-content">
                                            <a href="{{ route('myaddress')}}"><i class="fa fa-users"></i> My Address </a><br><br>
                                        <a href="{{ route('logout')}}"><i class="fa fa-caret-square-o-right"></i> Logout </a>
                                    </div>
                                    </div>
                                <?php }
                                else
                                { ?>
                                <a href="{{route('login')}}">Sign in</a> |
                                <a href="{{route('register')}}"> Register</a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
</header>