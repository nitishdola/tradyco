<?php

namespace App\Helpers;

use App\User;
use Auth;

class UserHelper
{
    public static function getUserInfo()
    {
        if(Auth::user()) {
        	return User::whereId(Auth::user()->id)->first();
        }
        return false;
    }
}