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

Route::get('/', 'CustomerController@index')->name('index');

// Customers
Route::get('customers', 'CustomerController@index')->name('customer.index');

// The customer's users
Route::get('customer/{customer}/users', 'UserController@index')->name('user.index');
Route::prefix('customer/{customer}/user')->group(function () {
    Route::get('/create', 'UserController@create')->name('user.create');
    Route::post('/store', 'UserController@store')->name('user.store');

    Route::prefix('{user}')->group(function () {
        Route::get('/', 'UserController@show')->name('user.show');
        Route::get('/edit', 'UserController@edit')->name('user.edit');
        Route::patch('/update', 'UserController@update')->name('user.update');
        Route::delete('/delete', 'UserController@delete')->name('user.delete');
    });
});
