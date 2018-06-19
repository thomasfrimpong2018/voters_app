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



Auth::routes();

 Route::get('/', function () {
        return view('index');
    });


   
Route::get('/home','PagesController@index');

Route::get('/secretary','PagesController@secretary');

Route::get('/treasurer','PagesController@treasurer');

Route::get('/organiser','PagesController@organiser');

Route::post('/addPresident','HomeController@addPresident');

Route::post('/addSecretary','HomeController@addSecretary');

Route::post('/addTreasurer','HomeController@addTreasurer');

Route::post('/addOrganiser','HomeController@addOrganiser');