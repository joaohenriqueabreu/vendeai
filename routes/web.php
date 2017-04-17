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

Route::group(['prefix' => 'v1'], function () {
    Route::group(['middleware' => 'auth'], function () {

        Route::get('/', 'PageController@home');
        Route::get('/home', 'PageController@home');

        Route::get('profile', 'PageController@profile')->name('pages.profile');
        Route::get('account', 'PageController@account')->name('pages.account');
        Route::get('logout', 'PageController@logout')->name('pages.logout');

        // Products
        Route::resource('providers.products', 'ProviderProductController');
//        Route::resource('resellers.products', 'ResellerProductController', array('only' => array('index', 'destroy')));
        Route::resource('resellers.products', 'ResellerProductController', array('only' => array('index')));

        // Provider
        Route::resource('providers', 'ProviderController');

        // Reseller
        Route::resource('resellers', 'ResellerController');

        Route::post('resellers/{reseller}/products/{product}', 'ResellerProductController@match')->name('resellers.products.match');
        Route::delete('resellers/{reseller}/products/{product}', 'ResellerProductController@unmatch')->name('resellers.products.unmatch');
        Route::get('resellers/{reseller}/products/search/{query?}', 'ResellerProductController@search')->name('resellers.products.search');
        Route::get('resellers/{reseller}/products/search/reset', 'ResellerProductController@searchReset')->name('resellers.products.search.reset');
        Route::get('resellers/{reseller}/products/search/new', 'ResellerProductController@searchNew')->name('resellers.products.search.new');

        Route::get('resellers/{reseller}/stores/new','ResellerController@requestStore')->name('resellers.stores.new');
        Route::get('resellers/{reseller}/stores/update','ResellerController@updateStore')->name('resellers.stores.update');
        Route::get('resellers/{reseller}/stores/requested','ResellerController@storeRequested')->name('resellers.stores.requested');
        Route::get('resellers/{reseller}/stores/updated','ResellerController@storeUpdated')->name('resellers.stores.updated');
        Route::get('resellers/{reseller}/stores/info','ResellerController@storeInfo')->name('resellers.stores.info');

    });

    Auth::routes();
});

Route::get('/', 'PageController@landing')->name('pages.landing');
Route::get('revendedores', 'PageController@reseller')->name('pages.reseller');
Route::get('revendedores/novo', 'PageController@newReseller')->name('pages.reseller.new');

Route::get('parceiros', 'PageController@provider')->name('pages.provider');
Route::get('parceiros/novo', 'PageController@newProvider')->name('pages.provider.new');



