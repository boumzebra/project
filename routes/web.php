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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/test', function () {
    return view('test');
});
Route::get('/about','App\Http\Controllers\PagesController@about');
Route::get('/service','App\Http\Controllers\PagesController@services');
Route::get('/user/{id}',function($id){
    return 'this is user ' . $id;
});
Route::get('/','App\Http\Controllers\PagesController@index');

