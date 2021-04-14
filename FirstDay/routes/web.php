<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
    return view('admin.products.all');
});
Route::group(['prefix'=>'products','namespace'=>'admin\products'],function(){
    Route::get('all','productController@index')->name('products.all');
    Route::get('create','productController@create');
    Route::get('edit','productController@edit');
    Route::post('save','productController@save');
   
});
Route::get('/','admin\mainController@dashboard');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
