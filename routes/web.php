<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/', 'HomepageController@index');
  //Route::get('/admin', 'AdminAuth\LoginController@login');

  Route::get('/packages', ['as'=>'user.packages', 'uses'=>'HomepageController@packages']);
  Route::get('/freeuser', ['as'=>'user.free', 'uses'=>'HomepageController@free']);
  Route::post('/freeuser_registered', ['as'=>'user.freereg', 'uses'=>'HomepageController@freereg']);
  Route::get('/paiduser', ['as'=>'user.paid', 'uses'=>'HomepageController@paid']);
  Route::post('/paiduser_payment', ['as'=>'user.paidreg', 'uses'=>'HomepageController@paidreg']);
  Route::post('/paiduser_registered', ['as'=>'user.paymentsel', 'uses'=>'HomepageController@paymentsel']);

  //Route::auth();
  

Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'employee'], function () {
  Route::get('/login', 'EmployeeAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'EmployeeAuth\LoginController@login');
  Route::post('/logout', 'EmployeeAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'EmployeeAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'EmployeeAuth\RegisterController@register');

  Route::post('/password/email', 'EmployeeAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'EmployeeAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'EmployeeAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'EmployeeAuth\ResetPasswordController@showResetForm');
});

/*Route::group(['prefix' => 'customer'], function () {
  Route::get('/login', 'CustomerAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'CustomerAuth\LoginController@login');
  Route::post('/logout', 'CustomerAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'CustomerAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'CustomerAuth\RegisterController@register');

  Route::post('/password/email', 'CustomerAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'CustomerAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'CustomerAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'CustomerAuth\ResetPasswordController@showResetForm');
});*/

Route::group(['middleware' => ['web']], function () {

  Route::get('/login', ['uses'=>'Auth\LoginController@login']);
  Route::get('/logout', ['as'=>'user.logout', 'uses'=>'Auth\LoginController@logout']);

  Auth::routes();

  Route::get('/home', ['as'=>'user.home', 'uses'=>'HomepageController@viewUserDashboard']);

  Route::group(['prefix' => 'profile'], function () {
    Route::get('/', [
        'as' => 'user.profile.view',
        'uses' => 'User\UsersController@viewProfile'
    ]);

    Route::get('/edit', [
        'as' => 'user.profile.edit',
        'uses' => 'User\UsersController@editProfile'
    ]);

    Route::post('/update', [
        'as' => 'user.profile.update',
        'uses' => 'User\UsersController@updateProfile'
    ]);


  });
});
