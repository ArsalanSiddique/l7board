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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');





Route::middleware("auth")->group( function() {

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
    Route::resource("/admin/users", "UserController");
    Route::resource("/admin/product/category", "CategoryController");
    Route::resource("/admin/profile", "ProfileController");
    Route::resource("/user/profile", "ProfileController");

});


