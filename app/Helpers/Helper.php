<?php

namespace App\Helpers;

use App\Models\Master\Category;
use App\Models\Master\SubCategory;

class Helper
{
    public static function allCategories($status = 1, $list = false, $order_by = 'name')
    {
        $category = Category::select('name', 'id', 'category_image_path')->orderBy($order_by);
        if($list) {
        	return $category->pluck('name', 'id');
        }
        return $category->get();
    }

    public static function allSubCategories($status = 1, $list = false, $order_by = 'name', $category_id = null)
    {
        $category = SubCategory::select('name', 'id', 'sub_category_image_path')->with('category')->orderBy($order_by);
        if($category_id != null) {
        	$category = $category->where('category_id', $category_id);
        }
        if($list) {
        	return $category->pluck('name', 'id');
        }
        return $category->get();
    }
}