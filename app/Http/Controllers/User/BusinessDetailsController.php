<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\User\Business\BusinessDetail;
use App\Helpers\UserHelper;
use DB, Validator, Redirect, Crypt, Session;

class BusinessDetailsController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
    	$user_info = UserHelper::getUserInfo();
    	$business_details = BusinessDetail::where('user_id', $user_info->id)->first();
        $count = BusinessDetail::where('user_id', $user_info->id)->count();
        $profile_type   = UserHelper::getUserInfo()->type;
    	return view('user.registered.business_details.index', compact('business_details','profile_type','count'));
    }

    public function create() {
    	$default_email 	= UserHelper::getUserInfo()->email;
    	$business_types = BusinessDetail::$business_types;
    	$profile_type   = UserHelper::getUserInfo()->type;
    	return view('user.registered.business_details.create', compact('default_email', 'business_types', 'profile_type'));
    }

    public function save(Request $request) {
    	$data = $request->all(); 

        $business_slug = strtolower(str_replace(' ','-',trim($request->business_name)));

        $data['business_slug'] 	= $business_slug;
        $data['user_id'] 		= UserHelper::getUserInfo()->id;

        $validator = Validator::make($data, BusinessDetail::$rules);
        if ($validator->fails()) return Redirect::back()->withErrors($validator)->withInput();
                    
        if ($request->hasFile('logo')) {

            if ($request->file('logo')->isValid()){
                $file           = $request->file('logo');

                $filename       = strtolower(uniqid()).'_'.$business_slug.'.'.$file->getClientOriginalExtension();

                $file->move('master/user/business_profile/'.$business_slug,$filename);

                $data['logo'] = 'master/user/business_profile/'.$business_slug.'/'.$filename;
            }
        }

        $message = $alert_class = '';
        if(BusinessDetail::create($data)) {
            $message = 'Business Profile  added successfully !';
            $alert_class   = 'alert-success';
        }else{
            $message = 'Unable to add.  !';
            $alert_class   = 'alert-danger';
        }

        return Redirect::route('user.business_details.index')->with(['message' => $message, 'alert-class' => $alert_class]);
    }

    public function edit() {

        $user_info = UserHelper::getUserInfo();
        $business_details = BusinessDetail::where('user_id', $user_info->id)->first();
        
        $business_types = BusinessDetail::$business_types;
        $profile_type   = UserHelper::getUserInfo()->type;
        return view('user.registered.business_details.edit', compact('business_types', 'profile_type', 'business_details'));
    }

    public function update(Request $request) { 
        $user_info = UserHelper::getUserInfo();
        $business_details = BusinessDetail::where('user_id', $user_info->id)->first();
        $id = $business_details->id;

        $business_slug = strtolower(str_replace(' ','-',trim($request->business_name)));

        $data = $request->all();

        $data['business_slug']  = $business_slug;
        $data['user_id']        = UserHelper::getUserInfo()->id;

        $rules = BusinessDetail::$rules;
        $rules['business_slug']   = $rules['business_slug'].',' . $id;

        
        //dd($rules);
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) return Redirect::back()->withErrors($validator)->withInput();

        $message = '';

        $business_details->fill($data);
        if($business_details->save()) {
            $message .= 'Business Details Updated Successfully !';
        }else{
            $message .= 'Unable to update  details !';
        }

        return Redirect::route('user.business_details.index')->with('message', $message);
    }

}
