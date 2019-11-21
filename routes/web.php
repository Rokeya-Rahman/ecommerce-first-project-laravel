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

Route::get('/', [
    'uses'  => 'NewShopController@index',
    'as'    => '/'
]);

Route::get('/category-product/{id}', [
    'uses'  => 'NewShopController@categoryProduct',
    'as'    => 'category-product'
]);

Route::get('/product-details/{id}/{name}', [
    'uses'  => 'NewShopController@productDetails',
    'as'    => 'product-details'
]);

Route::post('/cart/add', [
    'uses'  => 'CartController@addToCart',
    'as'    => 'add-to-cart'
]);

Route::get('/cart/show', [
    'uses'  => 'CartController@showCart',
    'as'    => 'show-cart'
]);

Route::get('/cart/delete/{id}', [
    'uses'  => 'CartController@deleteCart',
    'as'    => 'delete-cart-item'
]);

Route::post('/cart/update', [
    'uses'  => 'CartController@updateCart',
    'as'    => 'update-cart'
]);

Route::get('/checkout', [
    'uses'  => 'CheckoutController@index',
    'as'    => 'checkout'
]);

Route::post('/checkout/registration', [
    'uses'  => 'CheckoutController@customerSignUp',
    'as'    => 'customer-sign-up'
]);

Route::post('/checkout/customer-login', [
    'uses'  => 'CheckoutController@customerLoginCheck',
    'as'    => 'customer-login'
]);

Route::post('/checkout/customer-logout', [
    'uses'  => 'CheckoutController@customerLogout',
    'as'    => 'customer-logout'
]);

Route::get('/checkout/new-customer-login', [
    'uses'  => 'CheckoutController@newCustomerLogout',
    'as'    => 'new-customer-login'
]);

Route::get('/checkout/shipping', [
    'uses'  => 'CheckoutController@shippingForm',
    'as'    => 'checkout-shipping'
]);

Route::post('/shipping/save', [
    'uses'  => 'CheckoutController@saveShippingInfo',
    'as'    => 'new-shipping'
]);

Route::get('/checkout/payment', [
    'uses'  => 'CheckoutController@paymentForm',
    'as'    => 'checkout-payment'
]);

Route::post('/checkout/order', [
    'uses'  => 'CheckoutController@newOrder',
    'as'    => 'new-order'
]);

Route::get('/complete/order', [
    'uses'  => 'CheckoutController@completeOrder',
    'as'    => 'complete-order'
]);





Route::get('/category/add', [
    'uses'  => 'CategoryController@index',
    'as'    => 'add-category'
]);

Route::post('/category/save', [
    'uses'  => 'CategoryController@saveCategory',
    'as'    => 'new-category'
]);

Route::get('/category/manage', [
    'uses'  => 'CategoryController@manageCategory',
    'as'    => 'manage-category'
]);

Route::get('/category/unpublished/{id}', [
    'uses'  => 'CategoryController@unpublishedCategory',
    'as'    => 'unpublished-category'
]);

Route::get('/category/published/{id}', [
    'uses'  =>'CategoryController@publishedCategory',
    'as'    =>'publish-category'
]);

Route::get('/category/edit/{id}', [
    'uses'  =>'CategoryController@editCategory',
    'as'    =>'edit-category'
]);

Route::post('/category/update', [
    'uses'  =>'CategoryController@updateCategory',
    'as'    =>'update-category'
]);

Route::get('/category/delete/{id}', [
    'uses'  =>'CategoryController@deleteCategory',
    'as'    =>'delete-category'
]);



Route::get('/brand/add', [
    'uses'  =>'BrandController@index',
    'as'    =>'add-brand'
]);

Route::post('/brand/save', [
    'uses'  =>'BrandController@saveBrand',
    'as'    =>'new-brand'
]);

Route::get('/brand/manage', [
    'uses'  =>'BrandController@manageBrand',
    'as'    =>'manage-brand'
]);

Route::get('/brand/unpublished/{id}', [
    'uses'  => 'BrandController@unpublishedBrand',
    'as'    => 'unpublished-brand'
]);

Route::get('/brand/published/{id}', [
    'uses'  =>'BrandController@publishedBrand',
    'as'    =>'publish-brand'
]);

Route::get('/brand/edit/{id}', [
    'uses'  =>'BrandController@editBrand',
    'as'    =>'edit-brand'
]);

Route::post('/brand/update', [
    'uses'  =>'BrandController@updateBrand',
    'as'    =>'update-brand'
]);

Route::get('/brand/delete/{id}', [
    'uses'  =>'BrandController@deleteBrand',
    'as'    =>'delete-brand'
]);



Route::get('/product/add', [
    'uses'  =>'ProductController@index',
    'as'    =>'add-product'
]);

Route::post('/product/save', [
    'uses'  =>'ProductController@saveProduct',
    'as'    =>'new-product'
]);

Route::get('/product/manage', [
    'uses'  =>'ProductController@manageProduct',
    'as'    =>'manage-product'
]);

Route::get('/product/unpublished/{id}', [
    'uses'  => 'ProductController@unpublishedProduct',
    'as'    => 'unpublished-product'
]);

Route::get('/product/published/{id}', [
    'uses'  =>'ProductController@publishedProduct',
    'as'    =>'published-product'
]);

Route::get('/product/edit/{id}', [
    'uses'  =>'ProductController@editProduct',
    'as'    =>'edit-product'
]);

Route::post('/product/update', [
    'uses'  =>'ProductController@updateProduct',
    'as'    =>'update-product'
]);

Route::get('/product/delete/{id}', [
    'uses'  =>'ProductController@deleteProduct',
    'as'    =>'delete-product'
]);

Route::get('/order/manage-order', [
    'uses'       => 'OrderController@manageOrderInfo',
    'as'         => 'manage-order',
    'middleware' => 'ManageOrder'
]);

Route::group(['middleware' => 'ManageOrder'], function () {


    Route::get('/order/view-order-detail/{id}', [
        'uses'  =>  'OrderController@viewOrderDetail',
        'as'    =>  'view-order-detail'
    ]);

    Route::get('/order/view-order-invoice/{id}', [
        'uses'  =>  'OrderController@viewOrderInvoice',
        'as'    =>  'view-order-invoice'
    ]);

    Route::get('/order/download-order-invoice/{id}', [
        'uses'  =>  'OrderController@downloadOrderInvoice',
        'as'    =>  'download-order-invoice'
    ]);
});





Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
