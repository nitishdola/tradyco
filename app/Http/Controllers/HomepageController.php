<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Helpers\UserHelper;
use DB, Validator, Redirect, Auth;

use Mail;
use App\User;

//use App\Http\Controllers\Carbon\Carbon;

class HomepageController extends Controller
{

    
    public function index()
    {
        return view('user.index');
    }
    public function packages()
    {
        return view('user.packages');
    }
    public function free()
    {
        return view('user.freereg');
    }
    public function paid()
    {
        return view('user.paidreg');
    }
    public function freereg(Request $request)
    {
        $firstname = $request->firstname;
        $lastname = $request->lastname;
        $email = $request->email;
        $password = $request->password;
        $password = bcrypt($password);
        $count = User::where('email',$email)->count();
        if($count>0){
        	return view('user.freereg')->with('msg','Email Id Already in use');
        }
        $data['firstname']  = $firstname;
        $data['lastname'] = $lastname;
        $data['email'] = $email;
        $data['password']  = $password;
        $data['type'] = 1;
        $data['status']  = 1;
        User::create($data);
        return view('user.freereg')->with('msg','You Have Successfully Registered');
    }
    public function paidreg(Request $request)
    {
        $firstname = $request->firstname;
        $lastname = $request->lastname;
        $email = $request->email;
        $password = $request->password;
        $password = bcrypt($password);
        $count = User::where('email',$email)->count();
        if($count>0){
        	return view('user.paidreg')->with('msg','Email Id Already in use');
        }
        return view('user.payment_select', compact('firstname','lastname','email','password'));
    }
     public function paymentsel(Request $request)
    {
        $firstname = $request->firstname;
        $lastname = $request->lastname;
        $email = $request->email;
        $password = $request->password;
        $data['firstname']  = $firstname;
        $data['lastname'] = $lastname;
        $data['email'] = $email;
        $data['password']  = $password;
        $data['type'] = 2;
        $data['status']  = 1;
        User::create($data);
        return view('user.paidreg')->with('msg','You Have Successfully Registered');
    }


    public function viewUserDashboard()
    {
        $profile_type   = UserHelper::getUserInfo()->type;
        return view('user.registered.home',compact('profile_type'));
    }
    
        
}
