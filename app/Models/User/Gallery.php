<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
      protected $fillable = array('product_id', 'user_id', 'photo', 'slug', 'status');
    protected $table    = 'gallery';
    protected $guarded  = ['_token'];

    public static $rules = [
        'user_id'           =>  'required|exists:users,id',
    	'slug' 	=>  'required|unique:gallery,slug',
        'photo'              =>  'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ];

}
