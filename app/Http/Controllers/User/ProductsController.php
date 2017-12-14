<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\User\Products;
use App\Models\Master\Category;
use App\Models\User\Gallery;
use App\Models\Master\SubCategory;
use App\Helpers\UserHelper;
use DB, Validator, Redirect, Crypt, Session;

class ProductsController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
    	$id=UserHelper::getUserInfo()->id;
        $products= Products::where('user_id',$id)->get();
        $profile_type   = UserHelper::getUserInfo()->type;

    	return view('user.products.index', compact('profile_type','products'));
    }

    public function create() {
        $category = Category::get();
    	$profile_type   = UserHelper::getUserInfo()->type;
    	return view('user.products.create', compact('category', 'profile_type'));
    }
     public function forward(Request $request) {
        $category_id = $request->category_id;
        $sub_category = SubCategory::where('category_id',$category_id)->get();
        $profile_type   = UserHelper::getUserInfo()->type;
        return view('user.products.forward', compact('sub_category', 'category_id', 'profile_type'));
    }

    public function save(Request $request) {
    	$data = $request->all(); 

        $slug = strtolower(str_replace(' ','-',trim($request->product_name)));
        $slug = $slug.UserHelper::getUserInfo()->id;
        $count= Products::where('slug',$slug)->count();
if($count!=0){
    return Redirect::route('my.products')->withErrors('You Already Added This Product')->withInput();
}
        $data['slug'] 	= $slug;
        $data['user_id'] 		= UserHelper::getUserInfo()->id;

        $validator = Validator::make($data, Products::$rules);
        if ($validator->fails()) return Redirect::back()->withErrors($validator)->withInput();
                    
        if ($request->hasFile('product_image')) {
          
            if ($request->file('product_image')->isValid()){
                $file           = $request->file('product_image');

                $filename       = strtolower(uniqid()).'_'.$slug.'.'.$file->getClientOriginalExtension();

                $file->move('master/user/products/'.$slug,$filename);

                $data['product_image'] = 'master/user/products/'.$slug.'/'.$filename;
                //dd($data['product_image']);
            }
        }
        if ($request->hasFile('packing_details_img1')) {

            if ($request->file('packing_details_img1')->isValid()){
                $file           = $request->file('packing_details_img1');

                $filename       = strtolower(uniqid()).'_'.$slug.'.'.$file->getClientOriginalExtension();

                $file->move('master/user/products/packing_details_img1/'.$slug,$filename);

                $data['packing_details_img1'] = 'master/user/products/packing_details_img1/'.$slug.'/'.$filename;
            }
        }
        if ($request->hasFile('packing_details_img2')) {

            if ($request->file('packing_details_img2')->isValid()){
                $file           = $request->file('packing_details_img2');

                $filename       = strtolower(uniqid()).'_'.$slug.'.'.$file->getClientOriginalExtension();

                $file->move('master/user/products/packing_details_img2/'.$slug,$filename);

                $data['packing_details_img2'] = 'master/user/products/packing_details_img2/'.$slug.'/'.$filename;
            }
        }
        if ($request->hasFile('plant_image')) {

            if ($request->file('plant_image')->isValid()){
                $file           = $request->file('plant_image');

                $filename       = strtolower(uniqid()).'_'.$slug.'.'.$file->getClientOriginalExtension();

                $file->move('master/user/products/plant_image/'.$slug,$filename);

                $data['plant_image'] = 'master/user/products/plant_image/'.$slug.'/'.$filename;
            }
        }


        $message = $alert_class = '';
        if(Products::create($data)) {
            $errors = 'Product  added successfully !';
            $alert_class   = 'alert-success';
        }else{
            $errors = 'Unable to add.  !';
            $alert_class   = 'alert-danger';
        }

        return Redirect::route('my.products')->withErrors($errors)->withInput();
    }
    public function destroy($id)
    {
        Products::destroy($id);
        return redirect()->route('my.products')->withErrors('Deleted')->withInput();
    }
    public function view($slug)
    {
        $product=Products::where('slug',$slug)->first();
        $id=$product->id;
        $gallery=Gallery::where('product_id',$id)->get();
        $profile_type   = UserHelper::getUserInfo()->type;
$count=Gallery::where('product_id',$id)->count();
        return view('user.products.view', compact('profile_type','gallery','product','id','count'));
    }
}
