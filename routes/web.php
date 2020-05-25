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

// Customers
Route::get('customers', 'CustomerController@index')->name('customer.index');

// The customer's users
Route::get('customer/{customer}/users', 'UserController@index')->name('user.index');
Route::prefix('customer/{customer}/user')->group(function () {
    Route::post('/', 'UserController@store')->name('user.store');

    Route::prefix('{user}')->group(function () {
        Route::get('/', 'UserController@show')->name('user.show');
        Route::patch('/', 'UserController@update')->name('user.update');
        Route::delete('/', 'UserController@destroy')->name('user.destroy');
    });
});
