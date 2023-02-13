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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'HomeController@index');

Route::group(['prefix' => 'menu'], function () {
    Route::post('/add', 'HomeController@menuAdd');
    Route::get('/delete/{id}', 'HomeController@menuDelete');
});

Route::group(['prefix' => 'menuItem'], function () {
    Route::get('/add/{id}', 'HomeController@menuItemAdd');
    Route::any('/update/{id}', 'HomeController@menuItemUpdate');
    Route::get('/delete/{id}', 'HomeController@menuItemDelete');
});

Route::get('/generate-qrcode', 'QrCodeController@index');