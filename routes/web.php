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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/news', 'HomeController@news')->name('news');
Route::get('/informations', 'HomeController@informations')->name('informations');
Route::get('/telechargement', 'HomeController@telechargement')->name('telechargement');
Route::get('/staff', 'HomeController@staff')->name('staff');
Route::get('/partenaire', 'HomeController@partenaire')->name('partenaire');
Route::get('/territoire', 'HomeController@territoire')->name('territoire');
Route::get('/nwoe', 'HomeController@nwoe')->name('nwoe');
Route::get('/onlines', 'HomeController@online')->name('onlines');
Route::get('/emblem/{id}', 'HomeController@emblem')->name('emblem');
Route::get('/vendings', 'HomeController@vendings')->name('vendings');
Route::get('/vendings/{id}', 'HomeController@vendingsItems')->name('vendingsItems');
Route::get('/callback-vote', 'HomeController@callbackVote')->name('callbackVote');

Route::middleware(['auth'])->prefix('user')->group(function () {
    Route::get('/', 'UserController@index')->name('user.index');

    Route::get('password', 'UserController@changePassword')->name('user.password');
    Route::post('password', 'UserController@postChangePassword')->name('user.post.password');

    Route::get('chars', 'UserController@chars')->name('user.chars');
    Route::post('chars', 'UserController@postResetChars')->name('user.post.reset.chars');


    Route::get('payment', 'PaymentController@show')->name('user.payment.show');
    Route::post('payment/check', 'PaymentController@checkStarpass')->name('user.payment.check.starpass');


    Route::post('payment/paypal', 'PayPalController@getPaypal')->name('user.payment.paypal');
    Route::get('payment/paypal/checkout', 'PayPalController@getPaypalCheckout')->name('user.payment.paypal.checkout');
    Route::post('payment/paypal/notify', 'PayPalController@notify');


    Route::middleware(['admin'])->prefix('admin')->namespace('Admin')->as('admin.')->group(function () {
        /*
         * Admin
         */
        Route::get('/', 'AdminController@index')->name('index');

        /*
         * News
         */
        Route::resource('news', 'NewsController');
        Route::get('news/{news}/delete', 'NewsController@destroy')->name('news.destroy');

        /*
         * Category
         */
        Route::resource('category', 'CategoryController');
        Route::get('category/{category}/delete', 'CategoryController@destroy')->name('category.destroy');

        /*
         * Tracking
         */
        VisitStats::routes();
    });
});
