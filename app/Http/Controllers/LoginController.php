<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Login;
class LoginController extends Controller
{
    //
    public function test(Request $request)
    {
    	prx('heyy');
    }
    public function login(Request $request)
    {
    	$myerrors = array();
    	foreach ($request->all() as $field => $value) {
    		if (is_null($value) or empty($value)) {
    			$myerrors[$field] = " {$field} is requird";
    		}
    	}
    	if (count($myerrors)>0) {
    		return view('login',compact('myerrors'));
    	}else{
    		$login_id = $request->get('login_id');
    		$password = $request->get('password');

    		$login_count = Login::where('login_id',$login_id)->where('password',$password)->count();
    		   if ($login_count>0) {
                $request->session()->put('admin',array('login_id'=>$login_id,
            ));
    		   	return redirect()->to(route('admin.dashboard'));
    		   }else{
    		   	$myerrors['login_error'] = "Invalid Login id and password";
    		   	return view('login',compact('myerrors'));
    		   }
    	}
    }
    public function admindashboard()
    {
    	//echo "login successfully";

        check_session('admin');
        return view('admin.dashboard');
    }

    public function logout(Request $request)
    {
       
       /*$request->session()->forgat('admin');*/
       $request->session()->flush();
       return redirect()->to('/admin');
    }
}
