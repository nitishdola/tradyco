<?php

namespace App\Models\User\Business;

use Illuminate\Database\Eloquent\Model;

class BusinessDetail extends Model
{
    protected $fillable = array('user_id', 'business_name', 'business_slug', 'business_type', 'business_address', 'phone_1', 'phone_2', 'mobile_number', 'fax_number', 'business_email', 'business_website', 'logo', 'business_description', 'year_of_establishment', 'registration_number', 'sales_volume', 'number_of_staff', 'ceo_name', 'status');
	protected $table    = 'business_details';
    protected $guarded  = ['_token'];

    public static $rules = [
        'user_id'           =>  'required|exists:users,id', 
    	'business_name' 	=>  'required|max:500',
    	'business_slug' 	=>  'required|unique:business_details,business_slug',
    	'business_type' 	=>  'required|in:Retailer,Wholesaler,Distributor,Supplier,Manufacturer',
    	'business_email' 	=>  'email',
        'logo'              =>  'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ];

    public static $business_types = ['Retailer' => 'Retailer','Wholesaler' => 'Wholesaler','Distributor' => 'Distributor','Supplier' => 'Supplier','Manufacturer' => 'Manufacturer'];
}
