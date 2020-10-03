<?php

use Illuminate\Support\Facades\Route;

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
Route::prefix('admin')->group(function () {
 Route::middleware('auth:admin')->group(function(){

   //dashboard
   Route::get('/', 'DashboardController@index');

   //products
   
   Route::resource('/products','ProductController');
   Route::resource('/orders','orderController');
   Route::resource('/users','userController');
   
   
   Route::get('/pending{id}','orderController@pending')->name('order.pending');
   Route::get('/confirm{id}','orderController@confirm')->name('order.confirm');
        
    });
    Route::resource('/adminUsers','adminUsersController');
    Route::get('/adminUsers','adminUsersController@logout')->name('logout');



});

/////////// end admin routes


/////////////start front routes

Route::get('/home','front\HomeController@index');
//user registration
Route::get('/user/signup', 'front\RegitsrationController@index')->name('userSignup');
Route::post('/user/signup', 'front\RegitsrationController@store')->name('userStore');
//user login
Route::get('/user/login', 'front\loginController@index')->name('userLogin');
Route::post('/user/login', 'front\loginController@store')->name('login');
Route::get('/user/logout', 'front\loginController@logout')->name('userLogout');
////user profile
Route::get('/user/profile','front\profileController@index');
Route::get('/user/order/{id}','front\profileController@show');
/////// shoppingCart
Route::resource('/shoppingCart','front\cartController');
Route::resource('/checkOut','front\checkoutController');








