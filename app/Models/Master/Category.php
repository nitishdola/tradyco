<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = array('name', 'slug', 'category_image_path', 'status');
	protected $table    = 'categories';
    protected $guarded  = ['_token'];

    public static $rules = [
    	'slug' 				=>  'required|unique:categories,slug',
    	'name' 				=>  'required|max:127',
    	'category_image' 	=>  'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ];
}
