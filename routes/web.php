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
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
Route::get('/', function () {
    return view('welcome');
});

//Route::get('test', function () {
//    return view('welcome');
//});

//Route::post('test', 'logController@test');
//Route::get('test', 'logController@test');
Route::post('test', 'logController@test');

