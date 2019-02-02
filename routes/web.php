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


Route::get('/home','HomeController@home'); 

Route::get('contact','HomeController@contact');

Route::get('about','HomeController@about');

Route::get('login','HomeController@login');

// Route::get('/login', function () {
//     return view('login');
// });

Route::get('postoffice','HomeController@postoffice');

Route::get('postfamily','HomeController@postfamily');

Route::get('posthostel','HomeController@posthostel');

Route::get('postbachelor','HomeController@postbachelor');

Route::get('postworker','HomeController@postworker');

Route::get('postsublet','HomeController@postsublet');

Route::get('posttransport','HomeController@posttransport');

//for posting

Route::post('familypost', 'HomeController@familypost');

Route::post('hostelpost', 'HomeController@hostelpost');


//for retrive

Route::get('viewfamily','HomeController@viewfamily');

Route::get('detailfamily/{id}','HomeController@detailfamily');
Route::get('detailfamily','HomeController@detailfamily');
Route::get('/search','HomeController@search');

Route::get('viewhostel','HomeController@viewhostel');



