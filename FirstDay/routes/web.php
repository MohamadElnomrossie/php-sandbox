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

// Route::get('/', function () {
//     return view('admin.products.all');
// });
Route::get('/','admin\mainController@home');
Route::group(['prefix'=>'dashboard','middleware'=>['auth','verified']],function(){
    Route::get('/','admin\mainController@index')->name('dashboard');
    Route::group(['prefix'=>'products','namespace'=>'admin\products'],function(){
        Route::get('all','productController@index')->name('products.all');
        Route::get('create','productController@create')->name('products.create');
        Route::get('{method}/{id}','productController@edit')->name('products.edit')->middleware('password.confirm');
        Route::post('save','productController@save')->name('products.save');
});
   
});
Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home');

