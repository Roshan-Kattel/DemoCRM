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
Route::get('/newaccount', function () {
    return view('account2');
});
Route::post('submit', 'newAccountController@store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/cheque','ChequeController');
Route::resource('/debit','DebitController');
Route::resource('/IB','IBController');
// Route::resource('/account','AccountController');

