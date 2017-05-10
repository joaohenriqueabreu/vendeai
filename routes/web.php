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
        Route::get('unauthorized', 'PageController@unauthorized')->name('pages.403');
        Route::get('notfound', 'PageController@notFound')->name('pages.404');

        // Provider
        Route::resource('providers', 'Provider\ProviderController', array('except' => array('index')));

        // Products
        Route::resource('providers.products', 'Provider\ProviderProductController', array('except' => array('index')));

        // Reseller
        Route::resource('resellers', 'Reseller\ResellerController', array('except' => array('index')));

        // Store
        Route::resource('resellers.products', 'Reseller\ResellerProductController', array('only' => array('index')));

        // Sales
        Route::resource('resellers.sales', 'Reseller\ResellerSaleController', array('only' => array('index')));
        Route::resource('providers.sales', 'Provider\ProviderSaleController', array('only' => array('index')));

        // Customer
        Route::resource('customers', 'CustomerController');

        // Sales
        Route::resource('resellers.products.sales', 'Reseller\ResellerProductSaleController');
        Route::resource('providers.products.sales', 'Provider\ProviderProductSaleController', array('only' => array('index')));

        // Deliveries
        Route::resource('resellers.products.sales.deliveries', 'Reseller\ResellerProductSaleDeliveryController');
        Route::resource('providers.products.sales.deliveries', 'Provider\ProviderProductSaleDeliveryController');
        Route::resource('providers.products.sales.deliveries.destinations', 'Provider\ProviderProductSaleDeliveryDestinationController');

        // Payments
        Route::resource('resellers.products.sales.payments', 'Reseller\ResellerProductSalePaymentController');
        Route::resource('provider.products.sales.payments', 'Provider\ProviderProductSalePaymentController');
        Route::resource('customer.products.sales.payments', 'Customer\CustomerProductSalePaymentController');

        // Accounts
        Route::resource('resellers.accounts', 'Reseller\ResellerAccountController', array('except' => array('index')));
        Route::resource('providers.accounts', 'Provider\ProviderAccountController', array('except' => array('index')));

        // Custom routes
        Route::post('resellers/{reseller}/products/{product}', 'Reseller\ResellerProductController@match')->name('resellers.products.match');
        Route::delete('resellers/{reseller}/products/{product}', 'Reseller\ResellerProductController@unmatch')->name('resellers.products.unmatch');
        Route::get('resellers/{reseller}/products/search/{query?}', 'Reseller\ResellerProductController@search')->name('resellers.products.search');
        Route::get('resellers/{reseller}/products/search/reset', 'Reseller\ResellerProductController@searchReset')->name('resellers.products.search.reset');
        Route::get('resellers/{reseller}/products/search/new', 'Reseller\ResellerProductController@searchNew')->name('resellers.products.search.new');
        Route::get('resellers/{reseller}/products/search/category/{id}', 'Reseller\ResellerProductController@searchCategory')->name('resellers.products.search.category');

        Route::get('resellers/{reseller}/stores/new','Reseller\ResellerController@requestStore')->name('resellers.stores.new');
        Route::get('resellers/{reseller}/stores/update','Reseller\ResellerController@updateStore')->name('resellers.stores.update');
        Route::get('resellers/{reseller}/stores/requested','Reseller\ResellerController@storeRequested')->name('resellers.stores.requested');
        Route::get('resellers/{reseller}/stores/updated','Reseller\ResellerController@storeUpdated')->name('resellers.stores.updated');
        Route::get('resellers/{reseller}/stores/info','Reseller\ResellerController@storeInfo')->name('resellers.stores.info');


        Route::group(['middleware' => 'admin'], function () {

            Route::resource('sales', 'SaleController', array('only' => array('index', 'edit', 'update', 'delete')));
            Route::resource('deliveries', 'DeliveryController', array('only' => array('index', 'edit', 'update', 'delete')));
            Route::resource('accounts', 'AccountController', array('only' => array('index', 'edit', 'update', 'delete')));

            Route::resource('resellers', 'Reseller\ResellerController', array('only' => array('index')));
            Route::resource('providers', 'Provider\ProviderController', array('only' => array('index')));

            Route::resource('providers.products', 'Provider\ProviderProductController', array('only' => array('index')));

            Route::resource('admin', 'AdminController');
            Route::get('admin/mvp/info','AdminController@mvp')->name('admin.mvp.info');
        });

    });

    Auth::routes();
});

Route::get('/', 'PageController@landing')->name('pages.landing');
Route::get('revendedores', 'PageController@reseller')->name('pages.reseller');
Route::get('revendedores/novo', 'PageController@newReseller')->name('pages.reseller.new');

Route::get('parceiros', 'PageController@provider')->name('pages.provider');
Route::get('parceiros/novo', 'PageController@newProvider')->name('pages.provider.new');



