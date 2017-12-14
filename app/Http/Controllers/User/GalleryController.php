<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\User\Products;
use App\Models\User\Gallery;
use App\Helpers\UserHelper;
use DB, Validator, Redirect, Crypt, Session;

class GalleryController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }


    public function save(Request $request) {
    	$data = $request->all(); 

        $time = date('hi');
        $slug = $time.UserHelper::getUserInfo()->id;
        
        $data['slug'] 	= $slug;
        $data['user_id'] 		= UserHelper::getUserInfo()->id;
        
        $product=Products::where('id',$request->product_id)->first();
        $name= $product->slug;
        $validator = Validator::make($data, Gallery::$rules);
        if ($validator->fails()) return Redirect::back()->withErrors($validator)->withInput();
                    
        if ($request->hasFile('photo')) {
          
            if ($request->file('photo')->isValid()){
                $file           = $request->file('photo');

                $filename       = strtolower(uniqid()).'_'.$slug.'.'.$file->getClientOriginalExtension();

                $file->move('master/user/products/'.$name.'/gallery',$filename);

                $data['photo'] = 'master/user/products/'.$name.'/gallery/'.$filename;
                //dd($data['product_image']);
            }
        }
        


        $message = $alert_class = '';
        if(Gallery::create($data)) {
            $errors = 'Photo  added successfully !';
            $alert_class   = 'alert-success';
        }else{
            $errors = 'Unable to add.  !';
            $alert_class   = 'alert-danger';
        }

        return Redirect::route('product.view',$name)->withErrors($errors)->withInput();
    }
    public function destroy($id)
    {
        $gallery=Gallery::where('id',$id)->first();
        $productid= $gallery->product_id;
        $product=Products::where('id',$productid)->first();
        $name= $product->slug;
        Gallery::destroy($id);
        return redirect()->route('product.view',$name)->withErrors('Deleted')->withInput();
    }
    
}
