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
//backend
Route::get('/index','Admincontroller@index');

Route::get('family', 'Admincontroller@family');

Route::get('deletefamily/{id}', 'Admincontroller@deletefamily');

Route::get('office', 'Admincontroller@office');

Route::get('deleteoffice/{id}', 'Admincontroller@deleteoffice');

Route::get('bachelor', 'Admincontroller@bachelor');

Route::get('deletebachelor/{id}', 'Admincontroller@deletebachelor');

Route::get('hostel', 'Admincontroller@hostel');

Route::get('deletehostel/{id}', 'Admincontroller@deletehostel');

//frontend
Route::get('/home','HomeController@home'); 

Route::get('/contact','HomeController@contact');

Route::get('about','HomeController@about');

Route::get('login','HomeController@login');

// Route::get('/login', function () {
//     return view('login');
// });

Route::get('postoffice','HomeController@postoffice');

Route::get('postfamily','HomeController@postfamily');

Route::get('posthostel','HomeController@posthostel');

Route::get('postbachelor','HomeController@postbachelor');

Route::get('postservice','HomeController@postservice');

Route::get('postsublet','HomeController@postsublet');

Route::get('posttransport','HomeController@posttransport');

//for posting

Route::post('postcontact','HomeController@postcontact');

Route::post('familypost', 'HomeController@familypost');

Route::post('hostelpost', 'HomeController@hostelpost');

Route::post('officepost', 'HomeController@officepost');

Route::post('bachelorpost', 'HomeController@bachelorpost');

Route::post('transportpost', 'HomeController@transportpost');

Route::post('servicepost', 'HomeController@servicepost');


//for retrive
    //family
Route::get('viewfamily','HomeController@viewfamily');

Route::get('detailfamily/{id}','HomeController@detailfamily');
Route::get('detailfamily','HomeController@detailfamily');
Route::get('/search','HomeController@search');
    //

   //hostel
Route::get('viewhostel','HomeController@viewhostel');

Route::get('detailhostel','HomeController@detailhostel');

Route::get('detailhostel/{id}','HomeController@detailhostel');

   //

   //bachelor
Route::get('viewbachelor','HomeController@viewbachelor');

Route::get('detailbachelor/{id}','HomeController@detailbachelor');
Route::get('detailbachelor','HomeController@detailbachelor');
Route::get('/search','HomeController@search');
   //

   //service
Route::get('viewservice','HomeController@viewservice');

Route::get('detailservice/{id}','HomeController@detailservice');

Route::get('/search','HomeController@search');
   //

   //transport
Route::get('viewtransport','HomeController@viewtransport');

Route::get('detailtransport/{id}','HomeController@detailtransport');

Route::get('/search','HomeController@search');
   //

   //office
Route::get('viewoffice','HomeController@viewoffice');

Route::get('detailoffice/{id}','HomeController@detailoffice');
Route::get('detailoffice','HomeController@detailoffice');
Route::get('/search','HomeController@search');
   //



