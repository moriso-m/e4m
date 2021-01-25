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

Route::get('/{category?}',[
    'uses' => 'HomeController@index',
    'as' => 'index'
]);

Route::any('/auth/login',[
    'uses' => 'HomeController@login',
    'as' => 'login'
]);

Route::any('/auth/logout',[
    'uses' => 'HomeController@logout',
    'as' => 'logout'
]);

Route::any('/auth/register',[
    'uses' => 'HomeController@register',
    'as' => 'register'
]);

Route::group(['prefix' => 'shop',], function () {
    Route::get('/services', function () {
        return view('services');
    });

    Route::get('/about', function () {
        return view('about');
    });

    Route::any('/contact',[
        'uses' => 'HomeController@contact',
        'as' => 'contact'
    ]);

    Route::get('/products', function () {
        return view('products');
    });

});

Route::group(['prefix' => 'root','middleware' => 'auth'], function () {

    Route::get('/home', [
        'uses' => 'AdminController@admin_home',
        'as' => 'admin.home',
    ]);

    Route::get('/product_categories', [
        'uses' => 'ProductSetup@categories',
        'as' => 'product_categories',
    ]);

    Route::post('/new_update_categories',[
        'uses' => 'ProductSetup@new_update_categories',
        'as' => 'new_update_categories'
    ]);

    Route::get('/products_mgt',[
        'uses' => 'ProductSetup@products_mgt',
        'as' => 'products_mgt'
    ]);

    Route::post('/new_products',[
        'uses' => 'ProductSetup@new_products',
        'as' => 'new_products'
    ]);

    Route::any('/users',[
        'uses' => 'AdminController@users',
        'as' => 'users'
    ]);

    Route::any('/new_update_users',[
        'uses' => 'AdminController@new_update_users',
        'as' => 'new_update_users'
    ]);
});
