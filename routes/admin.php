<?php

Route::get('/home', function () {
	return view('admin.home');
})->name('home');

Route::get('/logoff', [
    'as' => 'logout',
    'middleware' => ['admin'],
    'uses' => 'AdminAuth\LoginController@logout'
]);

Route::group(['prefix'=>'master'], function() {
	Route::group(['prefix'=>'category'], function() {
	    Route::get('/create', [
	        'as' => 'master.category.create',
	        'middleware' => ['admin'],
	        'uses' => 'Master\Category\CategoriesController@create'
	    ]);
	    Route::post('/store', [
	        'as' => 'master.category.store',
	        'middleware' => ['admin'],
	        'uses' => 'Master\Category\CategoriesController@store'
	    ]);
	    Route::get('/', [
	        'as' => 'master.category.index',
	        'middleware' => ['admin'],
	        'uses' => 'Master\Category\CategoriesController@index'
	    ]);
	});


	Route::group(['prefix'=>'sub-category'], function() {
	    Route::get('/create', [
	        'as' => 'master.sub_category.create',
	        'middleware' => ['admin'],
	        'uses' => 'Master\Category\SubCategoriesController@create'
	    ]);
	    Route::post('/store', [
	        'as' => 'master.sub_category.store',
	        'middleware' => ['admin'],
	        'uses' => 'Master\Category\SubCategoriesController@store'
	    ]);
	    Route::get('/', [
	        'as' => 'master.sub_category.index',
	        'middleware' => ['admin'],
	        'uses' => 'Master\Category\SubCategoriesController@index'
	    ]);
	});
});
