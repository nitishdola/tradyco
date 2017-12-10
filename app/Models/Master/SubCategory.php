<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $fillable = array('name', 'category_id', 'slug', 'sub_category_image_path', 'status');
	protected $table    = 'sub_categories';
    protected $guarded  = ['_token'];

    public static $rules = [
    	'slug' 						=>  'required|unique:sub_categories,slug',
    	'name' 						=>  'required|max:127',
    	'category_id' 				=>  'required|exists:categories,id',
    	'sub_category_image' 		=>  'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ];

    public function category() {
        return $this->belongsTo('App\Models\Master\Category', 'category_id');
    }
}
