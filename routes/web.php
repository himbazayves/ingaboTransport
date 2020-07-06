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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('Account/home', 'RegistersController@index')->name('registers.index');
Route::get('Account/newTraveller', 'RegistersController@newCustomer')->name('registers.newCustomer');
Route::post('Account/StoreNewTraveller', 'RegistersController@storeNewCustomer')->name('registers.storeNewCustomer');
Route::get('Account/customer', 'RegistersController@customers')->name('registers.customers');
Route::get('/y', 'RegistersController@y');


///
Route::get('Admin/home', 'AdminController@index')->name('admin.index');
Route::get('Admin/all-travels', 'AdminController@customers')->name('admin.customers');
Route::get('Admin/filter-result', 'AdminController@filterResult')->name('admin.filterResult');
Route::post('Admin/filterHandler', 'AdminController@filterHandler')->name('admin.filterHandler');


