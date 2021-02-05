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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/main','MainController@index');
Route::Post('/main/checklogin', 'MainController@checklogin');
Route::Post('/main/successlogin', 'MainController@successlogin');
Route::Post('/main/logout', 'MainController@logout');