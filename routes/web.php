<?php

include_once(__DIR__."/super.php");
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

Route::get('/Test/Welcome', function () {
    return view('Test.Home');
});

Route::get('/Test/Welcome', function () {
    return view('Test.Home');
});
