<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use DB;
use Session;

class Front extends BaseController
{
    public function register()
    {
      return view('grocery.register');
    }
    public function registerdata(Request $request)
    {
        $info = array(
            'user_name'      => $request->name,
            'user_email'    => $request->email,
            'user_phone'     => $request->phone,
            'user_password'  => $request->password
            );
            
        $data = DB::table('tbl_user')->insert($info);
        if($data == 1)
        {
            return redirect('register')->with('success_message', 'Register Successfully');
        }else
        {
            return redirect('register')->with('error_message', 'Register Failed');
        }
    }
    public function login()
    {
    	return view('grocery.login');
    }
    public function logindata(Request $request)
    {
      $data =  DB::table('tbl_user')->where(array('user_email' => $request->email,'user_password' => $request->password))->first();
            if(!empty($data))
            {
            
            $info = array(
                    'user_id' => $data->user_id,
                    'name'    => $data->user_name,
                    'email'   => $data->user_email
                    
           );
            $request->session()->put($info);
       
            return redirect('/')->with('success_message', 'Login Success');
            }else
            {
      
                return redirect('/')->with('error_message', 'Login Failed');
            }
    }
    public function logout(Request $request)
    {
        $info = array(
                    'user_id' =>'',
                    'name'    => '',
                    'email'   => '',
           );
        $request->session()->forget($info); 
        Session::flush(); 
      
        return redirect('/');
    }
    public function home()
    {
      $vendordata = DB::table('vendor_category')->get();
      $products = DB::table('product')->join('product_varient','product_varient.product_id', '=', 'product.product_id') ->select('product.*', 'product_varient.*')->where(['product.vendor_id' => 1])->get();
      return view('grocery.home',['vendordata' => $vendordata,'products' => $products]);
    }
    public function grocerystore()
    {
      $vendorshop = DB::table('vendor')->get();
      $vendorshopdetails = DB::table('vendor')->where(['ui_type' => 1])->first();
      $products = DB::table('product')->join('product_varient','product_varient.product_id', '=', 'product.product_id') ->select('product.*', 'product_varient.*')->where(['product.vendor_id' => 1])->get();
      return view('grocery.grocerystore',['vendorshop' => $vendorshop,'vendorshopdetails' => $vendorshopdetails,'products' => $products]);
    }
    public function myaddress()
    {
        $useraddress = DB::table('user_address')->where(array('user_id' =>Session('user_id')))->get();
      return view('grocery.myaddress',['useraddress' => $useraddress]);
    }
    public function address()
    {
        $useraddress = DB::table('user_address')->get();
      return view('grocery.address',['useraddress' => $useraddress]);
    }
    public function adduseraddress(Request $request)
    {
      $info = array(
            'user_id' => Session('user_id'),
            'user_name' => $request->name,
            'user_number' => $request->mobile,
            'address'   => $request->address,
            'street'   => $request->landmark,
            'state'   => $request->state,
            'pincode' => $request->pincode

            );
        $data = DB::table('user_address')->insert($info);
       
        if($data == 1)
        {
            return redirect('/myaddress')->with('success_message', 'Address added successfully');
        }
        else
        {
            return redirect('/myaddress')->with('error_message', 'Address not added successfully');
        }
    }
    public function editaddress($id)
    {
        
      $useraddress = DB::table('user_address')->get();
      $editdata =  DB::table('user_address')->where(array('address_id' => $id))->first();
      return view('grocery.address', ['editaddress' => $editdata,'useraddress' => $useraddress]);
    }

    public function updateuseraddress(Request $request)
    {
        $info = array(
            'user_id' => Session('user_id'),
            'user_name' => $request->name,
            'user_number' => $request->mobile,
            'address'   => $request->address,
            'street'   => $request->landmark,
            'state'   => $request->state,
            'pincode' => $request->pincode

            );
        $data = DB::table('user_address')->where(['address_id' => $request->hiddenid])->update($info);
       
        if($data == 1)
        {
            return redirect('/myaddress')->with('success_message', 'Address updated successfully');
        }
        else
        {
            return redirect('/myaddress')->with('error_message', 'Address not updated successfully');
        }
    }
    public function deleteaddress($id){
        $delete = DB::table('user_address')->where(['address_id' => $id])->delete();
        if($delete == 1)
        {
            return redirect('/myaddress')->with('success_message', 'Address deleted successfully');
        }
       
    }
    public function product_detail($id)
    {
         $products = DB::table('product')->join('product_varient','product_varient.product_id', '=', 'product.product_id') ->select('product.*', 'product_varient.*')->where(['product.product_id' => $id])->first();
         $productlists = DB::table('product')->join('product_varient','product_varient.product_id', '=', 'product.product_id') ->select('product.*', 'product_varient.*')->where(['product.vendor_id' => 1])->get();
        return view('grocery.product_detail',['products' => $products,'productlists' => $productlists]);
    }
    
    public function cart(Request $request)
    {
      $cartdata = DB::table('cart')->join('product_varient','product_varient.product_id', '=', 'cart.product_id')->join('product','product.product_id', '=', 'cart.product_id')->select('cart.*', 'product_varient.*','product.*')->get();
      return view('grocery.cart',['cartdata' => $cartdata]);
    }
    public function checkout(Request $request)
    {

      return view('grocery.checkout');
    }
    public function selectaddress(Request $request)
    {   
            $update = DB::table('user_address')->where(array('address_id' => $request->addressid))->update(array('select_status' => 1));
        $updatedata = DB::table('user_address')->where('address_id' ,'!=', $request->addressid)->where(array('user_id' => session('user_id')))->update(array('select_status' => 0));
         $addressdetails = DB::table('user_address')->where(array('address_id' => $request->addressid))->first();
         
         $html = '<div class="mb-3">
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
                    </div>';
            $address = $addressdetails->house_no.', '.$addressdetails->society.' '.$addressdetails->landmark.' '.$addressdetails->landmark.'  -'.$addressdetails->pincode.' '.$addressdetails->state;
            $info = array('html' => $html,'address' => $address);
            echo json_encode($info);
    }
        

    public function addtobag(Request $request)
    { 
      $exist = DB::table('cart')->where(array('product_id' => $request->pid,'user_id' => $request->userid,'varient_id' =>  $request->varient_id))->first();

      if(!empty($exist->cart_id))
      {
          echo 2;
      }else
      {
          $cartref = 'CA00'.session('user_id');
          $insertarray =  array(
                          'store_id' => $request->store_id,
                          'cartref'  => $cartref,
                          'product_id' => $request->pid,
                          'user_id'    => $request->user_id,
                          'qty'        => $request->qty,
                          'varient_id' => $request->varient_id
                      );
          $insert = DB::table('cart')->insert($insertarray);

          if($insert == 1)
          {
              echo 1;
          }else
          { 
              echo 0;
          }
      }

      
      
    }
    public function removecartitem(Request $request)
    {
        $cartremove = DB::table('cart')->where(array('cart_id' => $request->cartid))->delete();
        if($cartremove == 1)
        {
            echo 1;

        }else
        {
            echo 0;
        }
    }
}