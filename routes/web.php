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
Route::get('/iklan-panen', 'VoucherController@iklanPanen');
Route::get('/rtp-panen', 'VoucherController@rtpPanen');
Route::get('/promo-panen', 'VoucherController@promoPanen');

Route::get('/admin-promo', 'UserController@index')->name('admin-promo');
Route::get('/update-promo/{id}', 'UserController@editPromo')->name('update-promo');
Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::post('/add-promo', 'UserController@createPromo')->name('add-promo');
Route::post('/update-promo/{id}', 'UserController@editPromo')->name('update-promo');
Route::post('/update-url', 'UserController@updateUrl')->name('update-url');
Route::post('/edit-promo/{id}', 'UserController@updatePromo')->name('edit-promo');
Route::post('/delete-promo', 'UserController@deletePromo')->name('delete-promo');

Route::post('/toggle-site', 'UserController@toggleSite')->name('toggle-site');

Route::get('/changePassword','HomeController@showChangePasswordForm');
Route::post('/changePassword','HomeController@changePassword')->name('changePassword');

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
    'forgot' => false,
]);

