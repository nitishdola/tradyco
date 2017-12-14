<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Helpers\UserHelper;
use DB, Validator, Redirect, Crypt, Session;

class UsersController extends Controller
{
    public function viewProfile() {
    	$user_info = UserHelper::getUserInfo();
    	dump($user_info);
    }

    public function editProfile() {
    	$user_info = UserHelper::getUserInfo();
        $profile_type   = UserHelper::getUserInfo()->type;
    	return view('user.registered.edit_profile', compact('user_info','profile_type'));
    }

    public function updateProfile(Request $request) {
    	
    	$rules = [
	        'firstname'		=>  'required|string',
	    	'lastname'		=>  'required|string',
	    ];

        $validator = Validator::make($data = $request->all(), $rules);
        if ($validator->fails()) return Redirect::back()->withErrors($validator)->withInput();

        $user = UserHelper::getUserInfo();

        $message = '';

        $user->fill($data);
        if($user->save()) {
            $message .= 'Profile Updated Successfully !';
        }else{
            $message .= 'Unable to update  profile !';
        }

        return Redirect::route('user.home')->with('msg', $message);
    }
}
