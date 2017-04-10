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
    Route::group(['prefix' => 'v1'], function () {

        Route::get('/', 'PageController@home');

        Route::get('profile', 'PageController@profile')->name('pages.profile');
        Route::get('account', 'PageController@account')->name('pages.account');
        Route::get('logout', 'PageController@logout')->name('pages.logout');

        // Products
        Route::resource('products', 'ProductController');

        // Provider
        Route::resource('providers', 'ProviderController');
        Route::get('providers/{provider}/products', 'ProviderController@products')->name('providers.products');

        // Reseller
        Route::resource('resellers', 'ResellerController');
        Route::get('resellers/{reseller}/products', 'ResellerController@products')->name('resellers.products');
        Route::get('resellers/{reseller}/products/search', 'ResellerController@search')->name('resellers.products.search');
        Route::get('resellers/{reseller}/products/search/reset', 'ResellerController@searchReset')->name('resellers.products.search.reset');
        Route::get('resellers/{reseller}/products/search/new', 'ResellerController@searchNew')->name('resellers.products.search.new');
        Route::get('resellers/{reseller}/products/{product}', 'ResellerController@match')->name('resellers.products.match');
        Route::delete('resellers/{reseller}/products/{product}', 'ResellerController@unmatch')->name('resellers.products.unmatch');

        Route::get('/home', 'HomeController@index');
    });
});

Route::get('/', 'PageController@landing')->name('pages.landing');
Route::get('revendedor', 'PageController@reseller')->name('pages.reseller');
Route::get('parceiro', 'PageController@provider')->name('pages.provider');

Auth::routes();


