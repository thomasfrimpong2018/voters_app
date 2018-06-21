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

Route::get('/organiservotes','HomeController@organiserVotes') ; 
    
Route::get('/secretaryvotes','HomeController@secretaryVotes') ; 

 Route::get('/presidentvotes','HomeController@presidentVotes') ;  

 Route::post('/votetreasurer/{vote}','HomeController@votetreasurer')  ;

 Route::get('/confirm-treasurer/{treasurer}','PagesController@confirmTreasurer');

Route::post('/voteorganiser/{vote}','HomeController@voteorganiser')  ;

Route::get('/confirm-organiser/{organiser}','PagesController@confirmOrganiser');


Route::post('/votesecretary/{vote}','HomeController@votesecretary')  ;

Route::get('/confirm-secretary/{secretary}','PagesController@confirmSecretary');  

Route::post('/votepresident/{vote}','HomeController@votepresident')  ;  

Route::get('/confirm-president/{president}','PagesController@confirmPresident');

Route::get('/president','PagesController@president');
   
Route::get('/home','PagesController@index');

Route::get('/secretary','PagesController@secretary');

Route::get('/treasurer','PagesController@treasurer');

Route::get('/organiser','PagesController@organiser');

Route::post('/addPresident','HomeController@addPresident');

Route::post('/addSecretary','HomeController@addSecretary');

Route::post('/addTreasurer','HomeController@addTreasurer');

Route::post('/addOrganiser','HomeController@addOrganiser');