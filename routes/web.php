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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', 'PageController@home');

    Route::get('profile', 'PageController@profile');
    Route::get('logout', 'PageController@logout')->name('page.logout');

    // Products
    Route::resource('products', 'ProductController');

    // Provider
    Route::resource('providers', 'ProviderController');
    Route::get('providers/{id}/products', 'ProviderController@products')->name('providers.products');

    // Reseller
    Route::resource('resellers', 'ResellerController');
    Route::get('resellers/{id}/products', 'ResellerController@products')->name('resellers.products');

    Route::get('/home', 'HomeController@index');
});


Auth::routes();


