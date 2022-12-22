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
Route::get('/', function () {
    return view('welcome');
});

Route::get('test', function () {
    return view('welcome');
});

Route::post('fromSendGrid', function (\http\Client\Request $request) {
    Log::info($request->all());
    return view('welcome');
});
