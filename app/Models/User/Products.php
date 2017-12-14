<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
      protected $fillable = array('product_name', 'user_id', 'category_id', 'sub_category_id', 'product_image', 'price', 'key_features', 'delivery_time', 'measurement_unit', 'samples', 'packing_details', 'packing_details_img1', 'packing_details_img2', 'plant_image', 'slug', 'status');
    protected $table    = 'products';
    protected $guarded  = ['_token'];

    public static $rules = [
        'user_id'           =>  'required|exists:users,id', 
    	'product_name' 	=>  'required|max:500',
    	'slug' 	=>  'required|unique:products,slug',
        'product_image'              =>  'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'packing_details_img1'              =>  'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'packing_details_img2'              =>  'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'plant_image'              =>  'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ];

}
