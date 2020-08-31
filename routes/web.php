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

Auth::routes();
// Route::get('/account', function () {
//     return view('account');
// });
// Route::post('submit', 'AccountController@store');

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/account','AccountController');
Route::resource('/cheque','ChequeController');
Route::resource('/debit','DebitController');
Route::resource('/IB','IBController');