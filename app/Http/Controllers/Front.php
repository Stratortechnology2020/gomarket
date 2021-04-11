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
       
            return redirect('home')->with('success_message', 'Login Success');
            }else
            {
      
                return redirect('home')->with('error_message', 'Login Failed');
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
      
        return redirect('home');
    }
    public function home()
    {
      $vendordata = DB::table('vendor_category')->get();
      return view('grocery.home',['vendordata' => $vendordata]);
    }
}