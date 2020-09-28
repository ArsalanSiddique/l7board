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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'webController@index');
Route::get('/about', function() {
    return view('about');
});
Route::get('/checkout', function() {
    return view('checkout');
});
Route::get('/wishlist', function() {
    return view('wishlist');
});
Route::get('/compare', function() {
    return view('compare');
});
Route::get('/faq', function() {
    return view('faq');
});
Route::get('/cart', function() {
    return view('cart');
});
Route::get('/track-order', function() {
    return view('track-order');
});
Route::get('/terms-and-conditions', function() {
    return view('terms-and-conditions');
});
Route::get('/products', function() {
    return view('products');
});
Route::get('/contact', function() {
    return view('contact');
});
Route::get('/', 'webController@index');
Route::post('/addtocart', 'webController@addtocart')->name('addtocart');
Route::get('/product/{product}/view', 'webController@singleProductShow')->name('product-view');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');





Route::middleware("auth")->group(function () {

    Route::get('/admin/dashboard', function () {
        return view("l7board.admin.dashboard");
    });

    Route::get('/user/dashboard', function () {
        return view("l7board.user.dashboard");
    });

    // Route::get('/admin/profile', function () {
    //     return view("l7board.admin.profile");
    // });

    // Route::get('/user/profile', function () {
    //     return view("l7board.user.profile");
    // });

    Route::resource("/admin/products", "ProductController");
    Route::resource("/admin/roles", "RoleController");
    Route::resource("/admin/stock", "StockController");
    Route::resource("/admin/users", "UserController");
    Route::resource("/admin/product/category", "CategoryController");
    Route::resource("/admin/profile", "ProfileController");
    Route::resource("/user/profile", "ProfileController");
});
