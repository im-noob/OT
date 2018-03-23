<?php


/*
|--------------------------------------------------------------------------
| Including web Routes
|--------------------------------------------------------------------------
|
| Here is the list of all route that are required to start the app. If the
| any of the given route is missing apllication will not run until route
| is put into the "routes" directory.
|
*/


include_once(__DIR__.'/homeRoute.php');
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



Route::get('/Test/Welcome', function () {
    return view('Test.Home');
});

Route::get('/Test/Welcome', function () {
    return view('Test.Home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
