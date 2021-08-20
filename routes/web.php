<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;



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


Route::get('/', 'App\Http\Controllers\AppController@index')->name('index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('About', 'App\Http\Controllers\AppController@About')->name('About');
Route::get('CheckoutSuccessful', 'App\Http\Controllers\AppController@CheckoutSuccessful')->name('CheckoutSuccessful');
Route::get('Confirmation', 'App\Http\Controllers\AppController@Confirmation')->name('Confirmation');
Route::get('Contact', 'App\Http\Controllers\AppController@Contact')->name('Contact');
Route::get('DeliveryMethods', 'App\Http\Controllers\AppController@DeliveryMethods')->name('DeliveryMethods');
Route::get('Error404', 'App\Http\Controllers\AppController@Error404')->name('Error404');
Route::get('LoginForm', 'App\Http\Controllers\AppController@LoginForm')->name('LoginForm');
Route::get('PaymentMethods', 'App\Http\Controllers\AppController@PaymentMethods')->name('PaymentMethods');
Route::get('Products_a4Columns', 'App\Http\Controllers\AppController@Products_a4Columns')->name('Products_a4Columns');
Route::get('Blog', 'App\Http\Controllers\AppController@blog')->name('Blog');

Route::get('chi-tiet-san-pham-{id_product?}', 'App\Http\Controllers\ProductController@productDetails')->name('productDetails');
Route::get('danh-sach-san-pham', 'App\Http\Controllers\ProductController@listProducts')->name('listProducts');
Route::post('tim-kiem-san-pham', 'App\Http\Controllers\ProductController@filterProduct')->name('filterProduct');
Route::post('tim-kiem', 'App\Http\Controllers\ProductController@search')->name('search');

Auth::routes();

#Login
Route::get('login2', 'App\Http\Controllers\Auth\LoginController@showLoginForm2')->name('login2');
Route::post('login2', 'App\Http\Controllers\Auth\LoginController@login2');

#Logout
Route::post('logout2', 'App\Http\Controllers\Auth\LoginController@logout2')->name('logout2');

#Register
Route::get('register2', 'App\Http\Controllers\Auth\RegisterController@showRegistrationForm2')->name('register2');
Route::post('register2', 'App\Http\Controllers\Auth\RegisterController@register2');

#Reserpassword
Route::get('password/reset2', 'App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm2')->name('password.request2');
Route::post('password/email2', 'App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail2')->name('password.email2');
Route::get('password/reset/{token}2', 'App\Http\Controllers\Auth\ResetPasswordController@showResetForm2')->name('password.reset2');
Route::post('password/reset2', 'App\Http\Controllers\Auth\ResetPasswordController@reset2')->name('password.update2');

#Confirmpassword
Route::get('password/confirm2', 'App\Http\Controllers\Auth\ConfirmPasswordController@showConfirmForm2')->name('password.confirm2');
Route::post('password/confirm2', 'App\Http\Controllers\Auth\ConfirmPasswordController@confirm2');

#Verification
Route::get('email/verify2', 'App\Http\Controllers\Auth\VerificationController@show2')->name('verification.notice2');
Route::get('email/verify/{id}/{hash}2', 'App\Http\Controllers\Auth\VerificationController@verify2')->name('verification.verify2');
Route::post('email/resend2', 'App\Http\Controllers\Auth\VerificationController@resend2')->name('verification.resend2');


#ShoppingCart
Route::get('add-to-cart/{id}', 'App\Http\Controllers\CartController@addToCart')->name('add.to.cart');
Route::POST('addtocart-ajax', 'App\Http\Controllers\CartController@addToCartAjax')->name('addtocart.ajax');
Route::POST('removecart-ajax', 'App\Http\Controllers\CartController@removeCartAjax')->name('removecart.ajax');
Route::POST('update-cart', 'App\Http\Controllers\CartController@updateCartAjax')->name('updatecart.ajax');
Route::get('ShoppingCart', 'App\Http\Controllers\CartController@ShoppingCart')->name('ShoppingCart');

#Customers-infor
Route::get('customers-info', 'App\Http\Controllers\CustomerSubmitController@Create')->name('add.customer.info');
Route::post('customers-info-ajax', 'App\Http\Controllers\CustomerSubmitController@addCustomerinfo')->name('customersinfo.ajax');

#History-Order
Route::get('history-order', 'App\Http\Controllers\OrderCustomerController@ShowOrder')->name('ShowOrder');
Route::post('payment', 'App\Http\Controllers\OrderCustomerController@payment')->name('payment');

#History-OrderDetail
Route::get('history-order-detail', 'App\Http\Controllers\OrderDetailCustomerController@ShowOrderDetail')->name('showOrderdetail');
Route::post('view-detail', 'App\Http\Controllers\OrderDetailCustomerController@orderdetail')->name('vieworderdetail');


#Admin
// Route::get('/admin', 'App\Http\Controllers\Admin\AppController@showindex');


#Tickets
Route::get('/contact', 'App\Http\Controllers\TicketsController@create');
Route::post('/post', 'App\Http\Controllers\TicketsController@store');
Route::get('/tickets', 'App\Http\Controllers\TicketsController@index');


Route::get('test', function () {
    return view('Tickets.index');
});


Route::get('testadmin', function () {
    return view('admin.page404');
});

Route::get('testorder', function () {
    return view('HistoryOrder');
});
