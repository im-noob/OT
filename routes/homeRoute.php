<?php
/*
|--------------------------------------------------------------------------
| Home Page Route
|--------------------------------------------------------------------------
|
| This is collection of all the route used by home page all the route that are 
| directly connected with or used in home page are specified here.
|
*/
/*___________________________ Home Page Routes __________________________________*/


Route::get('/','HomeController@settingPackage');

Route::get('/HomeWelcome','HomeController@settingPackage');

Route::get('/searchResult/{searchKey}','Searchable@searchResult');