<?php

namespace App\Http\Controllers\Master\Category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Master\Category;

use DB, Validator, Redirect, Crypt, Session, Helper;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Helper::allCategories();
        return view('admin.master.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.master.category.create');
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

        $validator = Validator::make($data, Category::$rules);
        if ($validator->fails()) return Redirect::back()->withErrors($validator)->withInput();
                    
        if ($request->hasFile('category_image')) {

            if ($request->file('category_image')->isValid()){
                $file           = $request->file('category_image');

                $filename       = strtolower(uniqid()).'_'.$slug.'.'.$file->getClientOriginalExtension();

                $file->move('master/categories/'.$slug,$filename);

                $data['category_image_path'] = 'master/categories/'.$slug.'/'.$filename;
            }
        }

        $message = $alert_class = '';
        if(Category::create($data)) {
            $message = 'Category '.$request->name.' added successfully !';
            $alert_class   = 'alert-success';
        }else{
            $message = 'Category added successfully !';
            $alert_class   = 'alert-danger';
        }

        return Redirect::route('admin.master.category.index')->with(['message' => $message, 'alert-class' => $alert_class]);
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
