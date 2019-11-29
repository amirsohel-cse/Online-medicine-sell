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

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

//frontend site
Route::get('/','HomeController@index' );
Route::get('/contact','HomeController@contact' );
Route::get('/message_order','HomeController@message_order' );


//Prescription Upload
Route::get('/upload_prescription','HomeController@upload_prescription' );
Route::post('/save_prescription','HomeController@save_prescription' );

//My account
Route::get('/profile','HomeController@profile' );
Route::post('/profile_update/{id}','HomeController@profile_update' );
Route::get('/my_orders','HomeController@my_orders' );
// show category wise product here
Route:: get('/product_by_category/{category_id}','HomeController@show_product_by_category');
Route:: get('/product_by_manufacture/{manufacture_id}','HomeController@show_product_by_manufacture');
Route:: get('/view_product/{product_id}','HomeController@product_details_by_id');

// Cart routes are here
Route:: post('/add_to_cart','CartController@add_to_cart');
Route:: post('/add_to_cart_home/{id}','CartController@add_to_cart_home');
Route:: get('/show_cart','CartController@show_cart');
Route:: get('/delete_to_cart/{id}','CartController@delete_to_cart');
Route:: post('/update_cart/{id}','CartController@update_cart');

//Checkout routes are here
Route:: get('/login_check','CheckoutController@login_check');
Route:: post('/customer_registration','CheckoutController@customer_registration');
Route:: get('/checkout','CheckoutController@checkout');
Route:: post('/save_shipping_details','CheckoutController@save_shipping_details');
Route:: post('/customer_login','CheckoutController@customer_login');

//Customer Login Logout
Route:: get('/customer_logout','CheckoutController@customer_logout');

//Payment
Route:: get('/payment','CheckoutController@payment');
Route:: post('/place_order','CheckoutController@place_order');

//Backend Site
Route:: get('/logout','SuperAdminController@logout');
Route:: get('/admin','AdminController@index');
Route:: get('/dashboard','SuperAdminController@index');
Route:: post('/admin_dashboard','AdminController@dashboard');

//Category related route
Route:: get('/add_category','CategoryController@index');
Route:: get('/all_category','CategoryController@all_category');
Route:: post('/save_category','CategoryController@save_category');
Route:: get('/unactive_category/{category_id}','CategoryController@unactive_category');
Route:: post('/update_category/{category_id}','CategoryController@update_category');
Route:: get('/active_category/{category_id}','CategoryController@active_category');
Route:: get('/delete_category/{category_id}','CategoryController@delete_category');
Route:: get('/edit_category/{category_id}','CategoryController@edit_category');

//manufacture of brands routes are here
Route:: get('/add_manufacture','ManufactureController@index');
Route:: post('/save_manufacture','ManufactureController@save_manufacture');
Route:: get('/all_manufacture','ManufactureController@all_manufacture');
Route:: get('/delete_manufacture/{manufacture_id}','ManufactureController@delete_manufacture');
Route:: get('/unactive_manufacture/{manufacture_id}','ManufactureController@unactive_manufacture');
Route:: get('/active_manufacture/{manufacture_id}','ManufactureController@active_manufacture');
Route:: get('/edit_manufacture/{manufacture_id}','ManufactureController@edit_manufacture');
Route:: post('/update_manufacture/{manufacture_id}','ManufactureController@update_manufacture');

// Products routs are here
Route:: get('/add_product','ProductController@index');
Route:: post('/save_product','ProductController@save_product');
Route:: get('/all_product','ProductController@all_product');
Route:: get('/delete_product/{product_id}','ProductController@delete_product');
Route:: get('/unactive_product/{product_id}','ProductController@unactive_product');
Route:: get('/active_product/{product_id}','ProductController@active_product');
Route:: get('/edit_product/{product_id}','ProductController@edit_product');
Route:: post('/update_product/{product_id}','ProductController@update_product');

// Slider routes are here
Route:: get('/add_slider','SliderController@index');
Route:: post('/save_slider','SliderController@save_slider');
Route:: get('/all_slider','SliderController@all_slider');
Route:: get('/unactive_slider/{product_id}','SliderController@unactive_slider');
Route:: get('/active_slider/{slider_id}','SliderController@active_slider');
Route:: get('/delete_slider/{slider_id}','SliderController@delete_slider');

// Order Routes are here
Route:: get('/manage_order ','OrderController@manage_order');
Route:: get('/view_order/{view_id} ','OrderController@view_order');

//Search Controller
Route:: post('/search ','HomeController@search');

//Footer Routs are here

Route:: get('/about_us','HomeController@about_us');
Route::get('/terms','HomeController@terms');
Route::get('/partners','HomeController@partners');
Route::get('/career','HomeController@career');
