<?php

namespace App\Http\Controllers\Master\Category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Master\SubCategory;

use DB, Validator, Redirect, Crypt, Session, Helper;

class SubCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sub_categories = Helper::allSubCategories(); 
        return view('admin.master.sub_category.index', compact('sub_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Helper::allCategories($status = 1, $list = true, $order_by = 'name');
        return view('admin.master.sub_category.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all(); 

        $slug = strtolower(str_replace(' ','-',trim($request->name)));

        $data['slug'] = $slug;

        $validator = Validator::make($data, SubCategory::$rules);
        if ($validator->fails()) return Redirect::back()->withErrors($validator)->withInput();
                    
        if ($request->hasFile('sub_category_image')) {

            if ($request->file('sub_category_image')->isValid()){
                $file           = $request->file('sub_category_image');

                $filename       = strtolower(uniqid()).'_'.$slug.'.'.$file->getClientOriginalExtension();

                $file->move('master/sub_categories/'.$slug,$filename);

                $data['sub_category_image_path'] = 'master/sub_categories/'.$slug.'/'.$filename;
            }
        }

        $message = $alert_class = '';
        if(SubCategory::create($data)) {
            $message = 'Sub Category '.$request->name.' added successfully !';
            $alert_class   = 'alert-success';
        }else{
            $message = 'Sub Category added successfully !';
            $alert_class   = 'alert-danger';
        }

        return Redirect::route('admin.master.sub_category.index')->with(['message' => $message, 'alert-class' => $alert_class]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
